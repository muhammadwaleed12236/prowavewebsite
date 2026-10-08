<!-- Navigation Bar Component -->
<nav class="navbar">
    <div class="container nav-container">
        <a href="#hero" class="brand-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Prowave Technologies Logo">
            <span>PROWAVE <span class="gradient-text-lime">TECH</span></span>
        </a>

        <ul class="nav-links">
            <li><a href="#services" class="nav-link">Services</a></li>
            <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
            <li><a href="#solutions" class="nav-link">Software Suites</a></li>
            <li><a href="#tech-stack" class="nav-link">Tech Matrix</a></li>
            <li><a href="#calculator" class="nav-link">Scope Estimator</a></li>
            <li><a href="#process" class="nav-link">Workflow</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
            <li class="mobile-drawer-cta">
                <a href="#calculator" class="btn btn-lime" style="width:100%; justify-content:center; margin-top:0.5rem;">
                    <i class="fas fa-sliders"></i> Scope Estimator
                </a>
            </li>
        </ul>

        <div class="nav-right-actions">
            <a href="#calculator" class="btn btn-lime nav-scope-btn" style="padding: 0.55rem 1.25rem; font-size: 0.88rem;">
                <i class="fas fa-sliders"></i> Scope Estimator
            </a>
            <div class="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
</nav>
