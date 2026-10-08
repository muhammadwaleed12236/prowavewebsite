<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROWAVE TECHNOLOGIES - Custom Software, ERP Systems & Manufacturing Solutions</title>
    <meta name="description" content="Prowave Technologies is a premier software house offering specialized Business ERP Systems, Manufacturing ERP, POS, CRM, Distribution, Pharmacy, Clinic, and HR Payroll software to grow your business.">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="public/css/app.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="public/images/logo.png">
</head>
<body>

    <!-- Background Canvas Particles -->
    <canvas id="bg-canvas"></canvas>

    <!-- Ambient Glowing Radial Backgrounds -->
    <div class="ambient-glow-1"></div>
    <div class="ambient-glow-2"></div>

    <!-- Sticky Glassmorphism Header Nav -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="#hero" class="brand-logo">
                <img src="public/images/logo.png" alt="Prowave Technologies Logo">
                <span>PROWAVE <span class="gradient-text-lime">TECH</span></span>
            </a>

            <ul class="nav-links">
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#solutions" class="nav-link">Software Suites</a></li>
                <li><a href="#tech-stack" class="nav-link">Tech Matrix</a></li>
                <li><a href="#calculator" class="nav-link">Scope Estimator</a></li>
                <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                <li><a href="#process" class="nav-link">Workflow</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>

            <div style="display: flex; align-items: center; gap: 1rem;">
                <a href="#calculator" class="btn btn-lime" style="padding: 0.6rem 1.4rem; font-size: 0.9rem;">
                    <i class="fas fa-sliders"></i> Scope Estimator
                </a>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="hero" class="hero">
            <div class="container hero-grid">
                <div class="hero-content reveal-left">
                    <div class="badge">
                        <i class="fas fa-chart-line" style="color: var(--accent-lime);"></i> Empower & Scale Your Business
                    </div>
                    
                    <h1 class="hero-title">
                        We Build <span class="gradient-text">Custom Software</span> & ERP Systems To Grow Your Business
                    </h1>
                    
                    <p class="hero-desc">
                        Prowave Technologies engineers enterprise ERP software, manufacturing solutions, POS, CRM, and intelligent AI automation designed to streamline operations and scale your revenue.
                    </p>

                    <div class="hero-cta">
                        <a href="#solutions" class="btn btn-lime">
                            <i class="fas fa-cubes"></i> Explore ERP Suites
                        </a>
                        <a href="#calculator" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Get Project Scope
                        </a>
                    </div>

                    <div class="hero-metrics">
                        <div class="metric-item">
                            <h3 class="counter-val" data-count="250" data-suffix="+">0</h3>
                            <p>Software Suites Deployed</p>
                        </div>
                        <div class="metric-item">
                            <h3 class="counter-val" data-count="99" data-suffix=".4%">0</h3>
                            <p>Client SLA Uptime</p>
                        </div>
                        <div class="metric-item">
                            <h3 class="counter-val" data-count="45" data-suffix="+">0</h3>
                            <p>Tech Experts</p>
                        </div>
                    </div>
                </div>

                <div class="hero-visual-card reveal-right">
                    <!-- Floating Badges ALWAYS Above Code Window -->
                    <div class="floating-pill pill-1">
                        <i class="fas fa-industry" style="font-size: 1.2rem;"></i>
                        <span>Manufacturing ERP Ready</span>
                    </div>
                    <div class="floating-pill pill-2">
                        <i class="fas fa-shield-halved" style="font-size: 1.2rem;"></i>
                        <span>Enterprise Security SLA</span>
                    </div>

                    <!-- Animated Code Card Window -->
                    <div class="laravel-code-window">
                        <div class="window-header">
                            <div class="window-dots">
                                <span class="dot dot-red"></span>
                                <span class="dot dot-yellow"></span>
                                <span class="dot dot-green"></span>
                            </div>
                            <div class="window-title">App\Services\EnterpriseErpSuite.php</div>
                            <div style="font-size: 0.75rem; color: var(--accent-lime);"><i class="fas fa-circle" style="font-size:8px;"></i> ACTIVE</div>
                        </div>
                        <div class="window-body">
                            <p><span class="code-keyword">namespace</span> App\Services;</p>
                            <br>
                            <p><span class="code-keyword">class</span> <span class="code-class">ManufacturingErpSuite</span></p>
                            <p>{</p>
                            <p>&nbsp;&nbsp;<span class="code-comment">// Industrial Production & Raw Material BOM Control</span></p>
                            <p>&nbsp;&nbsp;<span class="code-keyword">public function</span> <span class="code-func">runProductionPlan</span>(<span class="code-class">FactoryOrder</span> $order)</p>
                            <p>&nbsp;&nbsp;{</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;$modules = [</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">'textileErp'</span> => <span class="code-string">'Loom & Production Tracking'</span>,</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">'posInventory'</span> => <span class="code-string">'Real-Time Stock Depletion'</span>,</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">'distribution'</span> => <span class="code-string">'Route Booking & Recovery'</span>,</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">'hrPayroll'</span> => <span class="code-string">'Biometric Salary Automation'</span>,</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;];</p>
                            <br>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">return</span> [</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">'status'</span> => <span class="code-string">'100% Operational Efficiency'</span>,</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">'yield'</span> => <span class="code-string">'Zero Raw Material Wastage'</span></p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;];</p>
                            <p>&nbsp;&nbsp;}</p>
                            <p>}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="section">
            <div class="container">
                <div class="section-header reveal">
                    <div class="badge badge-lime">
                        <i class="fas fa-layer-group"></i> Core Capabilities
                    </div>
                    <h2 class="section-title">End-to-End <span class="gradient-text">Software Engineering</span> Services</h2>
                    <p class="section-subtitle">
                        From custom enterprise ERP systems to mobile app ecosystems and AI automation, we build software designed to transform your business.
                    </p>
                </div>

                <div class="services-grid">
                    <div class="glass-card service-card reveal delay-100">
                        <div class="service-icon-box">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <h3>Custom Software & Enterprise Systems</h3>
                        <p>Tailor-made enterprise software systems, scalable microservices, multi-tenant SaaS platforms, and automated workflow engines.</p>
                        <div class="service-tags">
                            <span class="service-tag">Enterprise ERP</span>
                            <span class="service-tag">POS Systems</span>
                            <span class="service-tag">CRM Portals</span>
                            <span class="service-tag">Manufacturing</span>
                        </div>
                    </div>

                    <div class="glass-card service-card reveal delay-200">
                        <div class="service-icon-box">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Full-Stack Web Development</h3>
                        <p>Ultra-fast, secure, and responsive web applications designed to convert visitors and scale your business operations.</p>
                        <div class="service-tags">
                            <span class="service-tag">Custom Web Apps</span>
                            <span class="service-tag">REST & GraphQL APIs</span>
                            <span class="service-tag">Reactive Frontends</span>
                            <span class="service-tag">Secure Portals</span>
                        </div>
                    </div>

                    <div class="glass-card service-card reveal delay-300">
                        <div class="service-icon-box">
                            <i class="fas fa-mobile-screen-button"></i>
                        </div>
                        <h3>Mobile App Engineering</h3>
                        <p>High-performance cross-platform iOS and Android mobile apps with intuitive UX, real-time push notifications, and cloud sync.</p>
                        <div class="service-tags">
                            <span class="service-tag">iOS & Android Apps</span>
                            <span class="service-tag">Cross-Platform Native</span>
                            <span class="service-tag">Real-Time Push</span>
                            <span class="service-tag">Cloud Backend</span>
                        </div>
                    </div>

                    <div class="glass-card service-card reveal delay-100">
                        <div class="service-icon-box">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>AI & Intelligent Automation</h3>
                        <p>Transform your business with custom AI assistants, automated data extraction pipelines, intelligent chatbots, and workflow automation.</p>
                        <div class="service-tags">
                            <span class="service-tag">AI Chatbots</span>
                            <span class="service-tag">LLM Integration</span>
                            <span class="service-tag">Process Automation</span>
                            <span class="service-tag">Predictive Analytics</span>
                        </div>
                    </div>

                    <div class="glass-card service-card reveal delay-200">
                        <div class="service-icon-box">
                            <i class="fas fa-cloud-arrow-up"></i>
                        </div>
                        <h3>Cloud Infrastructure & DevOps</h3>
                        <p>Robust cloud architecture setup, server optimization, CI/CD pipeline automation, zero-downtime deployment, and 24/7 monitoring.</p>
                        <div class="service-tags">
                            <span class="service-tag">AWS / Cloud</span>
                            <span class="service-tag">Docker Containerization</span>
                            <span class="service-tag">CI/CD Pipelines</span>
                            <span class="service-tag">24/7 Monitoring</span>
                        </div>
                    </div>

                    <div class="glass-card service-card reveal delay-300">
                        <div class="service-icon-box">
                            <i class="fas fa-bezier-curve"></i>
                        </div>
                        <h3>UI/UX & Product Design</h3>
                        <p>User-first digital experiences, high-converting product interfaces, modern design systems, and rapid interactive prototyping.</p>
                        <div class="service-tags">
                            <span class="service-tag">User Experience</span>
                            <span class="service-tag">Modern UI Design</span>
                            <span class="service-tag">Interactive Prototypes</span>
                            <span class="service-tag">Design Systems</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solutions Showcase Section -->
        <section id="solutions" class="section">
            <div class="container">
                <div class="section-header reveal">
                    <div class="badge badge-lime">
                        <i class="fas fa-cubes"></i> Industry Solutions
                    </div>
                    <h2 class="section-title">Enterprise <span class="gradient-text">Business Software</span> & ERP Systems</h2>
                    <p class="section-subtitle">
                        Complete business automation suites designed to streamline operations for manufacturing plants, retail chains, distribution networks, healthcare clinics, and corporate enterprises.
                    </p>
                </div>

                <!-- Manufacturing Industry Featured Spotlight Card -->
                <div class="glass-card reveal delay-100" style="padding: 2.8rem; margin-bottom: 3.5rem; border: 1.5px solid rgba(101, 163, 13, 0.35); background: linear-gradient(135deg, #FFFFFF 0%, #F8FAFC 50%, rgba(101, 163, 13, 0.08) 100%); box-shadow: 0 10px 40px rgba(101, 163, 13, 0.12);">
                    <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 2.5rem; align-items: center;">
                        <div>
                            <div class="badge badge-lime" style="font-size: 0.8rem; margin-bottom: 1rem; background: rgba(101, 163, 13, 0.12); color: #4D7C0F; border-color: rgba(101, 163, 13, 0.35);">
                                <i class="fas fa-industry"></i> FEATURED: Manufacturing & Textile Industry ERP
                            </div>
                            <h3 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 1rem; color: #0F172A;">Textile & Industrial Manufacturing ERP</h3>
                            <p style="color: #475569; font-size: 1.05rem; line-height: 1.6; margin-bottom: 1.6rem;">
                                Tailored specifically for manufacturing plants, textile mills, and production factories. Gain 100% control over raw material BOM (Bill of Materials), loom/machine downtime logs, production line yields, batch inventory, and automated cost accounting.
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 0.6rem; margin-bottom: 2rem;">
                                <span class="service-tag" style="background: rgba(101, 163, 13, 0.1); border-color: rgba(101, 163, 13, 0.3); color: #3F6212; font-weight: 600;"><i class="fas fa-check" style="color: #65A30D;"></i> Production Planning</span>
                                <span class="service-tag" style="background: rgba(101, 163, 13, 0.1); border-color: rgba(101, 163, 13, 0.3); color: #3F6212; font-weight: 600;"><i class="fas fa-check" style="color: #65A30D;"></i> Raw Material BOM</span>
                                <span class="service-tag" style="background: rgba(101, 163, 13, 0.1); border-color: rgba(101, 163, 13, 0.3); color: #3F6212; font-weight: 600;"><i class="fas fa-check" style="color: #65A30D;"></i> Machine Downtime Logs</span>
                                <span class="service-tag" style="background: rgba(101, 163, 13, 0.1); border-color: rgba(101, 163, 13, 0.3); color: #3F6212; font-weight: 600;"><i class="fas fa-check" style="color: #65A30D;"></i> Batch Inventory</span>
                                <span class="service-tag" style="background: rgba(101, 163, 13, 0.1); border-color: rgba(101, 163, 13, 0.3); color: #3F6212; font-weight: 600;"><i class="fas fa-check" style="color: #65A30D;"></i> Yield & Wastage Analytics</span>
                            </div>
                            <a href="#contact" class="btn btn-lime" onclick="prefillContactForm('Textile & Manufacturing ERP System')">
                                <i class="fas fa-industry"></i> Request Manufacturing ERP Demo
                            </a>
                        </div>

                        <div style="text-align: center; padding: 2.2rem 1.8rem; background: #FFFFFF; border: 1px solid rgba(101, 163, 13, 0.25); border-radius: var(--radius-md); box-shadow: 0 8px 30px rgba(15, 23, 42, 0.06);">
                            <div style="font-size: 3.8rem; color: #65A30D; margin-bottom: 1rem;">
                                <i class="fas fa-gears fa-spin" style="animation-duration: 15s;"></i>
                            </div>
                            <div style="font-size: 1.8rem; font-weight: 800; color: #0F172A; margin-bottom: 0.3rem;">Manufacturing Ready</div>
                            <p style="color: #64748B; font-size: 0.95rem; margin-bottom: 1.4rem;">Complete Factory Floor & Inventory Control</p>
                            <div style="color: #F59E0B; font-size: 1.2rem; display: flex; align-items: center; justify-content: center; gap: 0.2rem;">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <span style="color: #0F172A; font-weight: 700; font-size: 0.95rem; margin-left: 0.6rem;">5.0 / 5.0 Rating</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filterable Software Categories -->
                <div class="tech-tabs reveal delay-100">
                    <button class="tech-tab-btn active" data-filter="all-suites">All 10 Software Suites</button>
                    <button class="tech-tab-btn" data-filter="manufacturing">Manufacturing & Industrial</button>
                    <button class="tech-tab-btn" data-filter="enterprise">Enterprise & ERP</button>
                    <button class="tech-tab-btn" data-filter="retail">Retail & POS</button>
                    <button class="tech-tab-btn" data-filter="distribution">Distribution & Supply</button>
                    <button class="tech-tab-btn" data-filter="healthcare">Healthcare & HR</button>
                </div>

                <!-- 10 Software Systems Grid -->
                <div class="services-grid">
                    <!-- 1. Textile ERP -->
                    <div class="glass-card service-card reveal suite-card delay-100" data-category="manufacturing">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
                            <div class="service-icon-box" style="margin-bottom:0;"><i class="fas fa-industry"></i></div>
                            <div style="color:#F59E0B; font-size:0.9rem;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                        <div class="badge" style="font-size:0.75rem; padding:0.2rem 0.6rem; margin-bottom:0.8rem;">Target: Manufacturing & Industrial Factories</div>
                        <h3>Textile & Manufacturing ERP System</h3>
                        <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.2rem;">Comprehensive manufacturing ERP covering production planning, raw material BOM, loom/machine tracking, batch inventory, and yield analysis.</p>
                        <div style="margin-bottom:1.5rem;">
                            <strong style="font-size:0.82rem; color:var(--text-bright); text-transform:uppercase; letter-spacing:0.5px; display:block; margin-bottom:0.5rem;">Core Modules:</strong>
                            <div class="service-tags">
                                <span class="service-tag" style="font-size:0.72rem;">Production Planning</span>
                                <span class="service-tag" style="font-size:0.72rem;">Raw Material BOM</span>
                                <span class="service-tag" style="font-size:0.72rem;">Machine Downtime</span>
                                <span class="service-tag" style="font-size:0.72rem;">Yield Analytics</span>
                            </div>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width:100%; padding:0.6rem 1rem; font-size:0.85rem;" onclick="prefillContactForm('Textile & Manufacturing ERP System')"><i class="fas fa-laptop-code"></i> Request Solution Demo</a>
                    </div>

                    <!-- 2. ERP System -->
                    <div class="glass-card service-card reveal suite-card delay-200" data-category="enterprise">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
                            <div class="service-icon-box" style="margin-bottom:0;"><i class="fas fa-building-gear"></i></div>
                            <div style="color:#F59E0B; font-size:0.9rem;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                        <div class="badge" style="font-size:0.75rem; padding:0.2rem 0.6rem; margin-bottom:0.8rem;">Target: Enterprise Businesses & Corporations</div>
                        <h3>ERP Management System</h3>
                        <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.2rem;">Complete business automation suite unifying finances, multi-branch operations, procurement, stock control, and executive BI reporting.</p>
                        <div style="margin-bottom:1.5rem;">
                            <strong style="font-size:0.82rem; color:var(--text-bright); text-transform:uppercase; letter-spacing:0.5px; display:block; margin-bottom:0.5rem;">Core Modules:</strong>
                            <div class="service-tags">
                                <span class="service-tag" style="font-size:0.72rem;">Financial Accounting</span>
                                <span class="service-tag" style="font-size:0.72rem;">Procurement & Vendor</span>
                                <span class="service-tag" style="font-size:0.72rem;">Multi-Branch Sync</span>
                                <span class="service-tag" style="font-size:0.72rem;">Executive BI</span>
                            </div>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width:100%; padding:0.6rem 1rem; font-size:0.85rem;" onclick="prefillContactForm('ERP Management System')"><i class="fas fa-laptop-code"></i> Request Solution Demo</a>
                    </div>

                    <!-- 3. POS System -->
                    <div class="glass-card service-card reveal suite-card delay-300" data-category="retail">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
                            <div class="service-icon-box" style="margin-bottom:0;"><i class="fas fa-cash-register"></i></div>
                            <div style="color:#F59E0B; font-size:0.9rem;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                        <div class="badge" style="font-size:0.75rem; padding:0.2rem 0.6rem; margin-bottom:0.8rem;">Target: Retail Chains, Supermarkets & Shops</div>
                        <h3>POS & Inventory Management System</h3>
                        <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.2rem;">High-speed point of sale with barcode scanning, automated stock alerts, multi-counter billing, and daily profit loss analytics.</p>
                        <div style="margin-bottom:1.5rem;">
                            <strong style="font-size:0.82rem; color:var(--text-bright); text-transform:uppercase; letter-spacing:0.5px; display:block; margin-bottom:0.5rem;">Core Modules:</strong>
                            <div class="service-tags">
                                <span class="service-tag" style="font-size:0.72rem;">Barcode Scan Billing</span>
                                <span class="service-tag" style="font-size:0.72rem;">Stock Alerts</span>
                                <span class="service-tag" style="font-size:0.72rem;">Multi-Counter POS</span>
                                <span class="service-tag" style="font-size:0.72rem;">Daily P&L Report</span>
                            </div>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width:100%; padding:0.6rem 1rem; font-size:0.85rem;" onclick="prefillContactForm('POS & Inventory System')"><i class="fas fa-laptop-code"></i> Request Solution Demo</a>
                    </div>

                    <!-- 4. CRM System -->
                    <div class="glass-card service-card reveal suite-card delay-100" data-category="enterprise">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
                            <div class="service-icon-box" style="margin-bottom:0;"><i class="fas fa-users-gear"></i></div>
                            <div style="color:#F59E0B; font-size:0.9rem;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                        <div class="badge" style="font-size:0.75rem; padding:0.2rem 0.6rem; margin-bottom:0.8rem;">Target: Sales Teams & Service Agencies</div>
                        <h3>CRM & Lead Management System</h3>
                        <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.2rem;">Complete customer relationship management with lead tracking, deal pipelines, automated WhatsApp/email follow-ups, and sales targets.</p>
                        <div style="margin-bottom:1.5rem;">
                            <strong style="font-size:0.82rem; color:var(--text-bright); text-transform:uppercase; letter-spacing:0.5px; display:block; margin-bottom:0.5rem;">Core Modules:</strong>
                            <div class="service-tags">
                                <span class="service-tag" style="font-size:0.72rem;">Lead Pipeline</span>
                                <span class="service-tag" style="font-size:0.72rem;">WhatsApp/Email Automation</span>
                                <span class="service-tag" style="font-size:0.72rem;">Deal Stages</span>
                                <span class="service-tag" style="font-size:0.72rem;">Sales Targets</span>
                            </div>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width:100%; padding:0.6rem 1rem; font-size:0.85rem;" onclick="prefillContactForm('CRM & Lead Management System')"><i class="fas fa-laptop-code"></i> Request Solution Demo</a>
                    </div>

                    <!-- 5. Restaurant System -->
                    <div class="glass-card service-card reveal suite-card delay-200" data-category="retail">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
                            <div class="service-icon-box" style="margin-bottom:0;"><i class="fas fa-utensils"></i></div>
                            <div style="color:#F59E0B; font-size:0.9rem;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                        <div class="badge" style="font-size:0.75rem; padding:0.2rem 0.6rem; margin-bottom:0.8rem;">Target: Restaurants, Cafes & Outlets</div>
                        <h3>Restaurant & Food Management System</h3>
                        <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.2rem;">Kitchen display system (KDS), table management, recipe costing, online food order integration, and inventory depletion.</p>
                        <div style="margin-bottom:1.5rem;">
                            <strong style="font-size:0.82rem; color:var(--text-bright); text-transform:uppercase; letter-spacing:0.5px; display:block; margin-bottom:0.5rem;">Core Modules:</strong>
                            <div class="service-tags">
                                <span class="service-tag" style="font-size:0.72rem;">Kitchen KDS</span>
                                <span class="service-tag" style="font-size:0.72rem;">Table Orders</span>
                                <span class="service-tag" style="font-size:0.72rem;">Recipe Costing</span>
                                <span class="service-tag" style="font-size:0.72rem;">Rider Track</span>
                            </div>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width:100%; padding:0.6rem 1rem; font-size:0.85rem;" onclick="prefillContactForm('Restaurant Management System')"><i class="fas fa-laptop-code"></i> Request Solution Demo</a>
                    </div>

                    <!-- 6. Distribution System -->
                    <div class="glass-card service-card reveal suite-card delay-300" data-category="distribution">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
                            <div class="service-icon-box" style="margin-bottom:0;"><i class="fas fa-truck-ramp-box"></i></div>
                            <div style="color:#F59E0B; font-size:0.9rem;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                        </div>
                        <div class="badge" style="font-size:0.75rem; padding:0.2rem 0.6rem; margin-bottom:0.8rem;">Target: Distributors, FMCG & Wholesale</div>
                        <h3>Distribution Management System (DMS)</h3>
                        <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.2rem;">Distributor route planning, mobile order booking for field agents, credit recovery tracking, and warehouse dispatch logs.</p>
                        <div style="margin-bottom:1.5rem;">
                            <strong style="font-size:0.82rem; color:var(--text-bright); text-transform:uppercase; letter-spacing:0.5px; display:block; margin-bottom:0.5rem;">Core Modules:</strong>
                            <div class="service-tags">
                                <span class="service-tag" style="font-size:0.72rem;">Route Booking</span>
                                <span class="service-tag" style="font-size:0.72rem;">Credit & Recovery</span>
                                <span class="service-tag" style="font-size:0.72rem;">Van Stock</span>
                                <span class="service-tag" style="font-size:0.72rem;">Distributor App</span>
                            </div>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width:100%; padding:0.6rem 1rem; font-size:0.85rem;" onclick="prefillContactForm('Distribution Management System')"><i class="fas fa-laptop-code"></i> Request Solution Demo</a>
                    </div>

                    <!-- 7. Pharmacy POS -->
                    <div class="glass-card service-card reveal suite-card delay-100" data-category="healthcare">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
                            <div class="service-icon-box" style="margin-bottom:0;"><i class="fas fa-prescription-bottle-medical"></i></div>
                            <div style="color:#F59E0B; font-size:0.9rem;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                        </div>
                        <div class="badge" style="font-size:0.75rem; padding:0.2rem 0.6rem; margin-bottom:0.8rem;">Target: Pharmacies, Medical Stores & Chains</div>
                        <h3>Pharmacy & Healthcare POS System</h3>
                        <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.2rem;">Medicine batch expiry tracking, formula search, supplier purchase orders, regulatory compliance, and quick prescription billing.</p>
                        <div style="margin-bottom:1.5rem;">
                            <strong style="font-size:0.82rem; color:var(--text-bright); text-transform:uppercase; letter-spacing:0.5px; display:block; margin-bottom:0.5rem;">Core Modules:</strong>
                            <div class="service-tags">
                                <span class="service-tag" style="font-size:0.72rem;">Batch Expiry Alerts</span>
                                <span class="service-tag" style="font-size:0.72rem;">Salt/Formula Search</span>
                                <span class="service-tag" style="font-size:0.72rem;">Supplier Purchasing</span>
                                <span class="service-tag" style="font-size:0.72rem;">Prescription Billing</span>
                            </div>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width:100%; padding:0.6rem 1rem; font-size:0.85rem;" onclick="prefillContactForm('Pharmacy POS System')"><i class="fas fa-laptop-code"></i> Request Solution Demo</a>
                    </div>

                    <!-- 8. Clinic System -->
                    <div class="glass-card service-card reveal suite-card delay-200" data-category="healthcare">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
                            <div class="service-icon-box" style="margin-bottom:0;"><i class="fas fa-hospital-user"></i></div>
                            <div style="color:#F59E0B; font-size:0.9rem;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                        </div>
                        <div class="badge" style="font-size:0.75rem; padding:0.2rem 0.6rem; margin-bottom:0.8rem;">Target: Clinics, Hospitals & Doctors</div>
                        <h3>Clinic & Patient Management System</h3>
                        <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.2rem;">Patient EMR records, online appointment scheduling, doctor fee splitting, lab test reports, and automated SMS reminders.</p>
                        <div style="margin-bottom:1.5rem;">
                            <strong style="font-size:0.82rem; color:var(--text-bright); text-transform:uppercase; letter-spacing:0.5px; display:block; margin-bottom:0.5rem;">Core Modules:</strong>
                            <div class="service-tags">
                                <span class="service-tag" style="font-size:0.72rem;">EMR Patient History</span>
                                <span class="service-tag" style="font-size:0.72rem;">Doctor Scheduling</span>
                                <span class="service-tag" style="font-size:0.72rem;">Lab Report Portal</span>
                                <span class="service-tag" style="font-size:0.72rem;">Automated SMS</span>
                            </div>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width:100%; padding:0.6rem 1rem; font-size:0.85rem;" onclick="prefillContactForm('Clinic Management System')"><i class="fas fa-laptop-code"></i> Request Solution Demo</a>
                    </div>

                    <!-- 9. HR & Payroll System -->
                    <div class="glass-card service-card reveal suite-card delay-300" data-category="healthcare">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
                            <div class="service-icon-box" style="margin-bottom:0;"><i class="fas fa-user-tie"></i></div>
                            <div style="color:#F59E0B; font-size:0.9rem;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                        </div>
                        <div class="badge" style="font-size:0.75rem; padding:0.2rem 0.6rem; margin-bottom:0.8rem;">Target: Corporate Companies & Factories</div>
                        <h3>HR & Payroll Management System</h3>
                        <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.2rem;">Biometric attendance sync, automated salary slip generation, loan/advance tracking, provident fund, and leave approvals.</p>
                        <div style="margin-bottom:1.5rem;">
                            <strong style="font-size:0.82rem; color:var(--text-bright); text-transform:uppercase; letter-spacing:0.5px; display:block; margin-bottom:0.5rem;">Core Modules:</strong>
                            <div class="service-tags">
                                <span class="service-tag" style="font-size:0.72rem;">Biometric Sync</span>
                                <span class="service-tag" style="font-size:0.72rem;">Automated Payslips</span>
                                <span class="service-tag" style="font-size:0.72rem;">Loan/Advance Logs</span>
                                <span class="service-tag" style="font-size:0.72rem;">Leave Approvals</span>
                            </div>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width:100%; padding:0.6rem 1rem; font-size:0.85rem;" onclick="prefillContactForm('HR & Payroll Management System')"><i class="fas fa-laptop-code"></i> Request Solution Demo</a>
                    </div>

                    <!-- 10. Custom Software -->
                    <div class="glass-card service-card reveal suite-card delay-100" data-category="enterprise">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
                            <div class="service-icon-box" style="margin-bottom:0;"><i class="fas fa-laptop-code"></i></div>
                            <div style="color:#F59E0B; font-size:0.9rem;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                        </div>
                        <div class="badge" style="font-size:0.75rem; padding:0.2rem 0.6rem; margin-bottom:0.8rem;">Target: Unique Business Workflows & Operations</div>
                        <h3>Custom Business Software</h3>
                        <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.2rem;">Tailor-made software built strictly around your company operating procedures with custom database logic and mobile app extensions.</p>
                        <div style="margin-bottom:1.5rem;">
                            <strong style="font-size:0.82rem; color:var(--text-bright); text-transform:uppercase; letter-spacing:0.5px; display:block; margin-bottom:0.5rem;">Core Modules:</strong>
                            <div class="service-tags">
                                <span class="service-tag" style="font-size:0.72rem;">100% Custom Workflow</span>
                                <span class="service-tag" style="font-size:0.72rem;">API Integration</span>
                                <span class="service-tag" style="font-size:0.72rem;">Role Security</span>
                                <span class="service-tag" style="font-size:0.72rem;">Dedicated SLA</span>
                            </div>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width:100%; padding:0.6rem 1rem; font-size:0.85rem;" onclick="prefillContactForm('Custom Tailored Business Software')"><i class="fas fa-laptop-code"></i> Request Solution Demo</a>
                    </div>
                </div>
            </div>
        </section>

        <script>
        function prefillContactForm(solutionTitle) {
            const contactMsg = document.getElementById('contact-message');
            const contactSection = document.getElementById('contact');
            if (contactMsg) {
                contactMsg.value = `Hi Prowave Engineering Team,\n\nI am interested in your ${solutionTitle} for my business operations. Please schedule a demo and technical walkthrough.`;
            }
            if (contactSection) {
                contactSection.scrollIntoView({ behavior: 'smooth' });
            }
        }
        </script>
