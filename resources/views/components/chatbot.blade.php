<!-- Floating AI Chatbot Widget Component -->
<div class="chatbot-widget">
    <div id="chat-trigger" class="chat-trigger" title="Chat with Prowave AI Assistant">
        <i class="fas fa-robot"></i>
    </div>

    <div id="chat-panel" class="chat-panel">
        <div class="chat-header">
            <div style="display:flex; align-items:center; gap:0.6rem;">
                <div style="width:10px; height:10px; border-radius:50%; background:var(--accent-lime); box-shadow:0 0 10px var(--accent-lime);"></div>
                <strong style="color:var(--text-bright); font-size:0.95rem;">Prowave AI Consultant</strong>
            </div>
            <i id="chat-close" class="fas fa-times" style="color:var(--text-muted); cursor:pointer;"></i>
        </div>

        <div id="chat-msg-container" class="chat-messages">
            <div class="msg-bubble msg-bot">
                👋 Hello! Welcome to <strong>Prowave Technologies</strong>. I am your AI software consultant. Ask me anything about custom software, web development, mobile apps, or AI automation!
            </div>
        </div>

        <div style="padding:0.5rem 0.8rem; display:flex; gap:0.4rem; overflow-x:auto; background:#070A12;">
            <button class="chat-chip" data-question="What software services do you offer?" style="padding:0.25rem 0.6rem; font-size:0.75rem; background:rgba(0,163,255,0.1); border:1px solid rgba(0,163,255,0.3); color:var(--primary-blue); border-radius:12px; cursor:pointer; white-space:nowrap;">
                🚀 Custom Software Services
            </button>
            <button class="chat-chip" data-question="How can I get a project timeline estimate?" style="padding:0.25rem 0.6rem; font-size:0.75rem; background:rgba(132,204,22,0.1); border:1px solid rgba(132,204,22,0.3); color:var(--accent-lime); border-radius:12px; cursor:pointer; white-space:nowrap;">
                ⏱️ Scope & Timeline
            </button>
        </div>

        <div class="chat-input-area">
            <input type="text" id="chat-input-field" placeholder="Type a message or question...">
            <button id="chat-send-btn" class="btn btn-primary" style="padding:0.6rem 1rem;">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>
</div>
