"""
AI Portfolio Assistant — FastAPI Backend
Author: Muhammad Umair
Description: Secure Python FastAPI backend for the AI Portfolio chatbot.
             Communicates with Gemini API and serves the PHP portfolio frontend.
"""

import os
import logging
from typing import List, Optional

import google.generativeai as genai
from dotenv import load_dotenv
from fastapi import FastAPI, HTTPException, Request
from fastapi.middleware.cors import CORSMiddleware
from mangum import Mangum
from pydantic import BaseModel, field_validator

# ─────────────────────────────────────────────
# Environment & Logging
# ─────────────────────────────────────────────
load_dotenv()
logging.basicConfig(level=logging.INFO, format="%(asctime)s [%(levelname)s] %(message)s")
logger = logging.getLogger(__name__)

GEMINI_API_KEY = os.getenv("GEMINI_API_KEY", "")
MODEL_NAME = os.getenv("MODEL_NAME", "gemini-2.0-flash")
ALLOWED_ORIGINS = os.getenv("ALLOWED_ORIGINS", "*").split(",")

if not GEMINI_API_KEY:
    logger.warning("GEMINI_API_KEY is not set. Chat endpoint will return 503 until it is configured.")
else:
    genai.configure(api_key=GEMINI_API_KEY)
    logger.info(f"Gemini configured. Using model: {MODEL_NAME}")

# ─────────────────────────────────────────────
# Portfolio Knowledge Base — System Prompt
# ─────────────────────────────────────────────
SYSTEM_PROMPT = """
You are Umair's AI Portfolio Assistant. Your purpose is to answer questions from
visitors, recruiters, and potential clients about Muhammad Umair's portfolio.

You must ONLY answer based on the facts listed below. Do NOT invent, assume, or
fabricate any information not explicitly provided.

If a question cannot be answered from the portfolio knowledge, respond with:
"I don't have that information in my portfolio. Please contact Umair directly for more details."

Keep responses concise, professional, and direct. Do not be verbose.

═══════════════════════════════════════
PORTFOLIO KNOWLEDGE BASE
═══════════════════════════════════════

PROFILE:
- Name: Muhammad Umair
- Primary Role: AI Engineer
- Secondary Role: Full Stack Developer
- Location: Multan, Pakistan
- Email: umairjut26@gmail.com
- GitHub: https://github.com/Umairjut26
- LinkedIn: https://www.linkedin.com/in/muhammad-umair-629564425/
- Fiverr: https://www.fiverr.com/sellers/umairs786/
- Upwork: https://www.upwork.com/freelancers/~0166e95a402c1facd5

EXPERIENCE:
- 4+ years total development experience
- 1+ year focused on AI/LLM development (2025 – Present)
- 3+ years web development experience

WORK HISTORY:
1. AI Engineer – Independent AI Development (2025 – Present)
   Developing AI-powered applications: LLM integrations, AI agents, RAG systems,
   multi-agent workflows, and automation pipelines using Python, LangChain,
   LangGraph, FastAPI, and vector databases.

2. LAMP Stack Developer – BixiSoft (2025 – 2026)
   LAMP stack web applications, database design, server-side logic, performance optimization.

3. Full Stack Developer – Freelance (2025 – Present)
   Global clients: custom web applications, WordPress, Shopify.

4. Full Stack Developer – PITB (2024)
   Full-stack solutions, frontend, backend, databases, security, scalability.

5. ERP Associate – Flipcost (2020 – 2024)
   E-commerce projects, online stores, product listings, payment integrations.

AI TECHNOLOGIES & SKILLS:
- Generative AI / LLMs: OpenAI API, Gemini API, Claude API, OpenRouter, Ollama, Prompt Engineering
- AI Frameworks: LangChain, LangGraph, LCEL (LangChain Expression Language)
- AI Agents: AI Agents, ReAct Agents, Multi-Agent Systems, Tool Calling, Function Calling
- Knowledge & Retrieval: RAG (Retrieval-Augmented Generation), Vector Databases, Embeddings, Document Retrieval, Semantic Search, Memory Systems
- AI Infrastructure: MCP (Model Context Protocol), FastAPI, PostgreSQL, n8n, AI Automation, REST APIs
- Core Language: Python

FULL STACK TECHNOLOGIES:
- Backend: PHP, Laravel, Node.js, Express.js
- Frontend: JavaScript, React, HTML, CSS, Bootstrap, Tailwind CSS
- Databases: MySQL, MongoDB, PostgreSQL, Vector Databases
- Tools: Git, GitHub, Figma, REST APIs

AI PROJECTS:
1. AI Chatbot — AI-powered conversational app using LLM APIs with tool integration.
   Tech: Python, LLM APIs, LangChain, API Integration

2. RAG Knowledge Assistant — Retrieves relevant information from documents before
   generating contextual answers. Tech: Python, RAG, Embeddings, Vector DB, LangChain

3. Multi-Agent AI Research System — Specialized AI agents collaborate using external
   tools (Tavily, BeautifulSoup) to search, process, and generate research results.
   Tech: Python, LangGraph, LangChain, Gemini API, Tavily, AI Agents

4. AI CRM — AI-powered CRM automating customer interactions, lead management,
   data analysis, and intelligent workflows.
   Tech: Python, AI Agents, LLMs, APIs, Automation

5. AI Resume Builder — Resume generation & optimization system creating professional
   resumes tailored for specific job opportunities.
   Tech: Python, LLM APIs, Prompt Engineering, AI Automation

6. AI Website Builder — AI website generation concept assisting with structure,
   content, and development through intelligent AI workflows.
   Tech: LLM APIs, AI Agents, Automation, Web Technologies

WEB PROJECTS:
1. BixiTech (bixitech.com) — Industrial automation & robotics solutions for Industry 4.0
2. CertifyMe.pk (certifyme.pk) — Digital certification platform for professional courses
3. IslamicAsh (islamicash.com) — Sharia-compliant digital banking platform
4. Sales Analytics Panel — Real-time sales tracking dashboard
5. CRM Lead Manager — Lead tracking and automated follow-ups manager
6. Shop Admin Panel — Complete e-commerce admin backend

SERVICES (What Umair Builds):
- AI Chatbots & Custom AI Assistants
- RAG Applications & Document Intelligence
- Autonomous AI Agents & Multi-Agent Systems
- AI Automation & Workflow Integration (n8n, FastAPI)
- Function Calling & Tool Calling Applications
- MCP (Model Context Protocol) based AI Systems
- AI-powered CRM & Automated Lead Workflows
- Custom LLM Applications
- Custom Full Stack Web Applications (Laravel, React, Node.js, PHP)
- E-commerce Solutions

CONTACT:
- Email: umairjut26@gmail.com
- WhatsApp: Available
- Location: Multan, Pakistan
- Available for: AI Engineering, Full Stack Development, Freelance projects

═══════════════════════════════════════
END OF PORTFOLIO KNOWLEDGE BASE
═══════════════════════════════════════
"""


