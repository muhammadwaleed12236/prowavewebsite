<!-- Footer Component -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <a href="#hero" class="brand-logo" style="margin-bottom:1rem;">
                    <img src="{{ asset('images/logo.png') }}" alt="Prowave Technologies Logo">
                    <span>PROWAVE <span class="gradient-text-lime">TECH</span></span>
                </a>
                <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.5rem; max-width:320px;">
                    Enterprise software development studio specialized in custom software, scalable web applications, mobile platforms, and AI automation.
                </p>
                <div style="display:flex; gap:1rem; font-size:1.2rem; color:var(--text-muted);">
                    <a href="#" style="color:var(--primary-blue);"><i class="fab fa-linkedin"></i></a>
                    <a href="#" style="color:var(--primary-blue);"><i class="fab fa-github"></i></a>
                    <a href="#" style="color:var(--primary-blue);"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color:var(--primary-blue);"><i class="fab fa-facebook"></i></a>
                </div>
            </div>

            <div>
                <h4 style="font-size:1.1rem; margin-bottom:1.2rem;">Core Services</h4>
                <ul style="list-style:none; display:flex; flex-direction:column; gap:0.6rem; font-size:0.9rem; color:var(--text-muted);">
                    <li><a href="#services">Custom Software Development</a></li>
                    <li><a href="#services">Full-Stack Web Apps</a></li>
                    <li><a href="#services">iOS & Android App Dev</a></li>
                    <li><a href="#services">AI & Process Automation</a></li>
                    <li><a href="#services">Cloud DevOps & AWS</a></li>
                </ul>
            </div>

            <div>
                <h4 style="font-size:1.1rem; margin-bottom:1.2rem;">Quick Links</h4>
                <ul style="list-style:none; display:flex; flex-direction:column; gap:0.6rem; font-size:0.9rem; color:var(--text-muted);">
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#tech-stack">Technology Matrix</a></li>
                    <li><a href="#calculator">Scope Estimator</a></li>
                    <li><a href="#portfolio">Featured Case Studies</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h4 style="font-size:1.1rem; margin-bottom:1.2rem;">Tech Insights Newsletter</h4>
                <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:1rem;">
                    Subscribe for quarterly software architecture guides & AI automation insights.
                </p>
                <form onsubmit="event.preventDefault(); alert('Subscribed to Prowave Tech Newsletter!');" style="display:flex; gap:0.5rem;">
                    <input type="email" placeholder="Your email address" style="padding:0.6rem 0.8rem; background:rgba(15,23,42,0.8); border:1px solid var(--border-glass); border-radius:var(--radius-sm); color:#FFF; font-size:0.85rem; width:100%;">
                    <button type="submit" class="btn btn-lime" style="padding:0.6rem 1rem;"><i class="fas fa-arrow-right"></i></button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} PROWAVE TECHNOLOGIES IT SERVICES. All Rights Reserved. Engineered with High-Performance Web Standards.</p>
        </div>
    </div>
</footer>
