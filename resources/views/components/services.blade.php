<!-- Services Section Component -->
<section id="services" class="section">
    <div class="container">
        <div class="section-header reveal">
            <div class="badge badge-lime">
                <i class="fas fa-layer-group"></i> Core Capabilities
            </div>
            <h2 class="section-title">End-to-End <span class="gradient-text">Software Engineering</span> Services</h2>
            <p class="section-subtitle">
                From custom enterprise software and web platforms to AI automation and mobile apps, we deliver solutions that drive growth.
            </p>
        </div>

        <div class="services-grid">
            @foreach($services as $index => $service)
                <div class="glass-card service-card reveal delay-{{ ($index % 3 + 1) * 100 }}">
                    <div class="service-icon-box">
                        <i class="fas {{ $service['icon'] }}"></i>
                    </div>
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['description'] }}</p>
                    <div class="service-tags">
                        @foreach($service['tags'] as $tag)
                            <span class="service-tag">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
