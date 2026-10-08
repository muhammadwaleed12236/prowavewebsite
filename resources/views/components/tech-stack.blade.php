<!-- Tech Stack Section Component -->
<section id="tech-stack" class="section">
    <div class="container">
        <div class="section-header">
            <div class="badge">
                <i class="fas fa-microchip"></i> Modern Technology Matrix
            </div>
            <h2 class="section-title">Built On The <span class="gradient-text-lime">World's Best</span> Tech Stack</h2>
            <p class="section-subtitle">
                We harness industry-leading frameworks, cloud services, and databases with a strong mastery in Laravel ecosystems.
            </p>
        </div>

        <div class="tech-tabs">
            <button class="tech-tab-btn active" data-filter="all">All Tech</button>
            <button class="tech-tab-btn" data-filter="backend">Backend & Laravel</button>
            <button class="tech-tab-btn" data-filter="frontend">Frontend & Web</button>
            <button class="tech-tab-btn" data-filter="mobile">Mobile Apps</button>
            <button class="tech-tab-btn" data-filter="ai">AI & Data</button>
            <button class="tech-tab-btn" data-filter="devops">Cloud & DevOps</button>
        </div>

        <div class="tech-grid">
            @foreach($techStack as $tech)
                <div class="tech-item-card" data-category="{{ $tech['category'] }}">
                    <div class="tech-icon">
                        <i class="{{ strpos($tech['icon'], 'fa-') === 0 ? 'fas ' . $tech['icon'] : 'fab ' . $tech['icon'] }}"></i>
                    </div>
                    <div class="tech-name">{{ $tech['name'] }}</div>
                    <div class="tech-desc">{{ $tech['desc'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
