/*
  PROWAVE TECHNOLOGIES IT SERVICES - Main JS Engine
  Handles particle canvas, custom glowing cursor follower, scroll reveals, spotlight mouse trails, mobile drawer, & counters.
*/

document.addEventListener('DOMContentLoaded', () => {
  initCustomCursor();
  initBackgroundCanvas();
  initNavbarScroll();
  initMetricCounters();
  initTechStackTabs();
  initSuiteTabs();
  initContactForm();
  initMobileNav();
  initScrollReveals();
  initSpotlightHover();
});

/* Custom Glowing Cursor Follower Engine */
function initCustomCursor() {
  let dot = document.getElementById('cursor-dot');
  let ring = document.getElementById('cursor-ring');

  if (!dot) {
    dot = document.createElement('div');
    dot.id = 'cursor-dot';
    document.body.appendChild(dot);
  }

  if (!ring) {
    ring = document.createElement('div');
    ring.id = 'cursor-ring';
    document.body.appendChild(ring);
  }

  let mouseX = window.innerWidth / 2;
  let mouseY = window.innerHeight / 2;
  let ringX = mouseX;
  let ringY = mouseY;

  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    dot.style.left = `${mouseX}px`;
    dot.style.top = `${mouseY}px`;
  });

  function renderCursor() {
    // Smooth lerp trailing physics matching screenshot ring
    ringX += (mouseX - ringX) * 0.18;
    ringY += (mouseY - ringY) * 0.18;

    ring.style.left = `${ringX}px`;
    ring.style.top = `${ringY}px`;

    requestAnimationFrame(renderCursor);
  }
  renderCursor();

  // Hover activation on interactive elements
  const hoverables = document.querySelectorAll('a, button, .btn, .glass-card, .platform-btn, .feature-check, .tech-tab-btn, .chat-chip');
  hoverables.forEach(el => {
    el.addEventListener('mouseenter', () => document.body.classList.add('cursor-hover'));
    el.addEventListener('mouseleave', () => document.body.classList.remove('cursor-hover'));
  });
}

/* Interactive Background Particle Canvas */
function initBackgroundCanvas() {
  const canvas = document.getElementById('bg-canvas');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  let width = canvas.width = window.innerWidth;
  let height = canvas.height = window.innerHeight;

  window.addEventListener('resize', () => {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
  });

  const particles = [];
  const particleCount = Math.min(Math.floor(width / 18), 70);

  class Particle {
    constructor() {
      this.x = Math.random() * width;
      this.y = Math.random() * height;
      this.vx = (Math.random() - 0.5) * 0.6;
      this.vy = (Math.random() - 0.5) * 0.6;
      this.radius = Math.random() * 2 + 1;
      this.color = Math.random() > 0.4 ? 'rgba(0, 163, 255, ' : 'rgba(132, 204, 22, ';
      this.alpha = Math.random() * 0.5 + 0.2;
    }

    update() {
      this.x += this.vx;
      this.y += this.vy;

      if (this.x < 0 || this.x > width) this.vx *= -1;
      if (this.y < 0 || this.y > height) this.vy *= -1;
    }

    draw() {
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
      ctx.fillStyle = this.color + this.alpha + ')';
      ctx.shadowBlur = 12;
      ctx.shadowColor = this.color + '0.8)';
      ctx.fill();
    }
  }

  for (let i = 0; i < particleCount; i++) {
    particles.push(new Particle());
  }

  function animate() {
    ctx.clearRect(0, 0, width, height);

    for (let i = 0; i < particles.length; i++) {
      particles[i].update();
      particles[i].draw();

      for (let j = i + 1; j < particles.length; j++) {
        const dx = particles[i].x - particles[j].x;
        const dy = particles[i].y - particles[j].y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < 135) {
          ctx.beginPath();
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.strokeStyle = `rgba(0, 163, 255, ${0.16 - dist / 1350})`;
          ctx.lineWidth = 0.7;
          ctx.stroke();
        }
      }
    }

    requestAnimationFrame(animate);
  }

  animate();
}

/* Navbar Sticky & Top Reading Scroll Progress Effect */
function initNavbarScroll() {
  const navbar = document.querySelector('.navbar');
  let scrollProgress = document.getElementById('scroll-progress');

  if (!scrollProgress) {
    scrollProgress = document.createElement('div');
    scrollProgress.id = 'scroll-progress';
    document.body.appendChild(scrollProgress);
  }

  window.addEventListener('scroll', () => {
    if (navbar) {
      if (window.scrollY > 30) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    }

    // Scroll Progress bar fill calculation
    const windowHeight = document.documentElement.scrollHeight - window.innerHeight;
    if (windowHeight > 0) {
      const progress = (window.scrollY / windowHeight) * 100;
      scrollProgress.style.width = `${Math.min(progress, 100)}%`;
    }
  });
}

