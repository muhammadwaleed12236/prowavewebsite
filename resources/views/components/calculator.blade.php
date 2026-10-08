<!-- Interactive Project Scope & Timeline Estimator Component -->
<section id="calculator" class="section">
    <div class="container">
        <div class="section-header">
            <div class="badge badge-lime">
                <i class="fas fa-sliders"></i> Interactive Estimator
            </div>
            <h2 class="section-title">Estimate Your <span class="gradient-text">Project Scope</span> & Timeline</h2>
            <p class="section-subtitle">
                Select your required software solutions and features to get an instant engineering scope estimate and timeline.
            </p>
        </div>

        <div class="calc-container">
            <div class="calc-grid">
                <!-- Inputs Column -->
                <div class="calc-inputs">
                    <div class="calc-option-title">
                        <i class="fas fa-desktop" style="color:var(--primary-blue);"></i> 1. Select Solution Type
                    </div>

                    <div class="platform-selector">
                        <div class="platform-btn selected" data-complexity="Custom Web System" data-base-weeks="4" data-platform-name="Custom Web Development">
                            <i class="fas fa-globe"></i>
                            <strong>Custom Web Development</strong>
                            <p style="font-size:0.8rem; color:var(--text-muted); margin-top:0.3rem;">Scalable Web Portal + APIs</p>
                        </div>

                        <div class="platform-btn" data-complexity="Mobile Application" data-base-weeks="5" data-platform-name="Mobile App Development">
                            <i class="fas fa-mobile-alt"></i>
                            <strong>Mobile App Development</strong>
                            <p style="font-size:0.8rem; color:var(--text-muted); margin-top:0.3rem;">iOS & Android Cross-Platform</p>
                        </div>

                        <div class="platform-btn" data-complexity="Enterprise SaaS Platform" data-base-weeks="6" data-platform-name="Custom SaaS & ERP Software">
                            <i class="fas fa-cubes"></i>
                            <strong>Custom Software / SaaS</strong>
                            <p style="font-size:0.8rem; color:var(--text-muted); margin-top:0.3rem;">Enterprise Multi-Tenant Engine</p>
                        </div>

                        <div class="platform-btn" data-complexity="AI & Process Automation" data-base-weeks="5" data-platform-name="AI & Workflow Automation">
                            <i class="fas fa-brain"></i>
                            <strong>AI & Process Automation</strong>
                            <p style="font-size:0.8rem; color:var(--text-muted); margin-top:0.3rem;">LLM Pipelines & Chatbots</p>
                        </div>
                    </div>

                    <div class="calc-option-title">
                        <i class="fas fa-list-check" style="color:var(--accent-lime);"></i> 2. Select Features Required
                    </div>

                    <div class="features-selector">
                        <label class="feature-check">
                            <input type="checkbox" data-weeks="0.5" data-feature="User Auth & Roles">
                            <span>User Roles & Security Authentication</span>
                        </label>

                        <label class="feature-check">
                            <input type="checkbox" data-weeks="1" data-feature="Payment Gateway Integration">
                            <span>Global Payment Gateway Integration</span>
                        </label>

                        <label class="feature-check">
                            <input type="checkbox" data-weeks="1" data-feature="Admin Analytics Dashboard">
                            <span>Interactive Admin Dashboard</span>
                        </label>

                        <label class="feature-check">
                            <input type="checkbox" data-weeks="1" data-feature="Real-Time Data Sync">
                            <span>Real-Time WebSockets & Notifications</span>
                        </label>

                        <label class="feature-check">
                            <input type="checkbox" data-weeks="1.5" data-feature="AI Chatbot Integration">
                            <span>Custom AI Assistant / Automation</span>
                        </label>

                        <label class="feature-check">
                            <input type="checkbox" data-weeks="1" data-feature="Multi-Language Support">
                            <span>Multi-Language & Localization</span>
                        </label>
                    </div>
                </div>

                <!-- Live Summary Column -->
                <div class="quote-summary-card">
                    <div>
                        <div class="badge" style="margin-bottom:0.5rem;">Project Scope Summary</div>
                        <p style="font-size:0.9rem; color:var(--text-muted);">Estimated Engineering Plan:</p>
                        <div class="quote-amount" id="calc-quote-amount" style="font-size: 2rem;">Custom Scope</div>
                        <div class="quote-timeline" id="calc-quote-timeline">
                            <i class="far fa-clock" style="color:var(--accent-lime);"></i> Est. Timeline: <strong>4 - 6 Weeks</strong> | Dedicated Product Team
                        </div>

                        <ul style="list-style:none; font-size:0.85rem; color:var(--text-muted); display:flex; flex-direction:column; gap:0.6rem; margin-bottom:2rem;">
                            <li><i class="fas fa-check-circle" style="color:var(--accent-lime);"></i> Full Source Code & IP Ownership</li>
                            <li><i class="fas fa-check-circle" style="color:var(--accent-lime);"></i> Enterprise Security & Quality Audit</li>
                            <li><i class="fas fa-check-circle" style="color:var(--accent-lime);"></i> Automated Cloud Deployment Setup</li>
                            <li><i class="fas fa-check-circle" style="color:var(--accent-lime);"></i> Non-Disclosure Agreement (NDA) Protected</li>
                        </ul>
                    </div>

                    <button id="calc-book-btn" class="btn btn-lime" style="width:100%;" data-estimate="Project Timeline: 4-6 weeks for Custom Web Development">
                        <i class="fas fa-calendar-check"></i> Request Custom Project Proposal
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
