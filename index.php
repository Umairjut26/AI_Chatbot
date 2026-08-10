<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umair | AI Engineer &amp; Full Stack Developer</title>
    <meta name="description" content="AI Engineer and Full Stack Developer specializing in Generative AI, AI Agents, RAG, LangChain, LangGraph, MCP, automation, and modern web applications.">
    <meta name="keywords" content="AI Engineer, Full Stack Developer, LangChain, LangGraph, RAG, AI Agents, Generative AI, OpenAI, LLM, Python, FastAPI, n8n, Multi-Agent Systems, Vector Database, MCP, Muhammad Umair">
    <meta name="author" content="Muhammad Umair">
    <meta property="og:title" content="Umair | AI Engineer & Full Stack Developer">
    <meta property="og:description" content="AI Engineer and Full Stack Developer building intelligent AI-powered applications, LLM agents, RAG systems, and scalable web solutions.">
    <meta property="og:type" content="website">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Config for Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        secondary: '#a855f7',
                        dark: '#0f172a',
                        'dark-lighter': '#1e293b',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- Custom Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(99, 102, 241, 0.3); }
            50% { box-shadow: 0 0 40px rgba(99, 102, 241, 0.6); }
        }
        @keyframes flow-down {
            0% { opacity: 0.3; transform: translateY(-6px); }
            50% { opacity: 1; }
            100% { opacity: 0.3; transform: translateY(6px); }
        }
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }
        .animate-fade-in { animation: fadeInUp 0.8s ease-out forwards; }
        .animate-pulse-glow { animation: pulse-glow 2s infinite; }
        .animate-flow { animation: flow-down 1.8s ease-in-out infinite; }
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .text-gradient {
            background: linear-gradient(to right, #6366f1, #a855f7, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .text-gradient-ai {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 50%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        html { scroll-behavior: smooth; }
        .reveal { opacity: 0; transform: translateY(20px); transition: all 0.8s ease; }
        .reveal.active { opacity: 1; transform: translateY(0); }

        /* Skill badge */
        .skill-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.3rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.78rem;
            font-weight: 600;
            border: 1px solid rgba(255,255,255,0.08);
            background: rgba(255,255,255,0.04);
            color: #cbd5e1;
            transition: all 0.2s;
        }
        .skill-badge:hover {
            background: rgba(99,102,241,0.15);
            border-color: rgba(99,102,241,0.4);
            color: #a5b4fc;
        }

        /* AI Architecture flow connector */
        .flow-connector {
            width: 2px;
            height: 2rem;
            background: linear-gradient(to bottom, #6366f1, #a855f7);
            margin: 0 auto;
            position: relative;
        }
        .flow-connector::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 7px solid #a855f7;
        }

        /* Mobile menu */
        #mobile-menu {
            display: none;
        }
        #mobile-menu.open {
            display: flex;
        }

        /* AI section node glow */
        .ai-node {
            box-shadow: 0 0 20px rgba(99,102,241,0.2);
            transition: box-shadow 0.3s;
        }
        .ai-node:hover {
            box-shadow: 0 0 35px rgba(99,102,241,0.4);
        }
    </style>
