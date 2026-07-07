/* Ridge Labs Theme JS */
(function () {
  'use strict';

  // ── Hero Canvas Animation (HeroBackdrop) ─────────────────────
  (function () {
    const canvas = document.getElementById('hero-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    let animRaf = 0;
    let w = 0, h = 0;
    const dpr = Math.min(window.devicePixelRatio || 1, 2);

    function resize() {
      w = canvas.clientWidth;
      h = canvas.clientHeight;
      canvas.width = w * dpr;
      canvas.height = h * dpr;
      ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    }
    resize();
    window.addEventListener('resize', resize);

    const nodes = Array.from({ length: 60 }, () => ({
      x: Math.random() * (w || window.innerWidth),
      y: Math.random() * (h || window.innerHeight),
      vx: 0.25 + Math.random() * 0.35,
      vy: (Math.random() - 0.5) * 0.08,
      r: 1.2 + Math.random() * 1.6,
    }));

    const schematics = Array.from({ length: 14 }, () => {
      const kinds = ['poly', 'crosshair', 'ring'];
      return {
        x: Math.random() * (w || window.innerWidth),
        y: Math.random() * (h || window.innerHeight),
        vx: 0.12 + Math.random() * 0.22,
        size: 60 + Math.random() * 140,
        sides: 3 + Math.floor(Math.random() * 4),
        rot: Math.random() * Math.PI * 2,
        spin: (Math.random() - 0.5) * 0.0015,
        kind: kinds[Math.floor(Math.random() * kinds.length)],
      };
    });

    const rects = Array.from({ length: 8 }, () => ({
      x: Math.random() * (w || window.innerWidth),
      y: Math.random() * (h || window.innerHeight),
      vx: 0.15 + Math.random() * 0.25,
      rw: 80 + Math.random() * 180,
      rh: 50 + Math.random() * 120,
      rot: (Math.random() - 0.5) * 0.4,
    }));

    function drawFrame() {
      ctx.clearRect(0, 0, w, h);

      // Soft red vignette
      const g = ctx.createRadialGradient(w * 0.5, h * 0.3, 0, w * 0.5, h * 0.3, Math.max(w, h) * 0.7);
      g.addColorStop(0, 'rgba(161,29,33,0.07)');
      g.addColorStop(0.5, 'rgba(161,29,33,0.02)');
      g.addColorStop(1, 'rgba(255,255,255,0)');
      ctx.fillStyle = g;
      ctx.fillRect(0, 0, w, h);

      // CAD wireframe rectangles
      for (const r of rects) {
        r.x += r.vx;
        if (r.x - r.rw > w) r.x = -r.rw;
        ctx.save();
        ctx.translate(r.x, r.y);
        ctx.rotate(r.rot);
        ctx.strokeStyle = 'rgba(161,29,33,0.18)';
        ctx.lineWidth = 0.7;
        ctx.setLineDash([6, 4]);
        ctx.strokeRect(-r.rw / 2, -r.rh / 2, r.rw, r.rh);
        ctx.setLineDash([]);
        ctx.strokeStyle = 'rgba(17,17,17,0.20)';
        const c = 6;
        [[-r.rw / 2, -r.rh / 2], [r.rw / 2, -r.rh / 2], [-r.rw / 2, r.rh / 2], [r.rw / 2, r.rh / 2]].forEach(([cx2, cy2]) => {
          ctx.beginPath();
          ctx.moveTo(cx2 - c, cy2); ctx.lineTo(cx2 + c, cy2);
          ctx.moveTo(cx2, cy2 - c); ctx.lineTo(cx2, cy2 + c);
          ctx.stroke();
        });
        ctx.restore();
      }

      // Schematic geometry (polygons, crosshairs, rings)
      for (const s of schematics) {
        s.rot += s.spin;
        s.x += s.vx;
        if (s.x - s.size > w) s.x = -s.size;
        ctx.save();
        ctx.translate(s.x, s.y);
        ctx.rotate(s.rot);
        ctx.strokeStyle = 'rgba(161,29,33,0.22)';
        ctx.lineWidth = 0.8;
        ctx.setLineDash([]);

        if (s.kind === 'poly') {
          ctx.beginPath();
          for (let i = 0; i <= s.sides; i++) {
            const a = (i / s.sides) * Math.PI * 2;
            const px = Math.cos(a) * s.size, py = Math.sin(a) * s.size;
            i === 0 ? ctx.moveTo(px, py) : ctx.lineTo(px, py);
          }
          ctx.stroke();
          ctx.beginPath();
          ctx.strokeStyle = 'rgba(17,17,17,0.10)';
          for (let i = 0; i <= s.sides; i++) {
            const a = (i / s.sides) * Math.PI * 2 + Math.PI / s.sides;
            const px = Math.cos(a) * s.size * 0.55, py = Math.sin(a) * s.size * 0.55;
            i === 0 ? ctx.moveTo(px, py) : ctx.lineTo(px, py);
          }
          ctx.stroke();
        } else if (s.kind === 'crosshair') {
          ctx.setLineDash([4, 6]);
          ctx.beginPath();
          ctx.moveTo(-s.size, 0); ctx.lineTo(s.size, 0);
          ctx.moveTo(0, -s.size); ctx.lineTo(0, s.size);
          ctx.stroke();
          ctx.setLineDash([]);
          ctx.strokeStyle = 'rgba(161,29,33,0.32)';
          [-s.size, s.size].forEach((d) => {
            ctx.beginPath();
            ctx.moveTo(d, -6); ctx.lineTo(d, 6);
            ctx.moveTo(-6, d); ctx.lineTo(6, d);
            ctx.stroke();
          });
          ctx.beginPath();
          ctx.arc(0, 0, 2.5, 0, Math.PI * 2);
          ctx.fillStyle = 'rgba(161,29,33,0.85)';
          ctx.fill();
        } else {
          for (let i = 1; i <= 3; i++) {
            ctx.beginPath();
            ctx.arc(0, 0, (s.size * i) / 3, 0, Math.PI * 2);
            ctx.strokeStyle = `rgba(161,29,33,${0.22 - i * 0.05})`;
            ctx.stroke();
          }
        }
        ctx.restore();
      }

      // Wireframe network nodes + connection lines
      for (const n of nodes) {
        n.x += n.vx;
        n.y += n.vy;
        if (n.x > w + 20) n.x = -20;
        if (n.y < 0 || n.y > h) n.vy *= -1;
      }
      ctx.lineWidth = 0.6;
      const maxDist = 180, max2 = maxDist * maxDist;
      for (let i = 0; i < nodes.length; i++) {
        for (let j = i + 1; j < nodes.length; j++) {
          const a = nodes[i], b = nodes[j];
          const dx = a.x - b.x, dy = a.y - b.y;
          const d2 = dx * dx + dy * dy;
          if (d2 < max2) {
            const alpha = (1 - d2 / max2) * 0.22;
            ctx.strokeStyle = `rgba(161,29,33,${alpha})`;
            ctx.beginPath();
            ctx.moveTo(a.x, a.y);
            ctx.lineTo(b.x, b.y);
            ctx.stroke();
          }
        }
      }
      for (const n of nodes) {
        ctx.fillStyle = 'rgba(17,17,17,0.55)';
        ctx.fillRect(n.x - n.r, n.y - n.r, n.r * 2, n.r * 2);
        ctx.beginPath();
        ctx.arc(n.x, n.y, n.r + 3, 0, Math.PI * 2);
        ctx.strokeStyle = 'rgba(161,29,33,0.22)';
        ctx.lineWidth = 0.5;
        ctx.stroke();
      }

      animRaf = requestAnimationFrame(drawFrame);
    }
    animRaf = requestAnimationFrame(drawFrame);
  })();

  // ── Cursor Glow ──────────────────────────────────────────────
  const cursorGlow = document.getElementById('cursor-glow');
  const heroSection = document.getElementById('top');
  if (cursorGlow && heroSection && window.matchMedia('(pointer: fine)').matches) {
    let tx = 0, ty = 0, cx = 0, cy = 0, glowRaf = 0;

    heroSection.addEventListener('mousemove', (e) => {
      const rect = heroSection.getBoundingClientRect();
      tx = e.clientX - rect.left;
      ty = e.clientY - rect.top;
      cursorGlow.style.opacity = '1';
    });
    heroSection.addEventListener('mouseleave', () => {
      cursorGlow.style.opacity = '0';
    });

    function glowTick() {
      cx += (tx - cx) * 0.12;
      cy += (ty - cy) * 0.12;
      cursorGlow.style.transform = `translate3d(${cx - 250}px,${cy - 250}px,0)`;
      glowRaf = requestAnimationFrame(glowTick);
    }
    glowRaf = requestAnimationFrame(glowTick);
  }

  // ── Scroll-aware header ───────────────────────────────────────
  const header = document.getElementById('site-header');
  if (header) {
    const onScroll = () => {
      if (window.scrollY > 20) {
        header.classList.add('scrolled');
        header.querySelector('div > div')?.classList.add('shadow-elegant');
      } else {
        header.classList.remove('scrolled');
        header.querySelector('div > div')?.classList.remove('shadow-elegant');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ── Mobile menu ───────────────────────────────────────────────
  const mobileBtn  = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  if (mobileBtn && mobileMenu) {
    const menuIcon  = mobileBtn.querySelector('.menu-icon');
    const closeIcon = mobileBtn.querySelector('.close-icon');
    mobileBtn.addEventListener('click', () => {
      const open = mobileMenu.classList.toggle('hidden');
      mobileBtn.setAttribute('aria-expanded', String(!open));
      menuIcon?.classList.toggle('hidden', !open);
      closeIcon?.classList.toggle('hidden', open);
    });
  }

  // ── Reveal on scroll (Intersection Observer) ──────────────────
  const revealEls = document.querySelectorAll(
    '.opacity-0.translate-y-8, [data-reveal]'
  );

  if (revealEls.length) {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const el    = entry.target;
            const delay = el.style.transitionDelay || '0ms';
            setTimeout(() => {
              el.classList.remove('opacity-0', 'translate-y-8', 'blur-[2px]');
              el.classList.add('opacity-100', 'translate-y-0', 'blur-0');
            }, parseInt(delay));
            io.unobserve(el);
          }
        });
      },
      { threshold: 0.08, rootMargin: '0px 0px -40px 0px' }
    );
    revealEls.forEach((el) => io.observe(el));
  }

  // ── Animated Counter ──────────────────────────────────────────
  function animateCount(el) {
    const target = parseFloat(el.dataset.target || el.textContent);
    const suffix = el.dataset.suffix || el.textContent.replace(/[\d.]/g, '');
    const isFloat = String(target).includes('.');
    const duration = 1800;
    const start = performance.now();

    const tick = (now) => {
      const progress = Math.min((now - start) / duration, 1);
      const ease = 1 - Math.pow(1 - progress, 4);
      const val  = target * ease;
      el.textContent = (isFloat ? val.toFixed(1) : Math.floor(val)) + suffix;
      if (progress < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
  }

  const counterEls = document.querySelectorAll('[data-count]');
  if (counterEls.length) {
    const counterIO = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animateCount(entry.target);
            counterIO.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );
    counterEls.forEach((el) => counterIO.observe(el));
  }

  // ── Contact form feedback ─────────────────────────────────────
  const params = new URLSearchParams(window.location.search);
  if (params.has('contact')) {
    const form = document.querySelector('form[data-contact-form]');
    if (form) {
      const msg = document.createElement('div');
      msg.className = params.get('contact') === 'success'
        ? 'mt-4 p-4 rounded-xl bg-green-500/10 border border-green-500/30 text-green-400 text-sm'
        : 'mt-4 p-4 rounded-xl bg-red-500/10 border border-red-500/30 text-red-400 text-sm';
      msg.textContent = params.get('contact') === 'success'
        ? "Message sent! We'll get back to you soon."
        : 'Something went wrong. Please try again.';
      form.parentNode.insertBefore(msg, form.nextSibling);
      window.history.replaceState({}, '', window.location.pathname);
    }
  }

  // ── FAQ / Accordion (no Radix needed) ────────────────────────
  document.querySelectorAll('[data-accordion-trigger]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const item    = btn.closest('[data-accordion-item]');
      const content = item?.querySelector('[data-accordion-content]');
      if (!content) return;
      const open = content.style.maxHeight;
      document.querySelectorAll('[data-accordion-content]').forEach((c) => {
        c.style.maxHeight = '';
        c.closest('[data-accordion-item]')?.querySelector('[data-accordion-trigger]')
          ?.setAttribute('aria-expanded', 'false');
      });
      if (!open) {
        content.style.maxHeight = content.scrollHeight + 'px';
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

})();
