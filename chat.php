<?php
/**
 * AI Portfolio Assistant — PHP Direct Backend (Bulletproof Edition)
 * Author: Muhammad Umair
 * Description: Universal PHP backend supporting cURL and stream fallbacks.
 *              Guarantees clean JSON output on all web hosting environments.
 */

// Start output buffering to catch any unexpected PHP output/warnings
ob_start();

ini_set('display_errors', 0);
error_reporting(0);

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    ob_end_clean();
    http_response_code(200);
    exit(0);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ob_end_clean();
    http_response_code(405);
    echo json_encode(['detail' => 'Method Not Allowed']);
    exit;
}

// ─────────────────────────────────────────────
// Parse Input (FormData / URL-encoded OR JSON)
// ─────────────────────────────────────────────
$message = '';
$history = [];

if (!empty($_POST['message'])) {
    $message = trim($_POST['message']);
    $historyRaw = $_POST['history'] ?? '[]';
    $history = is_array($historyRaw) ? $historyRaw : json_decode($historyRaw, true);
} else {
    $rawInput = file_get_contents('php://input');
    $input = json_decode($rawInput, true);
    if (is_array($input)) {
        $message = isset($input['message']) ? trim($input['message']) : '';
        $history = isset($input['history']) && is_array($input['history']) ? $input['history'] : [];
    }
}

if (!is_array($history)) {
    $history = [];
}

if (empty($message)) {
    ob_end_clean();
    http_response_code(422);
    echo json_encode(['detail' => 'Message cannot be empty.']);
    exit;
}

if (strlen($message) > 2000) {
    ob_end_clean();
    http_response_code(422);
    echo json_encode(['detail' => 'Message is too long (max 2000 characters).']);
    exit;
}

// ─────────────────────────────────────────────
// Configuration
// ─────────────────────────────────────────────
$apiKey = getenv('GEMINI_API_KEY') ?: '';
$modelName = getenv('MODEL_NAME') ?: 'gemini-2.0-flash';
$apiUrl = "https://generativelanguage.googleapis.com/v1beta/models/{$modelName}:generateContent?key={$apiKey}";

// ─────────────────────────────────────────────
// Portfolio Knowledge Base — System Prompt
// ─────────────────────────────────────────────
$systemPrompt = <<<EOT
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
EOT;

// ─────────────────────────────────────────────
// Build Gemini Request Body
// ─────────────────────────────────────────────
$contents = [];

foreach ($history as $h) {
    if (isset($h['role']) && isset($h['text'])) {
        $role = ($h['role'] === 'user') ? 'user' : 'model';
        $contents[] = [
            'role' => $role,
            'parts' => [['text' => $h['text']]]
        ];
    }
}

$contents[] = [
    'role' => 'user',
    'parts' => [['text' => $message]]
];

$payload = [
    'system_instruction' => [
        'parts' => [['text' => $systemPrompt]]
    ],
    'contents' => $contents,
    'generationConfig' => [
        'temperature' => 0.3,
        'maxOutputTokens' => 1500
    ]
];

// ─────────────────────────────────────────────
// Primary Method: cURL with SSL Fallback
// ─────────────────────────────────────────────
function callGeminiViaCurl($apiUrl, $payload, $verifySsl = true) {
    if (!function_exists('curl_init')) {
        return [false, 0, 'cURL extension disabled on PHP server'];
    }

    $ch = @curl_init($apiUrl);
    if (!$ch) {
        return [false, 0, 'Failed to initialize cURL'];
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_TIMEOUT, 25);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $verifySsl);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $verifySsl ? 2 : 0);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlErr = curl_error($ch);
    curl_close($ch);

    return [$response, $httpCode, $curlErr];
}

// ─────────────────────────────────────────────
// Fallback Method: file_get_contents Stream Context
// ─────────────────────────────────────────────
function callGeminiViaStream($apiUrl, $payload) {
    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-Type: application/json\r\n",
            'content' => json_encode($payload),
            'timeout' => 25,
            'ignore_errors' => true
        ],
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false
        ]
    ];
    
    $context  = stream_context_create($options);
    $response = @file_get_contents($apiUrl, false, $context);
    
    $httpCode = 200;
    if (isset($http_response_header) && is_array($http_response_header)) {
        foreach ($http_response_header as $header) {
            if (preg_match('#HTTP/\d+\.\d+ (\d+)#i', $header, $matches)) {
                $httpCode = (int)$matches[1];
            }
        }
    }

    $err = ($response === false) ? 'Stream request failed' : '';
    return [$response, $httpCode, $err];
}

// Execute API call
$response = false;
$httpCode = 0;
$err = '';

if (function_exists('curl_init') && function_exists('curl_exec')) {
    list($response, $httpCode, $err) = callGeminiViaCurl($apiUrl, $payload, true);
    
    // SSL Retry
    if ($err && (strpos($err, 'SSL') !== false || strpos($err, 'certificate') !== false || strpos($err, 'issuer') !== false)) {
        list($response, $httpCode, $err) = callGeminiViaCurl($apiUrl, $payload, false);
    }
}

// Fallback to Stream if cURL failed or disabled
if ($response === false || !empty($err) || $httpCode === 0) {
    list($response, $httpCode, $err) = callGeminiViaStream($apiUrl, $payload);
}

// Clear output buffer to remove any warnings/notices
ob_clean();

if ($response === false || (!empty($err) && $httpCode === 0)) {
    http_response_code(500);
    echo json_encode(['detail' => 'AI Connection Error: ' . ($err ?: 'Unable to connect to Gemini API')]);
    exit;
}

if ($httpCode !== 200) {
    $respDecoded = json_decode($response, true);
    $geminiErr = $respDecoded['error']['message'] ?? ('HTTP Error ' . $httpCode);
    http_response_code(500);
    echo json_encode(['detail' => 'Gemini API Error: ' . $geminiErr]);
    exit;
}

$responseData = json_decode($response, true);
$reply = $responseData['candidates'][0]['content']['parts'][0]['text'] ?? '';

if (empty($reply)) {
    http_response_code(500);
    echo json_encode(['detail' => 'Empty response from AI.']);
    exit;
}

echo json_encode(['response' => trim($reply)]);
ob_end_flush();