</head>
<body class="bg-[#0b0f1a] text-gray-200 font-sans selection:bg-primary selection:text-white">

    <!-- Background Blobs -->
    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-[10%] left-[15%] w-72 h-72 bg-primary/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
        <div class="absolute top-[40%] right-[10%] w-96 h-96 bg-secondary/20 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-[10%] left-[20%] w-80 h-80 bg-pink-500/10 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 py-6 transition-all duration-300" id="navbar">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="#" class="text-2xl font-display font-bold text-white flex items-center gap-2">
                <span class="w-10 h-10 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center text-white text-xl">M</span>
                Umair <span class="text-primary text-4xl leading-none">.</span>
            </a>

            <div class="hidden md:flex items-center gap-5 glass px-8 py-3 rounded-full text-sm">
                <a href="#home" class="hover:text-primary transition-colors">Home</a>
                <a href="#about" class="hover:text-primary transition-colors">About</a>
                <a href="#ai-engineering" class="hover:text-primary transition-colors">AI Engineering</a>
                <a href="#ai-projects" class="hover:text-primary transition-colors">AI Projects</a>
                <a href="#skills" class="hover:text-primary transition-colors">Skills</a>
                <a href="#services" class="hover:text-primary transition-colors">Services</a>
                <a href="#experience" class="hover:text-primary transition-colors">Experience</a>
                <a href="#contact" class="hover:text-primary transition-colors">Contact</a>
            </div>

            <a href="#contact" class="hidden md:block px-6 py-2.5 bg-white text-dark font-semibold rounded-full hover:bg-primary hover:text-white transition-all duration-300 shadow-lg shadow-white/5">
                Hire Me
            </a>

            <!-- Mobile Toggle -->
            <button id="mobile-toggle" class="md:hidden text-white" aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden flex-col items-center gap-4 glass mt-3 mx-6 px-6 py-6 rounded-2xl text-sm">
            <a href="#home" class="hover:text-primary transition-colors">Home</a>
            <a href="#about" class="hover:text-primary transition-colors">About</a>
            <a href="#ai-engineering" class="hover:text-primary transition-colors">AI Engineering</a>
            <a href="#ai-projects" class="hover:text-primary transition-colors">AI Projects</a>
            <a href="#skills" class="hover:text-primary transition-colors">Skills</a>
            <a href="#services" class="hover:text-primary transition-colors">Services</a>
            <a href="#experience" class="hover:text-primary transition-colors">Experience</a>
            <a href="#contact" class="hover:text-primary transition-colors">Contact</a>
            <a href="#contact" class="px-6 py-2.5 bg-primary text-white font-semibold rounded-full w-full text-center">Hire Me</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center pt-24 reveal">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass text-sm font-medium text-primary">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
                        </span>
                        Available for AI & Web Projects
                    </div>

                    <h1 class="text-5xl md:text-6xl font-display font-extrabold leading-tight text-white">
                        AI Engineer &amp;<br>
                        <span class="text-gradient-ai">Full Stack</span><br>
                        Developer.
                    </h1>

                    <p class="text-lg text-gray-400 max-w-lg leading-relaxed">
                        Hi, I'm <span class="text-white font-semibold">Muhammad Umair</span>. I build intelligent AI-powered applications, LLM agents, RAG systems, automation workflows, and scalable full-stack web applications.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#ai-projects" id="btn-view-ai-projects" class="px-7 py-3.5 bg-gradient-to-r from-primary to-secondary text-white font-bold rounded-2xl hover:scale-105 transition-transform shadow-xl shadow-primary/20 text-sm">
                            <i class="fas fa-robot mr-2"></i>View AI Projects
                        </a>
                        <a href="#projects" id="btn-view-portfolio" class="px-7 py-3.5 bg-primary text-white font-bold rounded-2xl hover:scale-105 transition-transform shadow-xl shadow-primary/20 text-sm">
                            View Portfolio
                        </a>
                        <a href="#contact" id="btn-contact-hero" class="px-7 py-3.5 glass text-white font-bold rounded-2xl hover:bg-white/5 transition-colors border border-white/10 text-sm">
                            Contact Me
                        </a>
                    </div>

                    <div class="flex flex-wrap items-center gap-6 pt-2 text-gray-500">
                        <a href="https://github.com/Umairjut26" target="_blank" class="hover:text-white transition-colors flex items-center gap-2"><i class="fab fa-github text-2xl"></i> Github</a>
                        <a href="https://www.linkedin.com/in/muhammad-umair-629564425/" target="_blank" class="hover:text-white transition-colors flex items-center gap-2"><i class="fab fa-linkedin text-2xl"></i> LinkedIn</a>
                        <a href="https://wa.me/" target="_blank" class="hover:text-white transition-colors flex items-center gap-2"><i class="fab fa-whatsapp text-2xl"></i> WhatsApp</a>
                        <a href="https://www.fiverr.com/sellers/umairs786/" target="_blank" class="hover:text-green-500 transition-colors flex items-center gap-2"><i class="fas fa-laptop-code text-2xl"></i> Fiverr</a>
                        <a href="https://www.upwork.com/freelancers/~0166e95a402c1facd5" target="_blank" class="hover:text-green-600 transition-colors flex items-center gap-2"><i class="fas fa-briefcase text-2xl"></i> Upwork</a>
                    </div>

                    <div class="flex flex-wrap gap-2 pt-2">
                        <span class="skill-badge"><i class="fas fa-brain text-primary text-xs"></i> Generative AI</span>
                        <span class="skill-badge"><i class="fas fa-robot text-secondary text-xs"></i> AI Agents</span>
                        <span class="skill-badge"><i class="fas fa-database text-cyan-400 text-xs"></i> RAG Systems</span>
                        <span class="skill-badge"><i class="fas fa-link text-purple-400 text-xs"></i> LangChain</span>
                        <span class="skill-badge"><i class="fas fa-project-diagram text-pink-400 text-xs"></i> LangGraph</span>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative z-10 w-full aspect-square md:aspect-auto md:h-[580px] rounded-3xl overflow-hidden glass p-4">
                        <div class="w-full h-full rounded-2xl overflow-hidden bg-dark-lighter relative">
                            <!-- Professional Image -->
                            <img src="assets/images/profile.jpg" alt="Muhammad Umair — AI Engineer & Full Stack Developer" class="w-full h-full object-cover hover:grayscale transition-all duration-700 scale-105 hover:scale-100">

                            <div class="absolute bottom-6 left-6 right-6 glass p-5 rounded-2xl">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-xs text-gray-400 uppercase tracking-widest mb-1">Current Focus</p>
                                        <p class="text-white font-bold text-sm">Generative AI &amp; LLM Engineering</p>
                                    </div>
                                    <div class="w-12 h-12 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center">
                                        <i class="fas fa-brain text-white text-lg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative elements -->
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-secondary/30 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-primary/30 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter Section -->
    <section class="py-16 relative">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="text-5xl md:text-6xl font-display font-extrabold text-gradient mb-2">4+</div>
                    <p class="text-gray-400 text-sm uppercase tracking-widest">Years Experience</p>
                </div>
                <div class="text-center group">
                    <div class="text-5xl md:text-6xl font-display font-extrabold text-gradient mb-2">1+</div>
                    <p class="text-gray-400 text-sm uppercase tracking-widest">Year AI/LLM Dev</p>
                </div>
                <div class="text-center group">
                    <div class="text-5xl md:text-6xl font-display font-extrabold text-gradient mb-2">20+</div>
                    <p class="text-gray-400 text-sm uppercase tracking-widest">Projects Built</p>
                </div>
                <div class="text-center group">
                    <div class="text-5xl md:text-6xl font-display font-extrabold text-gradient mb-2">10+</div>
                    <p class="text-gray-400 text-sm uppercase tracking-widest">Happy Clients</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-[#0d121f] reveal">
        <div class="container mx-auto px-6">
            <div class="text-center mb-14">
                <h2 class="text-sm font-bold text-primary tracking-widest uppercase mb-4">About Me</h2>
                <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white">AI Engineer &amp; Full Stack Developer</h3>
            </div>

            <div class="grid md:grid-cols-2 gap-16 items-center max-w-5xl mx-auto">
                <div class="space-y-6">
                    <p class="text-gray-300 leading-relaxed">
                        I am an <span class="text-white font-semibold">AI Engineer</span> and <span class="text-white font-semibold">Full Stack Developer</span> specializing in building AI-powered applications and modern web systems. My work spans LLM integrations, AI agents, RAG systems, tool calling, function calling, MCP, LangChain, LangGraph, automation workflows, and full-stack application development.
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        Alongside AI engineering, I bring strong hands-on experience building web applications using PHP/Laravel, JavaScript, React, Node.js, Express.js, MySQL, MongoDB, PostgreSQL, and modern CSS frameworks. I focus on turning AI capabilities into practical products — intelligent automation systems and user-focused applications.
                    </p>
                    <div class="flex flex-wrap gap-3 pt-2">
                        <a href="assets/resume.pdf" class="px-6 py-3 bg-primary text-white font-bold rounded-xl hover:scale-105 transition-transform text-sm">
                            <i class="fas fa-download mr-2"></i>Download CV
                        </a>
                        <a href="#contact" class="px-6 py-3 glass text-white font-bold rounded-xl hover:bg-white/5 transition-colors border border-white/10 text-sm">
                            Let's Talk
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="glass p-6 rounded-2xl border border-white/5 hover:border-primary/30 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4 class="text-white font-bold mb-1">AI Engineering</h4>
                        <p class="text-gray-500 text-xs">LLMs, Agents, RAG, LangChain, LangGraph</p>
                    </div>
                    <div class="glass p-6 rounded-2xl border border-white/5 hover:border-secondary/30 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center text-secondary text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-code"></i>
                        </div>
                        <h4 class="text-white font-bold mb-1">Full Stack Dev</h4>
                        <p class="text-gray-500 text-xs">PHP, Laravel, React, Node.js, Python</p>
                    </div>
                    <div class="glass p-6 rounded-2xl border border-white/5 hover:border-cyan-500/30 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-cyan-500/10 flex items-center justify-center text-cyan-400 text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h4 class="text-white font-bold mb-1">AI Agents</h4>
                        <p class="text-gray-500 text-xs">Multi-Agent, Tool Calling, MCP</p>
                    </div>
                    <div class="glass p-6 rounded-2xl border border-white/5 hover:border-pink-500/30 transition-all group">
                        <div class="w-12 h-12 rounded-xl bg-pink-500/10 flex items-center justify-center text-pink-400 text-2xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4 class="text-white font-bold mb-1">Automation</h4>
                        <p class="text-gray-500 text-xs">n8n, FastAPI, Workflows, APIs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Engineering Section -->
    <section id="ai-engineering" class="py-24 reveal">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-primary tracking-widest uppercase mb-4">Core Expertise</h2>
                <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white">AI Engineering</h3>
                <p class="text-gray-400 mt-4 max-w-2xl mx-auto">Building intelligent AI-powered systems using modern LLM frameworks, agent architectures, and retrieval-augmented generation pipelines.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Generative AI -->
                <div class="p-8 rounded-[2rem] bg-dark border border-white/5 hover:border-primary/40 transition-all group ai-node">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">Generative AI</h4>
                    <p class="text-gray-500 text-sm mb-5 leading-relaxed">Working with leading LLM APIs to build conversational and generative AI applications.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-badge">OpenAI API</span>
                        <span class="skill-badge">Gemini API</span>
                        <span class="skill-badge">Claude API</span>
                        <span class="skill-badge">OpenRouter</span>
                        <span class="skill-badge">Ollama</span>
                    </div>
                </div>

                <!-- AI Agents -->
                <div class="p-8 rounded-[2rem] bg-dark border border-white/5 hover:border-secondary/40 transition-all group ai-node">
                    <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center text-secondary text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">AI Agents</h4>
                    <p class="text-gray-500 text-sm mb-5 leading-relaxed">Developing autonomous agents that reason, plan, and use tools to accomplish complex tasks.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-badge">AI Agents</span>
                        <span class="skill-badge">ReAct Agents</span>
                        <span class="skill-badge">Tool Calling</span>
                        <span class="skill-badge">Function Calling</span>
                        <span class="skill-badge">Multi-Agent Systems</span>
                        <span class="skill-badge">Agent Workflows</span>
                    </div>
                </div>

                <!-- AI Frameworks -->
                <div class="p-8 rounded-[2rem] bg-dark border border-white/5 hover:border-cyan-500/40 transition-all group ai-node">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 flex items-center justify-center text-cyan-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">AI Frameworks</h4>
                    <p class="text-gray-500 text-sm mb-5 leading-relaxed">Building structured AI pipelines and agent graphs using industry-standard frameworks.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-badge">LangChain</span>
                        <span class="skill-badge">LangGraph</span>
                        <span class="skill-badge">LCEL / Runnables</span>
                    </div>
                </div>

                <!-- Knowledge & Retrieval -->
                <div class="p-8 rounded-[2rem] bg-dark border border-white/5 hover:border-green-500/40 transition-all group ai-node">
                    <div class="w-14 h-14 rounded-2xl bg-green-500/10 flex items-center justify-center text-green-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-database"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">Knowledge &amp; Retrieval</h4>
                    <p class="text-gray-500 text-sm mb-5 leading-relaxed">Implementing RAG pipelines that ground AI responses in reliable, contextual knowledge sources.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-badge">RAG</span>
                        <span class="skill-badge">Vector Databases</span>
                        <span class="skill-badge">Embeddings</span>
                        <span class="skill-badge">Document Retrieval</span>
                        <span class="skill-badge">Semantic Search</span>
                    </div>
                </div>

                <!-- AI Infrastructure -->
                <div class="p-8 rounded-[2rem] bg-dark border border-white/5 hover:border-pink-500/40 transition-all group ai-node">
                    <div class="w-14 h-14 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-server"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">AI Infrastructure</h4>
                    <p class="text-gray-500 text-sm mb-5 leading-relaxed">Building the backend systems, APIs, and automation workflows that power production AI applications.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-badge">MCP</span>
                        <span class="skill-badge">FastAPI</span>
                        <span class="skill-badge">PostgreSQL</span>
                        <span class="skill-badge">n8n</span>
                        <span class="skill-badge">APIs</span>
                        <span class="skill-badge">Memory Systems</span>
                    </div>
                </div>

                <!-- Python + Backend -->
                <div class="p-8 rounded-[2rem] bg-dark border border-white/5 hover:border-yellow-500/40 transition-all group ai-node">
                    <div class="w-14 h-14 rounded-2xl bg-yellow-500/10 flex items-center justify-center text-yellow-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fab fa-python"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-3">Python &amp; Backend</h4>
                    <p class="text-gray-500 text-sm mb-5 leading-relaxed">Core language for AI development — scripting, API servers, automation, and data pipelines.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="skill-badge">Python</span>
                        <span class="skill-badge">FastAPI</span>
                        <span class="skill-badge">REST APIs</span>
                        <span class="skill-badge">Prompt Engineering</span>
                        <span class="skill-badge">AI Automation</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- AI Architecture / Workflow Visual -->
    <section id="ai-architecture" class="py-20 bg-[#0d121f] reveal">
        <div class="container mx-auto px-6">
            <div class="text-center mb-14">
                <h2 class="text-sm font-bold text-primary tracking-widest uppercase mb-4">How I Build</h2>
                <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white">AI Application Architecture</h3>
                <p class="text-gray-400 mt-4 max-w-xl mx-auto">A typical architecture for production AI applications I build — from user interaction to intelligent response generation.</p>
            </div>

            <div class="max-w-sm mx-auto">
                <!-- Flow Nodes -->
                <?php
                $flow_nodes = [
                    ['icon' => 'fa-user', 'label' => 'User', 'color' => 'text-gray-300', 'bg' => 'bg-white/5', 'border' => 'border-white/10'],
                    ['icon' => 'fa-globe', 'label' => 'AI Application', 'color' => 'text-primary', 'bg' => 'bg-primary/10', 'border' => 'border-primary/30'],
                    ['icon' => 'fa-brain', 'label' => 'LLM (OpenAI / Gemini / Claude)', 'color' => 'text-secondary', 'bg' => 'bg-secondary/10', 'border' => 'border-secondary/30'],
                    ['icon' => 'fa-tools', 'label' => 'Tools / APIs / MCP', 'color' => 'text-cyan-400', 'bg' => 'bg-cyan-500/10', 'border' => 'border-cyan-500/30'],
                    ['icon' => 'fa-database', 'label' => 'RAG / Vector Database', 'color' => 'text-green-400', 'bg' => 'bg-green-500/10', 'border' => 'border-green-500/30'],
                    ['icon' => 'fa-robot', 'label' => 'AI Agent / Multi-Agent System', 'color' => 'text-pink-400', 'bg' => 'bg-pink-500/10', 'border' => 'border-pink-500/30'],
                    ['icon' => 'fa-check-circle', 'label' => 'Final Response', 'color' => 'text-yellow-400', 'bg' => 'bg-yellow-500/10', 'border' => 'border-yellow-500/30'],
                ];
                foreach ($flow_nodes as $index => $node):
                ?>
                <div class="flex flex-col items-center">
                    <div class="w-full glass p-4 rounded-2xl border <?php echo $node['border']; ?> flex items-center gap-4 hover:scale-[1.02] transition-transform ai-node">
                        <div class="w-10 h-10 rounded-xl <?php echo $node['bg']; ?> flex items-center justify-center <?php echo $node['color']; ?> flex-shrink-0">
                            <i class="fas <?php echo $node['icon']; ?>"></i>
                        </div>
                        <span class="font-semibold text-white text-sm"><?php echo $node['label']; ?></span>
                    </div>
                    <?php if ($index < count($flow_nodes) - 1): ?>
                    <div class="flow-connector my-1 animate-flow"></div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-[#0b0f1a] reveal">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-primary tracking-widest uppercase mb-4">What I Build</h2>
                <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white">AI &amp; Full Stack Solutions</h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- AI Engineering -->
                <div class="p-8 rounded-[2.5rem] bg-dark border border-white/5 hover:border-primary/30 transition-all group">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center text-primary text-3xl mb-8 group-hover:scale-110 transition-transform">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">AI Engineering</h4>
                    <p class="text-gray-400 leading-relaxed mb-6 text-sm">Building intelligent AI applications, LLM integrations, agents, and RAG systems.</p>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-primary text-xs"></i> AI Chatbots &amp; Assistants</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-primary text-xs"></i> RAG Applications</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-primary text-xs"></i> Multi-Agent Systems</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-primary text-xs"></i> AI Automation &amp; MCP</li>
                    </ul>
                </div>

                <!-- UI/UX Design -->
                <div class="p-8 rounded-[2.5rem] bg-dark border border-white/5 hover:border-cyan-500/30 transition-all group">
                    <div class="w-16 h-16 rounded-2xl bg-cyan-500/10 flex items-center justify-center text-cyan-400 text-3xl mb-8 group-hover:scale-110 transition-transform">
                        <i class="fas fa-bezier-curve"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">UI/UX Design</h4>
                    <p class="text-gray-400 leading-relaxed mb-6 text-sm">Creating intuitive, beautiful interfaces that provide exceptional digital experiences.</p>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-400 text-xs"></i> Wireframing &amp; Prototyping</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-400 text-xs"></i> Visual Identity Design</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-cyan-400 text-xs"></i> User Research</li>
                    </ul>
                </div>

                <!-- Web Development -->
                <div class="p-8 rounded-[2.5rem] bg-dark border border-white/5 hover:border-secondary/30 transition-all group">
                    <div class="w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center text-secondary text-3xl mb-8 group-hover:scale-110 transition-transform">
                        <i class="fas fa-code"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">Web Development</h4>
                    <p class="text-gray-400 leading-relaxed mb-6 text-sm">Building scalable web applications using modern stacks like Laravel, React, and Node.js.</p>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary text-xs"></i> Custom PHP/Laravel Apps</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary text-xs"></i> E-commerce Solutions</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-secondary text-xs"></i> API Integration</li>
                    </ul>
                </div>

                <!-- Product Strategy -->
                <div class="p-8 rounded-[2.5rem] bg-dark border border-white/5 hover:border-pink-500/30 transition-all group">
                    <div class="w-16 h-16 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 text-3xl mb-8 group-hover:scale-110 transition-transform">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">Product Strategy</h4>
                    <p class="text-gray-400 leading-relaxed mb-6 text-sm">Helping businesses define their AI roadmap and turn complex ideas into working products.</p>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-pink-500 text-xs"></i> Technical Consulting</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-pink-500 text-xs"></i> MVP Development</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-pink-500 text-xs"></i> Scalability Planning</li>
                    </ul>
                </div>
            </div>

            <!-- What I Build With AI -->
            <div class="mt-16">
                <div class="text-center mb-10">
                    <h4 class="text-2xl font-display font-bold text-white">What I Build With AI</h4>
                    <p class="text-gray-500 mt-2 text-sm">A snapshot of AI-powered products and systems I develop</p>
                </div>
                <div class="flex flex-wrap justify-center gap-3">
                    <?php
                    $ai_services = [
                        'AI Chatbots', 'Custom AI Assistants', 'RAG Applications', 'AI Agents',
                        'Multi-Agent Systems', 'AI Automation', 'AI API Integrations', 'Tool Calling Systems',
                        'Function Calling Apps', 'MCP-based AI Systems', 'AI-powered CRM',
                        'AI Resume Builders', 'AI Website Builders', 'Custom LLM Applications'
                    ];
                    foreach ($ai_services as $service):
                    ?>
                    <span class="px-4 py-2 glass rounded-full text-sm text-gray-300 border border-white/5 hover:border-primary/30 hover:text-primary transition-all"><?php echo $service; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-24 bg-[#0d121f] reveal">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-primary tracking-widest uppercase mb-4">Core Skills</h2>
                <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white">Tech Stack &amp; Tools</h3>
                <p class="text-gray-500 mt-4 text-sm">Technologies I've worked with across AI engineering and full-stack development</p>
            </div>

            <div class="space-y-10 max-w-5xl mx-auto">
                <?php
                $skill_categories = [
                    [
                        'title' => 'AI & Generative AI',
                        'icon' => 'fa-brain',
                        'color' => 'text-primary',
                        'bg' => 'bg-primary/10',
                        'border' => 'border-primary/20',
                        'skills' => ['Python', 'OpenAI API', 'Gemini API', 'Claude API', 'OpenRouter', 'Ollama', 'Prompt Engineering']
                    ],
                    [
                        'title' => 'AI Engineering',
                        'icon' => 'fa-robot',
                        'color' => 'text-secondary',
                        'bg' => 'bg-secondary/10',
                        'border' => 'border-secondary/20',
                        'skills' => ['LangChain', 'LangGraph', 'LCEL', 'RAG', 'Vector Databases', 'Embeddings', 'Memory Systems', 'Function Calling', 'Tool Calling', 'MCP', 'AI Agents', 'Multi-Agent Systems']
                    ],
                    [
                        'title' => 'AI Automation & Backend',
                        'icon' => 'fa-bolt',
                        'color' => 'text-cyan-400',
                        'bg' => 'bg-cyan-500/10',
                        'border' => 'border-cyan-500/20',
                        'skills' => ['n8n', 'FastAPI', 'REST APIs', 'AI Automation', 'PostgreSQL']
                    ],
                    [
                        'title' => 'Full Stack Development',
                        'icon' => 'fa-code',
                        'color' => 'text-green-400',
                        'bg' => 'bg-green-500/10',
                        'border' => 'border-green-500/20',
                        'skills' => ['PHP', 'Laravel', 'JavaScript', 'React', 'Node.js', 'Express.js']
                    ],
                    [
                        'title' => 'Databases',
                        'icon' => 'fa-database',
                        'color' => 'text-yellow-400',
                        'bg' => 'bg-yellow-500/10',
                        'border' => 'border-yellow-500/20',
                        'skills' => ['MySQL', 'MongoDB', 'PostgreSQL', 'Vector Databases']
                    ],
                    [
                        'title' => 'Frontend',
                        'icon' => 'fa-palette',
                        'color' => 'text-pink-400',
                        'bg' => 'bg-pink-500/10',
                        'border' => 'border-pink-500/20',
                        'skills' => ['HTML', 'CSS', 'Bootstrap', 'Tailwind CSS', 'React']
                    ],
                    [
                        'title' => 'Development Tools',
                        'icon' => 'fa-tools',
                        'color' => 'text-gray-400',
                        'bg' => 'bg-white/5',
                        'border' => 'border-white/10',
                        'skills' => ['Git', 'GitHub', 'REST APIs', 'Figma']
                    ],
                ];
                foreach ($skill_categories as $cat):
                ?>
                <div class="glass p-6 rounded-3xl border <?php echo $cat['border']; ?> hover:border-opacity-60 transition-all">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-10 h-10 rounded-xl <?php echo $cat['bg']; ?> flex items-center justify-center <?php echo $cat['color']; ?>">
                            <i class="fas <?php echo $cat['icon']; ?>"></i>
                        </div>
                        <h4 class="text-white font-bold text-lg"><?php echo $cat['title']; ?></h4>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($cat['skills'] as $skill): ?>
                        <span class="skill-badge"><?php echo $skill; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Web Projects Section -->
    <section id="projects" class="py-24 reveal">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <h2 class="text-sm font-bold text-primary tracking-widest uppercase mb-4">Portfolio</h2>
                    <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white">Web Projects</h3>
                </div>
                <a href="#ai-projects" class="text-primary font-bold hover:underline">View AI Projects →</a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 - BixiTech -->
                <div class="group relative rounded-3xl overflow-hidden glass aspect-video">
                    <img src="assets/images/bixitech.png" class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110 opacity-80" alt="BixiTech project">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/50 to-transparent opacity-90"></div>
                    <div class="absolute bottom-0 left-0 p-6 w-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-primary/20 text-primary text-xs font-bold rounded-full backdrop-blur-md border border-primary/20">Robotics</span>
                            <span class="px-3 py-1 bg-white/10 text-white text-xs font-bold rounded-full backdrop-blur-md border border-white/10">AI</span>
                        </div>
                        <h4 class="text-2xl font-display font-bold text-white mb-2">BixiTech</h4>
                        <p class="text-gray-400 text-sm mb-4 max-w-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">Industrial automation and robotics solutions for Industry 4.0 across Pakistan, Dubai &amp; USA.</p>
                        <a href="https://bixitech.com/" target="_blank" class="inline-flex items-center gap-2 text-white font-bold group/btn text-sm">
                            Visit Site
                            <span class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center group-hover/btn:bg-primary transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Project 2 - CertifyMe -->
                <div class="group relative rounded-3xl overflow-hidden glass aspect-video">
                    <img src="assets/images/certifyme.png" class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110 opacity-80" alt="CertifyMe.pk project">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/50 to-transparent opacity-90"></div>
                    <div class="absolute bottom-0 left-0 p-6 w-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-secondary/20 text-secondary text-xs font-bold rounded-full backdrop-blur-md border border-secondary/20">Education</span>
                            <span class="px-3 py-1 bg-white/10 text-white text-xs font-bold rounded-full backdrop-blur-md border border-white/10">Certification</span>
                        </div>
                        <h4 class="text-2xl font-display font-bold text-white mb-2">CertifyMe.pk</h4>
                        <p class="text-gray-400 text-sm mb-4 max-w-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">Digital certification platform for professional courses and skill verification in Pakistan.</p>
                        <a href="https://certifyme.pk/" target="_blank" class="inline-flex items-center gap-2 text-white font-bold group/btn text-sm">
                            Visit Site
                            <span class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center group-hover/btn:bg-secondary transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Project 3 - IslamicAsh -->
                <div class="group relative rounded-3xl overflow-hidden glass aspect-video">
                    <img src="assets/images/islamicash.png" class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110 opacity-80" alt="IslamicAsh project">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/50 to-transparent opacity-90"></div>
                    <div class="absolute bottom-0 left-0 p-6 w-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 text-xs font-bold rounded-full backdrop-blur-md border border-green-500/20">FinTech</span>
                            <span class="px-3 py-1 bg-white/10 text-white text-xs font-bold rounded-full backdrop-blur-md border border-white/10">Islamic Banking</span>
                        </div>
                        <h4 class="text-2xl font-display font-bold text-white mb-2">IslamicAsh</h4>
                        <p class="text-gray-400 text-sm mb-4 max-w-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">Sharia-compliant digital banking platform offering ethical financial services.</p>
                        <a href="https://islamicash.com/" target="_blank" class="inline-flex items-center gap-2 text-white font-bold group/btn text-sm">
                            Visit Site
                            <span class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center group-hover/btn:bg-green-500 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Project 4 - Analytics Dashboard -->
                <div class="group relative rounded-3xl overflow-hidden glass aspect-video">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70" alt="Sales Analytics Panel">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/50 to-transparent opacity-90"></div>
                    <div class="absolute bottom-0 left-0 p-6 w-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-primary/20 text-primary text-xs font-bold rounded-full backdrop-blur-md border border-primary/20">Dashboard</span>
                            <span class="px-3 py-1 bg-white/10 text-white text-xs font-bold rounded-full backdrop-blur-md border border-white/10">Analytics</span>
                        </div>
                        <h4 class="text-2xl font-display font-bold text-white mb-2">Sales Analytics Panel</h4>
                        <p class="text-gray-400 text-sm mb-4 max-w-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">Real-time sales tracking with interactive charts and performance metrics visualization.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-white font-bold group/btn text-sm">
                            View Case Study
                            <span class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center group-hover/btn:bg-primary transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Project 5 - CRM Dashboard -->
                <div class="group relative rounded-3xl overflow-hidden glass aspect-video">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70" alt="CRM Lead Manager">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/50 to-transparent opacity-90"></div>
                    <div class="absolute bottom-0 left-0 p-6 w-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-secondary/20 text-secondary text-xs font-bold rounded-full backdrop-blur-md border border-secondary/20">CRM</span>
                            <span class="px-3 py-1 bg-white/10 text-white text-xs font-bold rounded-full backdrop-blur-md border border-white/10">Full Stack</span>
                        </div>
                        <h4 class="text-2xl font-display font-bold text-white mb-2">CRM Lead Manager</h4>
                        <p class="text-gray-400 text-sm mb-4 max-w-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">Customer relationship management with lead tracking and automated follow-ups.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-white font-bold group/btn text-sm">
                            View Case Study
                            <span class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center group-hover/btn:bg-secondary transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Project 6 - E-commerce Dashboard -->
                <div class="group relative rounded-3xl overflow-hidden glass aspect-video">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70" alt="Shop Admin Panel">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/50 to-transparent opacity-90"></div>
                    <div class="absolute bottom-0 left-0 p-6 w-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <div class="flex gap-2 mb-3">
                            <span class="px-3 py-1 bg-pink-500/20 text-pink-400 text-xs font-bold rounded-full backdrop-blur-md border border-pink-500/20">E-Commerce</span>
                            <span class="px-3 py-1 bg-white/10 text-white text-xs font-bold rounded-full backdrop-blur-md border border-white/10">Admin Panel</span>
                        </div>
                        <h4 class="text-2xl font-display font-bold text-white mb-2">Shop Admin Panel</h4>
                        <p class="text-gray-400 text-sm mb-4 max-w-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">Complete e-commerce backend with inventory, orders, and revenue management.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-white font-bold group/btn text-sm">
                            View Case Study
                            <span class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center group-hover/btn:bg-pink-500 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Projects Section -->
    <section id="ai-projects" class="py-24 bg-[#0d121f] reveal">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <h2 class="text-sm font-bold text-primary tracking-widest uppercase mb-4">AI Portfolio</h2>
                    <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white">AI Projects</h3>
                    <p class="text-gray-400 mt-3 max-w-xl">Intelligent applications built with LLMs, agent frameworks, and modern AI infrastructure.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $ai_projects = [
                    [
                        'title' => 'AI Chatbot',
                        'desc' => 'AI-powered conversational application using modern LLM APIs with intelligent responses and tool integration.',
                        'tech' => ['Python', 'LLM APIs', 'LangChain', 'API Integration'],
                        'icon' => 'fa-comments',
                        'gradient' => 'from-primary/30 to-secondary/20',
                        'accent' => 'text-primary',
                        'border' => 'border-primary/30',
                        'tag_color' => 'bg-primary/20 text-primary border-primary/20',
                    ],
                    [
                        'title' => 'RAG Knowledge Assistant',
                        'desc' => 'An AI knowledge assistant that retrieves relevant information from documents and knowledge sources before generating contextual answers.',
                        'tech' => ['Python', 'RAG', 'Embeddings', 'Vector DB', 'LangChain'],
                        'icon' => 'fa-search',
                        'gradient' => 'from-cyan-500/30 to-primary/20',
                        'accent' => 'text-cyan-400',
                        'border' => 'border-cyan-500/30',
                        'tag_color' => 'bg-cyan-500/20 text-cyan-400 border-cyan-500/20',
                    ],
                    [
                        'title' => 'Multi-Agent Research System',
                        'desc' => 'An intelligent multi-agent system where specialized AI agents collaborate with external tools to search, retrieve, process, and generate research results using a tool-based workflow architecture.',
                        'tech' => ['Python', 'LangGraph', 'LangChain', 'Gemini API', 'Tavily', 'AI Agents'],
                        'icon' => 'fa-project-diagram',
                        'gradient' => 'from-secondary/30 to-pink-500/20',
                        'accent' => 'text-secondary',
                        'border' => 'border-secondary/30',
                        'tag_color' => 'bg-secondary/20 text-secondary border-secondary/20',
                    ],
                    [
                        'title' => 'AI CRM',
                        'desc' => 'An AI-powered CRM concept designed to automate customer interactions, lead management, data analysis, and intelligent workflows.',
                        'tech' => ['Python', 'AI Agents', 'LLMs', 'APIs', 'Automation'],
                        'icon' => 'fa-handshake',
                        'gradient' => 'from-green-500/30 to-cyan-500/20',
                        'accent' => 'text-green-400',
                        'border' => 'border-green-500/30',
                        'tag_color' => 'bg-green-500/20 text-green-400 border-green-500/20',
                    ],
                    [
                        'title' => 'AI Resume Builder',
                        'desc' => 'An AI-powered resume generation and optimization system that creates professional resumes and tailors content for specific job opportunities.',
                        'tech' => ['Python', 'LLM APIs', 'Prompt Engineering', 'AI Automation'],
                        'icon' => 'fa-file-alt',
                        'gradient' => 'from-yellow-500/30 to-primary/20',
                        'accent' => 'text-yellow-400',
                        'border' => 'border-yellow-500/30',
                        'tag_color' => 'bg-yellow-500/20 text-yellow-400 border-yellow-500/20',
                    ],
                    [
                        'title' => 'AI Website Builder',
                        'desc' => 'An AI-powered website generation concept that assists with website structure, content, and development through intelligent AI workflows.',
                        'tech' => ['LLM APIs', 'AI Agents', 'Automation', 'Web Technologies'],
                        'icon' => 'fa-globe',
                        'gradient' => 'from-pink-500/30 to-secondary/20',
                        'accent' => 'text-pink-400',
                        'border' => 'border-pink-500/30',
                        'tag_color' => 'bg-pink-500/20 text-pink-400 border-pink-500/20',
                    ],
                ];
                foreach ($ai_projects as $proj):
                ?>
                <div class="group flex flex-col p-8 rounded-3xl bg-dark border border-white/5 hover:<?php echo $proj['border']; ?> transition-all duration-300">
                    <!-- Gradient header -->
                    <div class="w-full h-28 rounded-2xl bg-gradient-to-br <?php echo $proj['gradient']; ?> flex items-center justify-center mb-6 group-hover:scale-[1.02] transition-transform relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 30% 40%, white 1px, transparent 1px), radial-gradient(circle at 70% 70%, white 1px, transparent 1px); background-size: 24px 24px;"></div>
                        <i class="fas <?php echo $proj['icon']; ?> text-4xl text-white/80"></i>
                    </div>

                    <h4 class="text-xl font-bold text-white mb-3"><?php echo $proj['title']; ?></h4>
                    <p class="text-gray-400 text-sm leading-relaxed mb-5 flex-1"><?php echo $proj['desc']; ?></p>

                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($proj['tech'] as $t): ?>
                        <span class="px-2.5 py-1 <?php echo $proj['tag_color']; ?> text-xs font-semibold rounded-full border"><?php echo $t; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Tools / Partners Strip -->
    <section class="py-12 border-y border-white/5 bg-dark/50">
        <div class="container mx-auto px-6 overflow-hidden">
            <div class="flex flex-wrap justify-center gap-10 opacity-30 hover:opacity-60 transition-all">
                <span class="text-2xl font-display font-black tracking-tighter">PYTHON</span>
                <span class="text-2xl font-display font-black tracking-tighter">LANGCHAIN</span>
                <span class="text-2xl font-display font-black tracking-tighter">OPENAI</span>
                <span class="text-2xl font-display font-black tracking-tighter">FASTAPI</span>
                <span class="text-2xl font-display font-black tracking-tighter">LARAVEL</span>
                <span class="text-2xl font-display font-black tracking-tighter">REACT</span>
                <span class="text-2xl font-display font-black tracking-tighter">TAILWIND</span>
                <span class="text-2xl font-display font-black tracking-tighter">NEXTJS</span>
                <span class="text-2xl font-display font-black tracking-tighter">n8n</span>
            </div>
        </div>
    </section>

    <!-- Experience Timeline -->
    <section id="experience" class="py-24 bg-[#0d121f] reveal">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-primary tracking-widest uppercase mb-4">My Journey</h2>
                <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white">Work Experience</h3>
            </div>

            <div class="max-w-4xl mx-auto space-y-8">

                <!-- AI Engineering (Current) -->
                <div class="relative pl-8 border-l-2 border-primary/50 hover:border-primary transition-colors group">
                    <div class="absolute -left-3 top-0 w-6 h-6 rounded-full bg-primary/30 border-2 border-primary flex items-center justify-center">
                        <div class="w-2 h-2 bg-primary rounded-full animate-pulse"></div>
                    </div>
                    <div class="glass p-6 rounded-2xl group-hover:border-primary/30 transition-all border border-primary/10">
                        <div class="flex flex-wrap justify-between items-start mb-3 gap-2">
                            <h4 class="text-xl font-bold text-white">AI Engineer</h4>
                            <span class="px-3 py-1 bg-primary/20 text-primary text-xs font-bold rounded-full">2025 - Present</span>
                        </div>
                        <p class="text-primary font-semibold mb-3">Independent AI Development</p>
                        <p class="text-gray-400 text-sm">Developing AI-powered applications including LLM integrations, AI agents, RAG systems, multi-agent workflows, and automation pipelines using Python, LangChain, LangGraph, and modern AI APIs. Building practical AI solutions for real-world use cases.</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="skill-badge">Python</span>
                            <span class="skill-badge">LangChain</span>
                            <span class="skill-badge">LangGraph</span>
                            <span class="skill-badge">RAG</span>
                            <span class="skill-badge">AI Agents</span>
                            <span class="skill-badge">FastAPI</span>
                        </div>
                    </div>
                </div>

                <!-- BixiSoft -->
                <div class="relative pl-8 border-l-2 border-primary/30 hover:border-primary transition-colors group">
                    <div class="absolute -left-3 top-0 w-6 h-6 rounded-full bg-primary/20 border-2 border-primary flex items-center justify-center">
                        <div class="w-2 h-2 bg-primary rounded-full"></div>
                    </div>
                    <div class="glass p-6 rounded-2xl group-hover:border-primary/30 transition-all">
                        <div class="flex flex-wrap justify-between items-start mb-3 gap-2">
                            <h4 class="text-xl font-bold text-white">LAMP Stack Developer</h4>
                            <span class="px-3 py-1 bg-primary/20 text-primary text-xs font-bold rounded-full">2025 - 2026</span>
                        </div>
                        <p class="text-secondary font-semibold mb-3">BixiSoft</p>
                        <p class="text-gray-400 text-sm">Developed and maintained LAMP stack–based web applications, handling database design, server-side logic, and application performance optimization.</p>
                    </div>
                </div>

                <!-- Freelance -->
                <div class="relative pl-8 border-l-2 border-green-500/30 hover:border-green-500 transition-colors group">
                    <div class="absolute -left-3 top-0 w-6 h-6 rounded-full bg-green-500/20 border-2 border-green-500 flex items-center justify-center">
                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                    </div>
                    <div class="glass p-6 rounded-2xl group-hover:border-green-500/30 transition-all">
                        <div class="flex flex-wrap justify-between items-start mb-3 gap-2">
                            <h4 class="text-xl font-bold text-white">Full Stack Developer</h4>
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 text-xs font-bold rounded-full">2025 - Present</span>
                        </div>
                        <p class="text-green-400 font-semibold mb-3">Freelance</p>
                        <p class="text-gray-400 text-sm">Providing comprehensive full-stack development services to global clients, specializing in WordPress, Shopify, and custom web applications.</p>
                    </div>
                </div>

                <!-- PITB -->
                <div class="relative pl-8 border-l-2 border-secondary/30 hover:border-secondary transition-colors group">
                    <div class="absolute -left-3 top-0 w-6 h-6 rounded-full bg-secondary/20 border-2 border-secondary flex items-center justify-center">
                        <div class="w-2 h-2 bg-secondary rounded-full"></div>
                    </div>
                    <div class="glass p-6 rounded-2xl group-hover:border-secondary/30 transition-all">
                        <div class="flex flex-wrap justify-between items-start mb-3 gap-2">
                            <h4 class="text-xl font-bold text-white">Full Stack Developer</h4>
                            <span class="px-3 py-1 bg-secondary/20 text-secondary text-xs font-bold rounded-full">2024 - 2024</span>
                        </div>
                        <p class="text-primary font-semibold mb-3">PITB</p>
                        <p class="text-gray-400 text-sm">Developed and maintained full-stack solutions, managing frontend, backend, and database layers while ensuring performance, security, and scalability.</p>
                    </div>
                </div>

                <!-- Flipcost -->
                <div class="relative pl-8 border-l-2 border-pink-500/30 hover:border-pink-500 transition-colors group">
                    <div class="absolute -left-3 top-0 w-6 h-6 rounded-full bg-pink-500/20 border-2 border-pink-500 flex items-center justify-center">
                        <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                    </div>
                    <div class="glass p-6 rounded-2xl group-hover:border-pink-500/30 transition-all">
                        <div class="flex flex-wrap justify-between items-start mb-3 gap-2">
                            <h4 class="text-xl font-bold text-white">ERP Associate</h4>
                            <span class="px-3 py-1 bg-pink-500/20 text-pink-400 text-xs font-bold rounded-full">2020 - 2024</span>
                        </div>
                        <p class="text-pink-400 font-semibold mb-3">Flipcost</p>
                        <p class="text-gray-400 text-sm">Gained hands-on experience working on e-commerce projects, building online stores, managing product listings, and integrating payment and checkout systems.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 reveal">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-primary tracking-widest uppercase mb-4">Testimonials</h2>
                <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white">What Clients Say</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass p-8 rounded-3xl border border-white/5 hover:border-primary/30 transition-all group">
                    <div class="flex items-center gap-1 text-yellow-400 mb-6">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">"Muhammad delivered an exceptional dashboard that exceeded our expectations. His attention to detail and technical expertise is outstanding."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white font-bold">AK</div>
                        <div>
                            <p class="text-white font-bold">Ahmed Khan</p>
                            <p class="text-gray-500 text-sm">CEO, TechVentures</p>
                        </div>
                    </div>
                </div>

                <div class="glass p-8 rounded-3xl border border-white/5 hover:border-secondary/30 transition-all group">
                    <div class="flex items-center gap-1 text-yellow-400 mb-6">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">"Working with Umair was a pleasure. He understood our vision and delivered a beautiful, functional website on time and within budget."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-secondary to-pink-500 flex items-center justify-center text-white font-bold">SF</div>
                        <div>
                            <p class="text-white font-bold">Sarah Fatima</p>
                            <p class="text-gray-500 text-sm">Founder, EduPlatform</p>
                        </div>
                    </div>
                </div>

                <div class="glass p-8 rounded-3xl border border-white/5 hover:border-pink-500/30 transition-all group">
                    <div class="flex items-center gap-1 text-yellow-400 mb-6">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">"Highly professional and skilled developer. The e-commerce solution he built for us has significantly improved our online sales."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-pink-500 to-primary flex items-center justify-center text-white font-bold">MR</div>
                        <div>
                            <p class="text-white font-bold">Muhammad Raza</p>
                            <p class="text-gray-500 text-sm">Director, ShopOnline</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 reveal">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto glass p-8 md:p-16 rounded-[3rem] border border-white/10 relative overflow-hidden">
                <div class="absolute -top-24 -right-24 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-secondary/10 rounded-full blur-3xl"></div>

                <div class="grid md:grid-cols-2 gap-16 relative z-10">
                    <div>
                        <h2 class="text-sm font-bold text-primary tracking-widest uppercase mb-4">Let's Talk</h2>
                        <h3 class="text-4xl md:text-5xl font-display font-extrabold text-white mb-4">Have an AI idea or a web app to build?</h3>
                        <p class="text-gray-400 mb-8 leading-relaxed">Let's turn your idea into a practical AI-powered product or scalable web application.</p>

                        <div class="space-y-6 mb-8">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-primary/10 flex items-center justify-center text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm">Email me at</p>
                                    <a href="mailto:umairjut26@gmail.com" class="text-white font-bold hover:text-primary transition-colors">umairjut26@gmail.com</a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-secondary/10 flex items-center justify-center text-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm">Based in</p>
                                    <p class="text-white font-bold">Multan, Pakistan</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <a href="mailto:umairjut26@gmail.com" class="px-6 py-3 bg-gradient-to-r from-primary to-secondary text-white font-bold rounded-xl hover:scale-105 transition-transform text-sm">
                                Let's Work Together
                            </a>
                        </div>
                    </div>

                    <form class="space-y-4" action="https://formspree.io/f/xqeavrrp" method="POST">
                        <!-- Formspree Subject -->
                        <input type="hidden" name="_subject" value="New Submission from Portfolio Website">

                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" name="first_name" placeholder="First Name" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary transition-colors" required>
                            <input type="text" name="last_name" placeholder="Last Name" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary transition-colors" required>
                        </div>
                        <input type="email" name="email" placeholder="Email Address" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary transition-colors" required>
                        <textarea name="message" placeholder="Tell me about your project or idea..." rows="4" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary transition-colors" required></textarea>
                        <button type="submit" class="w-full py-5 bg-gradient-to-r from-primary to-secondary text-white font-bold rounded-2xl hover:scale-[1.02] transition-transform shadow-lg shadow-primary/20">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 border-t border-white/5">
        <div class="container mx-auto px-6 text-center">
            <a href="#" class="text-2xl font-display font-bold text-white flex items-center gap-2 justify-center mb-4">
                <span class="w-8 h-8 bg-gradient-to-br from-primary to-secondary rounded-lg flex items-center justify-center text-white text-sm">M</span>
                Umair <span class="text-primary text-3xl leading-none">.</span>
            </a>
            <p class="text-gray-500 text-sm mb-2">AI Engineer &amp; Full Stack Developer</p>
            <p class="text-gray-600 text-xs mb-6">&copy; <?php echo date('Y'); ?> Muhammad Umair. All rights reserved.</p>
            <div class="flex justify-center gap-6">
                <a href="https://www.facebook.com/profile.php?id=100064076440599" target="_blank" class="text-gray-500 hover:text-white transition-colors"><i class="fab fa-facebook text-xl"></i></a>
                <a href="https://www.instagram.com/umair_jutt26/" target="_blank" class="text-gray-500 hover:text-white transition-colors"><i class="fab fa-instagram text-xl"></i></a>
                <a href="https://wa.me/" target="_blank" class="text-gray-500 hover:text-white transition-colors"><i class="fab fa-whatsapp text-xl"></i></a>
                <a href="https://github.com/Umairjut26" target="_blank" class="text-gray-500 hover:text-white transition-colors"><i class="fab fa-github text-xl"></i></a>
                <a href="https://www.linkedin.com/in/muhammad-umair-629564425/" target="_blank" class="text-gray-500 hover:text-white transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
    <script>
        // ─── Navbar scroll effect ───────────────────────────────────────────────
        const nav = document.getElementById('navbar');
        window.onscroll = function() {
            if (window.pageYOffset > 50) {
                nav.classList.add('glass', 'py-4');
                nav.classList.remove('py-6');
            } else {
                nav.classList.remove('glass', 'py-4');
                nav.classList.add('py-6');
            }
        };

        // ─── Scroll Reveal Animation ────────────────────────────────────────────
        function revealOnScroll() {
            document.querySelectorAll('.reveal').forEach(el => {
                if (el.getBoundingClientRect().top < window.innerHeight - 150) {
                    el.classList.add('active');
                }
            });
        }
        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll();

        // ─── Mobile menu toggle ─────────────────────────────────────────────────
        const toggle = document.getElementById('mobile-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        toggle.addEventListener('click', () => mobileMenu.classList.toggle('open'));
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => mobileMenu.classList.remove('open'));
        });
    </script>

    <!-- ═══════════════════════════════════════════════════════════════════ -->
    <!-- FEATURE 1 — Fixed Right-Side ↑ / ↓ Navigation                     -->
    <!-- ═══════════════════════════════════════════════════════════════════ -->
    <div id="scroll-nav" style="
        position: fixed;
        right: 1.25rem;
        top: 50%;
        transform: translateY(-50%);
        z-index: 999;
        display: flex;
        flex-direction: column;
        gap: 0.625rem;
    ">
        <div style="position: relative;">
            <button id="btn-scroll-top" aria-label="Go to Top" title="Go to Top" style="
                width: 2.75rem; height: 2.75rem; border-radius: 0.875rem;
                display: flex; align-items: center; justify-content: center;
                background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);
                color: #cbd5e1; cursor: pointer; transition: all 0.3s ease;
                backdrop-filter: blur(12px); box-shadow: 0 8px 24px rgba(0,0,0,0.4);
                font-size: 1rem;
            ">
                <i class="fas fa-arrow-up"></i>
            </button>
            <span class="scroll-nav-tip" style="right: 3.5rem;">Go to Top</span>
        </div>
        <div style="position: relative;">
            <button id="btn-scroll-bottom" aria-label="Go to Bottom" title="Go to Bottom" style="
                width: 2.75rem; height: 2.75rem; border-radius: 0.875rem;
                display: flex; align-items: center; justify-content: center;
                background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);
                color: #cbd5e1; cursor: pointer; transition: all 0.3s ease;
                backdrop-filter: blur(12px); box-shadow: 0 8px 24px rgba(0,0,0,0.4);
                font-size: 1rem;
            ">
                <i class="fas fa-arrow-down"></i>
            </button>
            <span class="scroll-nav-tip" style="right: 3.5rem;">Go to Bottom</span>
        </div>
    </div>

    <style>
        .scroll-nav-tip {
            position: absolute; top: 50%; transform: translateY(-50%);
            padding: 0.25rem 0.65rem;
            background: rgba(15,23,42,0.95); color: #fff;
            font-size: 0.72rem; font-weight: 600; font-family: 'Plus Jakarta Sans', sans-serif;
            border: 1px solid rgba(255,255,255,0.08); border-radius: 0.5rem;
            white-space: nowrap; pointer-events: none;
            opacity: 0; visibility: hidden;
            transition: opacity 0.2s ease, visibility 0.2s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
        }
        #scroll-nav div:hover .scroll-nav-tip {
            opacity: 1; visibility: visible;
        }
        #btn-scroll-top:hover, #btn-scroll-bottom:hover {
            background: rgba(99,102,241,0.25) !important;
            border-color: rgba(99,102,241,0.5) !important;
            color: #fff !important;
            transform: scale(1.08);
            box-shadow: 0 0 20px rgba(99,102,241,0.4) !important;
        }
        #btn-scroll-top.nav-dim, #btn-scroll-bottom.nav-dim {
            opacity: 0.25; cursor: default; pointer-events: none;
        }
        @media (max-width: 640px) {
            #scroll-nav { right: 0.6rem; }
            #btn-scroll-top, #btn-scroll-bottom { width: 2.25rem !important; height: 2.25rem !important; }
        }
    </style>

    <script>
        // ─── Scroll Arrow Logic ─────────────────────────────────────────────────
        const btnTop    = document.getElementById('btn-scroll-top');
        const btnBottom = document.getElementById('btn-scroll-bottom');

        btnTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        btnBottom.addEventListener('click', () => {
            window.scrollTo({
                top: document.documentElement.scrollHeight - window.innerHeight,
                behavior: 'smooth'
            });
        });

        function updateNavBtns() {
            const y      = window.scrollY;
            const maxY   = document.documentElement.scrollHeight - window.innerHeight;
            btnTop.classList.toggle('nav-dim', y <= 20);
            btnBottom.classList.toggle('nav-dim', y >= maxY - 20);
        }
        window.addEventListener('scroll', updateNavBtns);
        updateNavBtns();
    </script>

    <!-- ═══════════════════════════════════════════════════════════════════ -->
    <!-- FEATURE 2 — AI Portfolio Assistant (FastAPI Backend)               -->
    <!-- ═══════════════════════════════════════════════════════════════════ -->

    <!-- Floating trigger button -->
    <button id="ai-fab" aria-label="Open AI Portfolio Assistant" style="
        position: fixed; bottom: 1.5rem; right: 1.5rem; z-index: 1000;
        width: 3.5rem; height: 3.5rem; border-radius: 50%;
        background: linear-gradient(135deg, #6366f1, #a855f7, #ec4899);
        border: none; cursor: pointer; color: #fff;
        display: flex; align-items: center; justify-content: center;
        box-shadow: 0 8px 30px rgba(99,102,241,0.45);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        font-size: 1.35rem;
    ">
        <i id="ai-fab-icon" class="fas fa-robot"></i>
        <span style="
            position: absolute; top: -2px; right: -2px;
            width: 1rem; height: 1rem; border-radius: 50%;
            background: #22d3ee; border: 2px solid #0b0f1a;
        "></span>
    </button>

    <!-- Chat window -->
    <div id="ai-chat-win" style="
        position: fixed; bottom: 6rem; right: 1rem; z-index: 1000;
        width: min(26rem, calc(100vw - 2rem));
        height: clamp(420px, 60vh, 560px);
        background: rgba(11,15,26,0.97); border: 1px solid rgba(255,255,255,0.1);
        border-radius: 1.5rem; display: flex; flex-direction: column; overflow: hidden;
        box-shadow: 0 24px 60px rgba(0,0,0,0.6);
        backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);
        opacity: 0; visibility: hidden; transform: translateY(16px) scale(0.96);
        transition: opacity 0.3s cubic-bezier(0.16,1,0.3,1),
                    visibility 0.3s, transform 0.3s cubic-bezier(0.16,1,0.3,1);
    ">
        <!-- Header -->
        <div style="
            padding: 1rem 1.25rem; display: flex; align-items: center;
            gap: 0.75rem; border-bottom: 1px solid rgba(255,255,255,0.08);
            background: rgba(255,255,255,0.03); flex-shrink: 0;
        ">
            <div style="
                width: 2.5rem; height: 2.5rem; border-radius: 0.75rem; flex-shrink: 0;
                background: linear-gradient(135deg, #6366f1, #a855f7);
                display: flex; align-items: center; justify-content: center;
                color: #fff; font-size: 1.1rem;
            ">
                <i class="fas fa-brain"></i>
            </div>
            <div style="flex: 1; min-width: 0;">
                <p style="margin: 0; font-weight: 700; color: #fff; font-size: 0.95rem; line-height: 1.2; font-family: 'Outfit', sans-serif;">AI Portfolio Assistant</p>
                <p style="margin: 0; font-size: 0.72rem; color: #94a3b8; margin-top: 1px;">Ask me anything about Umair</p>
            </div>
            <button id="ai-chat-close" aria-label="Close chat" style="
                width: 2rem; height: 2rem; border-radius: 50%; border: none;
                background: rgba(255,255,255,0.06); color: #94a3b8; cursor: pointer;
                display: flex; align-items: center; justify-content: center;
                transition: all 0.2s; font-size: 0.85rem; flex-shrink: 0;
            ">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Messages container -->
        <div id="ai-msgs" style="
            flex: 1; overflow-y: auto; padding: 1rem; display: flex; flex-direction: column;
            gap: 0.75rem; scroll-behavior: smooth;
        ">
            <!-- Greeting injected by JS -->
        </div>

        <!-- Input bar -->
        <form id="ai-chat-form" style="
            padding: 0.75rem; border-top: 1px solid rgba(255,255,255,0.08);
            background: rgba(0,0,0,0.3); display: flex; gap: 0.5rem; flex-shrink: 0;
        ">
            <input id="ai-input" type="text" autocomplete="off"
                placeholder="Ask about Umair's skills, projects, or experience..."
                maxlength="500"
                style="
                    flex: 1; background: rgba(255,255,255,0.05);
                    border: 1px solid rgba(255,255,255,0.1); border-radius: 0.875rem;
                    padding: 0.625rem 1rem; color: #e2e8f0; font-size: 0.82rem;
                    font-family: 'Plus Jakarta Sans', sans-serif; outline: none;
                    transition: border-color 0.2s;
                ">
            <button id="ai-send" type="submit" aria-label="Send message" style="
                width: 2.75rem; height: 2.75rem; flex-shrink: 0; border: none;
                border-radius: 0.875rem; cursor: pointer; color: #fff;
                background: linear-gradient(135deg, #6366f1, #a855f7);
                display: flex; align-items: center; justify-content: center;
                font-size: 0.85rem; transition: transform 0.2s, opacity 0.2s;
                box-shadow: 0 4px 12px rgba(99,102,241,0.35);
            ">
                <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>

    <style>
        /* Message bubbles */
        .ai-bubble { max-width: 85%; border-radius: 1rem; padding: 0.6rem 0.9rem; font-size: 0.82rem; line-height: 1.55; font-family: 'Plus Jakarta Sans', sans-serif; }
        .ai-bubble-bot { align-self: flex-start; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.07); color: #e2e8f0; border-radius: 1rem 1rem 1rem 0.2rem; }
        .ai-bubble-user { align-self: flex-end; background: linear-gradient(135deg, #6366f1, #a855f7); color: #fff; border-radius: 1rem 1rem 0.2rem 1rem; }
        .ai-bubble strong { color: #c4b5fd; }
        /* Typing dots */
        .typing-indicator { display: flex; gap: 4px; align-items: center; padding: 0.5rem 0.85rem; }
        .typing-indicator span { width: 6px; height: 6px; background: #a5b4fc; border-radius: 50%; animation: typeDot 1.4s infinite ease-in-out both; }
        .typing-indicator span:nth-child(1) { animation-delay: -0.32s; }
        .typing-indicator span:nth-child(2) { animation-delay: -0.16s; }
        @keyframes typeDot { 0%,80%,100%{transform:scale(0);opacity:.4} 40%{transform:scale(1);opacity:1} }
        /* Focus ring on input */
        #ai-input:focus { border-color: rgba(99,102,241,0.5) !important; }
        /* FAB hover */
        #ai-fab:hover { transform: scale(1.1); box-shadow: 0 12px 36px rgba(99,102,241,0.55) !important; }
        #ai-fab:active { transform: scale(0.95); }
        /* Close btn hover */
        #ai-chat-close:hover { background: rgba(255,255,255,0.12) !important; color: #fff !important; }
        /* Send btn hover */
        #ai-send:hover { transform: scale(1.06); }
        #ai-send:disabled { opacity: 0.45; transform: none; cursor: default; }
        /* Scrollbar in messages */
        #ai-msgs::-webkit-scrollbar { width: 4px; }
        #ai-msgs::-webkit-scrollbar-track { background: transparent; }
        #ai-msgs::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 4px; }
    </style>

    <script>
        // ─── AI Portfolio Assistant Logic ───────────────────────────────────────

        /**
         * IMPORTANT: Set this to your FastAPI server URL.
         * Local development: http://localhost:8000/chat
         * Production: https://your-api-server.com/chat
         */
        const AI_BACKEND_URL = 'https://ai-chatbot-iota-five-57.vercel.app/chat';

        const fab          = document.getElementById('ai-fab');
        const fabIcon      = document.getElementById('ai-fab-icon');
        const chatWin      = document.getElementById('ai-chat-win');
        const closeBtn     = document.getElementById('ai-chat-close');
        const chatForm     = document.getElementById('ai-chat-form');
        const inputEl      = document.getElementById('ai-input');
        const sendBtn      = document.getElementById('ai-send');
        const msgsEl       = document.getElementById('ai-msgs');

        let chatOpen   = false;
        let isWaiting  = false;
        let msgHistory = [];   // [{role:"user"|"model", text:"..."}]

        function openChat() {
            chatOpen = true;
            chatWin.style.opacity = '1';
            chatWin.style.visibility = 'visible';
            chatWin.style.transform = 'translateY(0) scale(1)';
            fabIcon.className = 'fas fa-times';
            if (msgsEl.children.length === 0) addGreeting();
            setTimeout(() => inputEl.focus(), 300);
        }

        function closeChat() {
            chatOpen = false;
            chatWin.style.opacity = '0';
            chatWin.style.visibility = 'hidden';
            chatWin.style.transform = 'translateY(16px) scale(0.96)';
            fabIcon.className = 'fas fa-robot';
        }

        fab.addEventListener('click', () => chatOpen ? closeChat() : openChat());
        closeBtn.addEventListener('click', closeChat);

        function addGreeting() {
            appendBotMessage("Hi! I'm Umair's AI Portfolio Assistant. Ask me anything about his skills, projects, experience, or services.");
        }

        function escHtml(s) {
            const d = document.createElement('div');
            d.textContent = s;
            return d.innerHTML;
        }

        function formatBotText(raw) {
            let html = escHtml(raw);
            // bold **text**
            html = html.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
            // newlines
            html = html.replace(/\n/g, '<br>');
            return html;
        }

        function appendBotMessage(text) {
            const el = document.createElement('div');
            el.className = 'ai-bubble ai-bubble-bot';
            el.innerHTML = formatBotText(text);
            msgsEl.appendChild(el);
            msgsEl.scrollTop = msgsEl.scrollHeight;
        }

        function appendUserMessage(text) {
            const el = document.createElement('div');
            el.className = 'ai-bubble ai-bubble-user';
            el.textContent = text;
            msgsEl.appendChild(el);
            msgsEl.scrollTop = msgsEl.scrollHeight;
        }

        function showTyping() {
            const el = document.createElement('div');
            el.id = 'ai-typing';
            el.className = 'ai-bubble ai-bubble-bot typing-indicator';
            el.innerHTML = '<span></span><span></span><span></span>';
            msgsEl.appendChild(el);
            msgsEl.scrollTop = msgsEl.scrollHeight;
        }

        function removeTyping() {
            const el = document.getElementById('ai-typing');
            if (el) el.remove();
        }

        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const query = inputEl.value.trim();
            if (!query || isWaiting) return;

            appendUserMessage(query);
            inputEl.value = '';
            isWaiting = true;
            sendBtn.disabled = true;
            showTyping();

            try {
                const res = await fetch(AI_BACKEND_URL, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ message: query, history: msgHistory }),
                    signal: AbortSignal.timeout(25000)
                });

                removeTyping();

                const rawText = await res.text();
                let data = {};
                try {
                    data = JSON.parse(rawText);
                } catch (e) {
                    const preview = rawText.replace(/<[^>]*>?/gm, ' ').replace(/\s+/g, ' ').trim().substring(0, 150);
                    throw new Error(`Server Response (${res.status}): ${preview || 'Empty response'}`);
                }

                if (!res.ok) {
                    throw new Error(data.detail || `Server error ${res.status}`);
                }

                const reply = data.response || data.reply || '';
                if (!reply) throw new Error('Empty response from AI');

                appendBotMessage(reply);

                // Keep last 10 turns in history
                msgHistory.push({ role: 'user', text: query });
                msgHistory.push({ role: 'model', text: reply });
                if (msgHistory.length > 20) msgHistory = msgHistory.slice(-20);

            } catch (err) {
                removeTyping();
                const msg = err.name === 'TimeoutError'
                    ? 'Request timed out. Please try again.'
                    : (err.message.includes('fetch')
                        ? 'Sorry, the AI assistant is temporarily unavailable. Please try again later.'
                        : (err.message || 'Something went wrong. Please try again.'));
                appendBotMessage(msg);
            } finally {
                isWaiting = false;
                sendBtn.disabled = false;
                inputEl.focus();
            }
        });
    </script>

</body>
</html>