/* Enhanced Scroll Reveal Observer */
function initScrollReveals() {
  const reveals = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-zoom');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
      }
    });
  }, { threshold: 0.08 });

  reveals.forEach(el => observer.observe(el));
}

/* Spotlight Mouse Hover Effect for Cards */
function initSpotlightHover() {
  document.querySelectorAll('.glass-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      card.style.setProperty('--mouse-x', `${x}px`);
      card.style.setProperty('--mouse-y', `${y}px`);
    });
  });
}

/* Animated Metric Counters */
function initMetricCounters() {
  const counters = document.querySelectorAll('.counter-val');
  if (counters.length === 0) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        const endValue = parseInt(target.getAttribute('data-count'));
        let startValue = 0;
        const duration = 2000;
        const stepTime = 30;
        const steps = duration / stepTime;
        const increment = endValue / steps;

        const timer = setInterval(() => {
          startValue += increment;
          if (startValue >= endValue) {
            target.innerText = endValue + (target.getAttribute('data-suffix') || '');
            clearInterval(timer);
          } else {
            target.innerText = Math.floor(startValue) + (target.getAttribute('data-suffix') || '');
          }
        }, stepTime);

        observer.unobserve(target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));
}

/* Filterable Tech Stack Matrix */
function initTechStackTabs() {
  const tabBtns = document.querySelectorAll('#tech-stack .tech-tab-btn');
  const techCards = document.querySelectorAll('.tech-item-card');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      tabBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      techCards.forEach(card => {
        if (filter === 'all' || card.getAttribute('data-category') === filter) {
          card.style.display = 'flex';
          card.style.flexDirection = 'column';
          card.style.animation = 'fadeIn 0.4s ease forwards';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}

/* Filterable Software Suites Tabs */
function initSuiteTabs() {
  const suiteBtns = document.querySelectorAll('#solutions .tech-tab-btn');
  const suiteCards = document.querySelectorAll('.suite-card');

  suiteBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      suiteBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      suiteCards.forEach(card => {
        const cat = card.getAttribute('data-category');
        if (filter === 'all-suites' || cat === filter || (filter === 'healthcare' && (cat === 'healthcare' || cat === 'hr'))) {
          card.style.display = 'flex';
          card.style.flexDirection = 'column';
          card.style.animation = 'fadeIn 0.4s ease forwards';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}

/* Mobile Nav Toggle with Touch Optimization */
function initMobileNav() {
  const toggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (toggle && navLinks) {
    toggle.addEventListener('click', (e) => {
      e.stopPropagation();
      navLinks.classList.toggle('active');
      const icon = toggle.querySelector('i');
      if (navLinks.classList.contains('active')) {
        icon.className = 'fas fa-xmark';
      } else {
        icon.className = 'fas fa-bars';
      }
    });

    document.addEventListener('click', (e) => {
      if (!navLinks.contains(e.target) && !toggle.contains(e.target)) {
        navLinks.classList.remove('active');
        const icon = toggle.querySelector('i');
        if (icon) icon.className = 'fas fa-bars';
      }
    });

    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        const icon = toggle.querySelector('i');
        if (icon) icon.className = 'fas fa-bars';
      });
    });
  }
}

/* Interactive Contact Form Submit */
function initContactForm() {
  const form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;

    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending Inquiry...';

    setTimeout(() => {
      submitBtn.disabled = false;
      submitBtn.innerHTML = '<i class="fas fa-check"></i> Inquiry Sent Successfully!';
      submitBtn.classList.remove('btn-primary');
      submitBtn.classList.add('btn-lime');

      showToast('Thank you! Your project proposal inquiry has been logged. Our engineering lead will contact you within 2 hours.', 'success');

      form.reset();

      setTimeout(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.classList.remove('btn-lime');
        submitBtn.classList.add('btn-primary');
      }, 4000);
    }, 1200);
  });
}

/* Custom Toast Notification */
function showToast(message, type = 'info') {
  let toastContainer = document.getElementById('toast-container');
  if (!toastContainer) {
    toastContainer = document.createElement('div');
    toastContainer.id = 'toast-container';
    toastContainer.style.cssText = 'position:fixed;bottom:2rem;left:2rem;z-index:10000;display:flex;flex-direction:column;gap:0.5rem;';
    document.body.appendChild(toastContainer);
  }

  const toast = document.createElement('div');
  toast.style.cssText = `
    padding: 1rem 1.4rem;
    background: #0F172A;
    border: 1px solid ${type === 'success' ? '#84CC16' : '#00A3FF'};
    border-radius: 12px;
    color: #FFF;
    font-size: 0.9rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    gap: 0.8rem;
    animation: slideIn 0.3s ease forwards;
  `;

  toast.innerHTML = `<i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-info-circle'}" style="color:${type === 'success' ? '#84CC16' : '#00A3FF'}"></i> ${message}`;
  toastContainer.appendChild(toast);

  setTimeout(() => {
    toast.remove();
  }, 4500);
}