# ─────────────────────────────────────────────
# Pydantic Models
# ─────────────────────────────────────────────
class HistoryMessage(BaseModel):
    role: str   # "user" or "model"
    text: str


class ChatRequest(BaseModel):
    message: str
    history: Optional[List[HistoryMessage]] = None

    @field_validator("message")
    @classmethod
    def message_must_not_be_empty(cls, v: str) -> str:
        if not v or not v.strip():
            raise ValueError("Message cannot be empty.")
        if len(v.strip()) > 2000:
            raise ValueError("Message is too long (max 2000 characters).")
        return v.strip()


class ChatResponse(BaseModel):
    response: str
    success: bool = True


# ─────────────────────────────────────────────
# FastAPI App
# ─────────────────────────────────────────────
app = FastAPI(
    title="AI Portfolio Assistant",
    description="Secure FastAPI backend for Muhammad Umair's portfolio chatbot.",
    version="1.0.0",
    docs_url="/docs",   # Disable in production: docs_url=None
    redoc_url=None,
)

app.add_middleware(
    CORSMiddleware,
    allow_origins=ALLOWED_ORIGINS,
    allow_credentials=False,
    allow_methods=["POST", "GET", "OPTIONS"],
    allow_headers=["Content-Type", "Accept"],
    max_age=600,
)


# ─────────────────────────────────────────────
# Routes
# ─────────────────────────────────────────────
@app.get("/health")
async def health_check():
    """Health check endpoint."""
    return {"status": "ok", "model": MODEL_NAME}


@app.post("/chat", response_model=ChatResponse)
async def chat(request: ChatRequest):
    """
    Accepts a user message and optional conversation history.
    Returns an AI-generated response grounded in portfolio knowledge.
    """
    if not GEMINI_API_KEY:
        raise HTTPException(
            status_code=503,
            detail="AI assistant is not configured. GEMINI_API_KEY is missing.",
        )
    genai.configure(api_key=GEMINI_API_KEY)
    try:
        model = genai.GenerativeModel(
            model_name=MODEL_NAME,
            system_instruction=SYSTEM_PROMPT,
            generation_config=genai.GenerationConfig(
                temperature=0.3,
                max_output_tokens=1500,
            ),
        )

        # Build history for multi-turn conversation
        history_contents = []
        for msg in (request.history or []):
            role = "user" if msg.role == "user" else "model"
            history_contents.append({"role": role, "parts": [msg.text]})

        chat_session = model.start_chat(history=history_contents)
        response = chat_session.send_message(request.message)
        reply = response.text.strip()

        logger.info(f"Chat — Q: {request.message[:80]} | A: {reply[:80]}")
        return ChatResponse(response=reply)

    except ValueError as e:
        raise HTTPException(status_code=422, detail=str(e))
    except Exception as e:
        logger.error(f"Chat error: {e}")
        raise HTTPException(
            status_code=503,
            detail="The AI assistant is temporarily unavailable. Please try again later.",
        )


# ─────────────────────────────────────────────
# Vercel Serverless Handler (mangum wrapper)
# ─────────────────────────────────────────────
handler = Mangum(app, lifespan="off")
