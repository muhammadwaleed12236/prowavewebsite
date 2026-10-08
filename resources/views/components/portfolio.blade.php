<!-- Portfolio Section Component -->
<section id="portfolio" class="section">
    <div class="container">
        <div class="section-header reveal">
            <div class="badge">
                <i class="fas fa-trophy"></i> Featured Case Studies
            </div>
            <h2 class="section-title">Our Recent <span class="gradient-text">Software Projects</span></h2>
            <p class="section-subtitle">
                Explore real enterprise software systems, manufacturing ERPs, POS platforms, and distribution portals engineered by Prowave Technologies.
            </p>
        </div>

        <div class="portfolio-grid">
            @foreach($portfolio as $index => $item)
                <div class="glass-card portfolio-card reveal delay-{{ ($index % 2 + 1) * 150 }}">
                    <div class="portfolio-img-wrapper">
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
                    </div>
                    <div class="portfolio-body">
                        <div class="badge badge-lime" style="font-size:0.75rem; padding:0.25rem 0.75rem; margin-bottom:0.7rem; letter-spacing:0.5px;">
                            {{ $item['category'] }}
                        </div>
                        <h3>{{ $item['title'] }}</h3>
                        <p>{{ $item['description'] }}</p>
                        <div style="padding-top:0.9rem; border-top:1px solid var(--border-glass); font-size:0.88rem; color:var(--accent-lime); font-weight:600; display:flex; align-items:center; gap:0.5rem;">
                            <i class="fas fa-chart-line"></i> {{ $item['impact'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
