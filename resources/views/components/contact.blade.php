<!-- Contact Section Component -->
<section id="contact" class="section">
    <div class="container">
        <div class="section-header">
            <div class="badge badge-lime">
                <i class="fas fa-headset"></i> Start A Project
            </div>
            <h2 class="section-title">Let's Build Something <span class="gradient-text">Extraordinary</span></h2>
            <p class="section-subtitle">
                Have a project idea or need technical consultation? Reach out to Prowave Technologies engineering team today.
            </p>
        </div>

        <div class="contact-grid">
            <!-- Contact Info -->
            <div>
                <h3 style="font-size:1.8rem; margin-bottom:1.5rem;">Get In Touch With Our Engineering Leads</h3>
                <p style="color:var(--text-muted); margin-bottom:2.5rem;">
                    Whether you are a startup building an MVP or an established enterprise transforming your digital infrastructure, we are ready to discuss your vision.
                </p>

                <div class="contact-info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <strong style="color:var(--text-bright); display:block;">Email Us Direct</strong>
                        <span style="color:var(--text-muted);">contact@prowave.tech</span>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="info-icon" style="background:rgba(132, 204, 22, 0.1); color:var(--accent-lime);">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <strong style="color:var(--text-bright); display:block;">Call / WhatsApp</strong>
                        <span style="color:var(--text-muted);">+92 325 9385085</span>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="info-icon">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div>
                        <strong style="color:var(--text-bright); display:block;">Head Office</strong>
                        <span style="color:var(--text-muted);">Prowave Tech Park, Software Technology Zone, Pakistan</span>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="glass-card" style="padding:2.5rem;">
                <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="name">Your Name *</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="e.g. Ali Raza" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Work Email *</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="ali@company.com" required>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div class="form-group">
                            <label class="form-label" for="service">Service Needed</label>
                            <select id="service" name="service" class="form-select">
                                <option value="Custom Software Development">Custom Software Development</option>
                                <option value="Full-Stack Web Development">Full-Stack Web Development</option>
                                <option value="Mobile App Engineering">Mobile App Engineering</option>
                                <option value="AI & Process Automation">AI & Process Automation</option>
                                <option value="Cloud Architecture & DevOps">Cloud Architecture & DevOps</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="budget">Project Scale</label>
                            <select id="budget" name="budget" class="form-select">
                                <option value="MVP / Growth Project">MVP / Growth Project</option>
                                <option value="Mid-Enterprise Product">Mid-Enterprise Product</option>
                                <option value="Large Scale Enterprise Platform">Large Scale Enterprise Platform</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="contact-message">Project Description *</label>
                        <textarea id="contact-message" name="message" rows="4" class="form-textarea" placeholder="Tell us about your project requirements..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width:100%;">
                        <i class="fas fa-paper-plane"></i> Send Project Proposal Inquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
