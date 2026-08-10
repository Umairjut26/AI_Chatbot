# AI Portfolio Assistant — FastAPI Backend

Secure Python FastAPI backend for Muhammad Umair's portfolio AI chatbot.

## Architecture

```
Portfolio Visitor
      ↓
JavaScript (index.php)
      ↓  fetch() POST /chat
FastAPI (main.py)
      ↓
Gemini API (LLM)
      ↓
JSON Response
      ↓
JavaScript displays answer
```

## Project Structure

```
ai-chatbot/
├── main.py            ← FastAPI application
├── requirements.txt   ← Python dependencies
├── .env               ← Your private secrets (NOT in Git)
├── .env.example       ← Template — copy to .env
├── .gitignore         ← Ignores .env and __pycache__
└── README.md          ← This file
```

## Setup & Run

### 1. Install Python dependencies

```bash
cd ai-chatbot
pip install -r requirements.txt
```

### 2. Configure environment

```bash
copy .env.example .env
```

Open `.env` and paste your Gemini API key:

```
GEMINI_API_KEY=your_key_here
MODEL_NAME=gemini-flash-latest
ALLOWED_ORIGINS=*
```

> ⚠️ NEVER commit `.env` to Git.

### 3. Start the FastAPI server

```bash
uvicorn main:app --host 0.0.0.0 --port 8000 --reload
```

The API will be available at: **http://localhost:8000**

API docs (Swagger): **http://localhost:8000/docs**

Health check: **http://localhost:8000/health**

---

## API Reference

### POST /chat

Request:
```json
{
  "message": "What AI technologies does Umair use?",
  "history": []
}
```

Response:
```json
{
  "response": "Umair works with...",
  "success": true
}
```

---

## Important Notes

- The API key is stored **only** in `.env` — never in frontend JS or PHP.
- CORS is configured to allow requests from the portfolio frontend.
- For production, restrict `ALLOWED_ORIGINS` to your domain.
- The chatbot only answers questions about the portfolio knowledge base.
- Working model for this API key: `gemini-flash-latest`.
- `gemini-1.5-flash` is NOT available for this API key.
