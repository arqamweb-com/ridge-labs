<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<section id="top" class="relative min-h-[100svh] flex items-center pt-32 pb-24 overflow-hidden">
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute inset-0 grid-bg radial-fade opacity-60 pointer-events-none"></div>
    <div class="absolute inset-0 pointer-events-none opacity-[0.05]"
         style="background-image:linear-gradient(transparent 0 95%, rgba(17,17,17,0.5) 95% 100%), linear-gradient(90deg, transparent 0 95%, rgba(17,17,17,0.5) 95% 100%);background-size:120px 120px, 120px 120px;mask-image:radial-gradient(ellipse at 50% 30%, black 30%, transparent 75%);-webkit-mask-image:radial-gradient(ellipse at 50% 30%, black 30%, transparent 75%)"></div>
    <div
      class="absolute -top-40 left-1/2 -translate-x-1/2 h-[700px] w-[1100px] rounded-full blur-3xl opacity-20 pointer-events-none"
      style="background:radial-gradient(ellipse at center, color-mix(in oklab, var(--primary) 50%, transparent) 0%, transparent 60%)"></div>
    <canvas id="hero-canvas" class="absolute inset-0 h-full w-full pointer-events-none"></canvas>
    <div id="cursor-glow" aria-hidden="true"
         class="pointer-events-none absolute top-0 left-0 h-[500px] w-[500px] rounded-full opacity-0 transition-opacity duration-500 mix-blend-screen"
         style="background:radial-gradient(circle, color-mix(in oklab, var(--primary-glow) 35%, transparent) 0%, transparent 60%);filter:blur(40px)"></div>
    <div class="absolute inset-0 pointer-events-none overflow-hidden opacity-[0.08]">
      <div
        class="absolute inset-x-0 h-px bg-gradient-to-r from-transparent via-primary-glow to-transparent animate-scan"></div>
    </div>
    <div
      class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-b from-transparent to-background pointer-events-none"></div>
  </div>
  <div class="relative mx-auto max-w-7xl px-4 sm:px-6 w-full pointer-events-none">
    <div class="max-w-4xl mx-auto text-center">
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:30ms">
        <div class="pointer-events-auto flex justify-center mb-6"><img
            src="https://www.arqamweb.com/wp-content/uploads/2026/05/Culver-Builder-Logo.png" alt="Culvert Builder logo"
            class="h-20 sm:h-24 w-auto drop-shadow-[0_8px_24px_color-mix(in_oklab,var(--primary)_35%,transparent)]"
            loading="eager"></div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:50ms">
        <div
          class="pointer-events-auto inline-flex items-center gap-2 glass rounded-full px-4 py-1.5 text-xs font-medium text-muted-foreground mb-8">
          <span class="relative flex h-2 w-2"><span
              class="animate-ping absolute inline-flex h-full w-full rounded-full opacity-75"
              style="background-color:oklch(0.78 0.18 150)"></span><span
              class="relative inline-flex rounded-full h-2 w-2"
              style="background-color:oklch(0.78 0.18 150)"></span></span><span
            class="text-foreground/80">New</span><span class="text-muted-foreground/60">·</span><span>Culvert Builder v1.0.1 for AutoCad &amp; Civil 3D</span>
        </div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:150ms"><h1
          class="font-display text-5xl sm:text-6xl md:text-7xl lg:text-[5.5rem] font-semibold leading-[0.98] tracking-[-0.03em] text-gradient">
          Build Culverts in<br><span class="text-gradient-primary">Seconds, Not Hours.</span></h1></div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:300ms"><p
          class="mt-7 text-base sm:text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">Culvert Builder
          automates infrastructure design inside AutoCad &amp; Civil 3D. Generate fully parametric 3D culvert models
          with intelligent precision — engineered for speed, accuracy, and scale.</p></div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:450ms">
        <div class="pointer-events-auto mt-10 flex flex-col sm:flex-row items-center justify-center gap-3"><a
            href="/download"
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 relative bg-gradient-to-b from-primary-glow to-primary text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:shadow-[0_18px_45px_-10px_color-mix(in_oklab,var(--primary)_70%,transparent)] hover:brightness-110 transition-all duration-300 border border-primary/20 h-14 px-9 text-base rounded-full group min-w-[210px] hover:scale-[1.03] active:scale-[0.99]">Download
            Trial
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-arrow-right ml-1 transition-transform group-hover:translate-x-1"
                 aria-hidden="true">
              <path d="M5 12h14" />
              </path>
              <path d="m12 5 7 7-7 7" />
              </path></svg>
          </a><a href="#features"
                 class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 glass text-foreground hover:bg-background hover:border-primary/40 transition-all duration-300 h-14 px-9 text-base rounded-full group min-w-[210px] hover:scale-[1.02]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-play mr-1" aria-hidden="true">
              <path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z" />
              </path></svg>
            View Features</a></div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:650ms">
        <div
          class="mt-16 flex flex-wrap items-center justify-center gap-x-10 gap-y-4 text-xs uppercase tracking-[0.2em] text-muted-foreground/60">
          <span>Trusted by 200+ projects</span><span class="hidden sm:inline">•</span><span>AutoCad &amp; Civil 3D Certified</span><span
            class="hidden sm:inline">•</span><span>License in &lt; 1 hour</span></div>
      </div>
    </div>
  </div>
</section>
<div aria-hidden="true" class="mx-auto max-w-7xl px-4 sm:px-6">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div>
</div>
<section id="product" class="relative py-24 sm:py-32 overflow-hidden">
  <div class="absolute inset-0 opacity-50 pointer-events-none"
       style="background:radial-gradient(ellipse 80% 50% at 50% 0%, color-mix(in oklab, var(--primary) 18%, transparent) 0%, transparent 60%)"></div>
  <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
    <div class="max-w-3xl">
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:0ms">
        <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">The Product</div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:80ms"><h2
          class="font-display text-4xl sm:text-5xl md:text-6xl font-semibold tracking-[-0.025em] leading-[1.05] text-gradient">
          A closer look at<br><span class="text-muted-foreground/70">Culvert Builder.</span></h2></div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:180ms"><p class="mt-6 text-lg text-muted-foreground max-w-2xl">Real screenshots from the
          plugin in action — explore the interface, parametric models, and engineering output generated directly inside
          AutoCad &amp; Civil 3D.</p></div>
    </div>
    <div class="mt-14">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-5">
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:0ms">
          <button type="button"
                  class="group relative w-full overflow-hidden rounded-2xl border border-border bg-surface transition-all duration-500 hover:-translate-y-1 hover:border-primary/40"
                  style="box-shadow:0 6px 20px rgba(0,0,0,0.05)"
                  aria-label="Open image: Culvert Builder running inside AutoCAD Civil 3D">
            <div class="aspect-[4/3] w-full overflow-hidden"><img
                src="https://www.arqamweb.com/wp-content/uploads/2026/04/Culvert-Builder-Screenshot.jpg"
                alt="Culvert Builder running inside AutoCAD Civil 3D" loading="lazy"
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.04]"></div>
            <div
              class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/[0.03] transition-colors duration-500"></div>
          </button>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:80ms">
          <button type="button"
                  class="group relative w-full overflow-hidden rounded-2xl border border-border bg-surface transition-all duration-500 hover:-translate-y-1 hover:border-primary/40"
                  style="box-shadow:0 6px 20px rgba(0,0,0,0.05)"
                  aria-label="Open image: Culvert Builder generated 3D culvert model">
            <div class="aspect-[4/3] w-full overflow-hidden"><img
                src="https://www.arqamweb.com/wp-content/uploads/2026/04/Screenshot-2026-04-20-at-8.42.00-PM.png"
                alt="Culvert Builder generated 3D culvert model" loading="lazy"
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.04]"></div>
            <div
              class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/[0.03] transition-colors duration-500"></div>
          </button>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:160ms">
          <button type="button"
                  class="group relative w-full overflow-hidden rounded-2xl border border-border bg-surface transition-all duration-500 hover:-translate-y-1 hover:border-primary/40"
                  style="box-shadow:0 6px 20px rgba(0,0,0,0.05)"
                  aria-label="Open image: Culvert Builder parametric culvert detail">
            <div class="aspect-[4/3] w-full overflow-hidden"><img
                src="https://www.arqamweb.com/wp-content/uploads/2026/04/image008.png"
                alt="Culvert Builder parametric culvert detail" loading="lazy"
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.04]"></div>
            <div
              class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/[0.03] transition-colors duration-500"></div>
          </button>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:240ms">
          <button type="button"
                  class="group relative w-full overflow-hidden rounded-2xl border border-border bg-surface transition-all duration-500 hover:-translate-y-1 hover:border-primary/40"
                  style="box-shadow:0 6px 20px rgba(0,0,0,0.05)" aria-label="Open image: Culvert Builder workflow view">
            <div class="aspect-[4/3] w-full overflow-hidden"><img
                src="https://www.arqamweb.com/wp-content/uploads/2026/04/image003.png"
                alt="Culvert Builder workflow view" loading="lazy"
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.04]"></div>
            <div
              class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/[0.03] transition-colors duration-500"></div>
          </button>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:320ms">
          <button type="button"
                  class="group relative w-full overflow-hidden rounded-2xl border border-border bg-surface transition-all duration-500 hover:-translate-y-1 hover:border-primary/40"
                  style="box-shadow:0 6px 20px rgba(0,0,0,0.05)" aria-label="Open image: Culvert Builder model preview">
            <div class="aspect-[4/3] w-full overflow-hidden"><img
                src="https://www.arqamweb.com/wp-content/uploads/2026/04/image002.png"
                alt="Culvert Builder model preview" loading="lazy"
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.04]"></div>
            <div
              class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/[0.03] transition-colors duration-500"></div>
          </button>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:400ms">
          <button type="button"
                  class="group relative w-full overflow-hidden rounded-2xl border border-border bg-surface transition-all duration-500 hover:-translate-y-1 hover:border-primary/40"
                  style="box-shadow:0 6px 20px rgba(0,0,0,0.05)"
                  aria-label="Open image: Culvert Builder model overview">
            <div class="aspect-[4/3] w-full overflow-hidden"><img
                src="https://www.arqamweb.com/wp-content/uploads/2026/04/image001.png"
                alt="Culvert Builder model overview" loading="lazy"
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.04]"></div>
            <div
              class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/[0.03] transition-colors duration-500"></div>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<div aria-hidden="true" class="mx-auto max-w-7xl px-4 sm:px-6">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div>
</div>
<section id="video" class="relative py-24 sm:py-32">
  <div class="absolute inset-0 pointer-events-none opacity-30"
       style="background:radial-gradient(ellipse 60% 50% at 50% 50%, color-mix(in oklab, var(--primary) 18%, transparent) 0%, transparent 70%)"></div>
  <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
    <div class="text-center max-w-2xl mx-auto">
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:0ms">
        <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">Product Demo</div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:80ms"><h2
          class="font-display text-4xl sm:text-5xl md:text-6xl font-semibold tracking-[-0.025em] leading-[1.05] text-gradient">
          See Culvert Builder in Action</h2></div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:160ms"><p class="mt-5 text-lg text-muted-foreground">Watch how the plugin simplifies
          complex engineering workflows directly inside Civil 3D.</p></div>
    </div>
    <div
      class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
      style="transition-delay:240ms">
      <div class="mt-16 relative group max-w-5xl mx-auto">
        <div
          class="relative rounded-[1.5rem] overflow-hidden border border-border bg-background transition-all duration-500 group-hover:border-primary/30"
          style="box-shadow:0 10px 30px rgba(0,0,0,0.05)">
          <div class="relative aspect-video w-full bg-black">
            <button type="button" aria-label="Play Culvert Builder demo"
                    class="absolute inset-0 h-full w-full group/play"><img
                src="https://www.arqamweb.com/wp-content/uploads/2026/04/Screenshot-2026-04-20-at-8.42.00-PM.png"
                alt="Culvert Builder demo preview"
                class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover/play:scale-[1.03]"
                loading="lazy">
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-black/30 transition-opacity duration-500 group-hover/play:from-black/40"></div>
              <div class="absolute inset-0 flex items-center justify-center"><span
                  class="relative flex items-center justify-center"><span
                    class="absolute inline-flex h-24 w-24 sm:h-28 sm:w-28 rounded-full opacity-50 animate-ping"
                    style="background:color-mix(in oklab, var(--primary) 50%, transparent)"></span><span
                    class="relative inline-flex h-20 w-20 sm:h-24 sm:w-24 items-center justify-center rounded-full bg-gradient-to-br from-primary to-primary-glow text-primary-foreground shadow-glow transition-transform duration-500 group-hover/play:scale-110"><svg
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="lucide lucide-play h-8 w-8 sm:h-10 sm:w-10 ml-1" aria-hidden="true"><path
                        d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z" />
                      </path></svg></span></span></div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div aria-hidden="true" class="mx-auto max-w-7xl px-4 sm:px-6">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div>
</div>
<section id="how" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="text-center max-w-2xl mx-auto">
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:0ms">
        <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">Workflow</div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:80ms"><h2
          class="font-display text-4xl sm:text-5xl md:text-6xl font-semibold tracking-[-0.025em] leading-[1.05] text-gradient">
          From download to deployment.</h2></div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:160ms"><p class="mt-5 text-lg text-muted-foreground">Five steps. One hour. Zero
          friction.</p></div>
    </div>
    <div class="mt-20 relative">
      <div class="hidden lg:block absolute top-[44px] left-[5%] right-[5%] h-px bg-border/60"></div>
      <div class="hidden lg:block absolute top-[44px] left-[5%] right-[5%] h-px overflow-hidden" aria-hidden="true">
        <div class="h-full w-1/3 animate-flow"
             style="background:linear-gradient(90deg, transparent, color-mix(in oklab, var(--primary-glow) 80%, transparent), transparent)"></div>
      </div>
      <div class="hidden lg:block absolute top-[44px] left-[10%] w-[80%] h-px blur-md opacity-60"
           style="background:linear-gradient(90deg, transparent, color-mix(in oklab, var(--primary) 60%, transparent), transparent)"></div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-4">
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:0ms">
          <div class="relative text-center group">
            <div class="relative mx-auto h-[88px] w-[88px]">
              <div
                class="absolute inset-0 rounded-full bg-gradient-to-br from-primary/40 to-transparent blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
              <div
                class="relative h-full w-full rounded-full glass flex items-center justify-center group-hover:border-primary/50 transition-all duration-500 group-hover:-translate-y-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-download h-7 w-7 text-foreground transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-6"
                     aria-hidden="true">
                  <path d="M12 15V3" />
                  </path>
                  <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                  </path>
                  <path d="m7 10 5 5 5-5" />
                  </path></svg>
                <div
                  class="absolute -top-2 -right-2 h-7 w-7 rounded-full bg-gradient-to-br from-primary to-primary-glow text-primary-foreground text-xs font-mono font-semibold flex items-center justify-center shadow-glow group-hover:scale-110 transition-transform duration-500">
                  01
                </div>
              </div>
            </div>
            <h3 class="mt-6 font-display text-base font-semibold text-foreground">Download Trial</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed px-2">Get the installer and try Culvert Builder
              for free.</p></div>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:120ms">
          <div class="relative text-center group">
            <div class="relative mx-auto h-[88px] w-[88px]">
              <div
                class="absolute inset-0 rounded-full bg-gradient-to-br from-primary/40 to-transparent blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
              <div
                class="relative h-full w-full rounded-full glass flex items-center justify-center group-hover:border-primary/50 transition-all duration-500 group-hover:-translate-y-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-mouse-pointer2 lucide-mouse-pointer-2 h-7 w-7 text-foreground transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-6"
                     aria-hidden="true">
                  <path
                    d="M4.037 4.688a.495.495 0 0 1 .651-.651l16 6.5a.5.5 0 0 1-.063.947l-6.124 1.58a2 2 0 0 0-1.438 1.435l-1.579 6.126a.5.5 0 0 1-.947.063z" />
                  </path></svg>
                <div
                  class="absolute -top-2 -right-2 h-7 w-7 rounded-full bg-gradient-to-br from-primary to-primary-glow text-primary-foreground text-xs font-mono font-semibold flex items-center justify-center shadow-glow group-hover:scale-110 transition-transform duration-500">
                  02
                </div>
              </div>
            </div>
            <h3 class="mt-6 font-display text-base font-semibold text-foreground">Use the Plugin</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed px-2">Open Civil 3D and start generating models
              instantly.</p></div>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:240ms">
          <div class="relative text-center group">
            <div class="relative mx-auto h-[88px] w-[88px]">
              <div
                class="absolute inset-0 rounded-full bg-gradient-to-br from-primary/40 to-transparent blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
              <div
                class="relative h-full w-full rounded-full glass flex items-center justify-center group-hover:border-primary/50 transition-all duration-500 group-hover:-translate-y-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-credit-card h-7 w-7 text-foreground transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-6"
                     aria-hidden="true">
                  <rect width="20" height="14" x="2" y="5" rx="2" />
                  </rect>
                  <line x1="2" x2="22" y1="10" y2="10" />
                  </line></svg>
                <div
                  class="absolute -top-2 -right-2 h-7 w-7 rounded-full bg-gradient-to-br from-primary to-primary-glow text-primary-foreground text-xs font-mono font-semibold flex items-center justify-center shadow-glow group-hover:scale-110 transition-transform duration-500">
                  03
                </div>
              </div>
            </div>
            <h3 class="mt-6 font-display text-base font-semibold text-foreground">Purchase License</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed px-2">Choose the plan that fits your team and
              workflow.</p></div>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:360ms">
          <div class="relative text-center group">
            <div class="relative mx-auto h-[88px] w-[88px]">
              <div
                class="absolute inset-0 rounded-full bg-gradient-to-br from-primary/40 to-transparent blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
              <div
                class="relative h-full w-full rounded-full glass flex items-center justify-center group-hover:border-primary/50 transition-all duration-500 group-hover:-translate-y-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-fingerprint-pattern h-7 w-7 text-foreground transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-6"
                     aria-hidden="true">
                  <path d="M12 10a2 2 0 0 0-2 2c0 1.02-.1 2.51-.26 4" />
                  </path>
                  <path d="M14 13.12c0 2.38 0 6.38-1 8.88" />
                  </path>
                  <path d="M17.29 21.02c.12-.6.43-2.3.5-3.02" />
                  </path>
                  <path d="M2 12a10 10 0 0 1 18-6" />
                  </path>
                  <path d="M2 16h.01" />
                  </path>
                  <path d="M21.8 16c.2-2 .131-5.354 0-6" />
                  </path>
                  <path d="M5 19.5C5.5 18 6 15 6 12a6 6 0 0 1 .34-2" />
                  </path>
                  <path d="M8.65 22c.21-.66.45-1.32.57-2" />
                  </path>
                  <path d="M9 6.8a6 6 0 0 1 9 5.2v2" />
                  </path></svg>
                <div
                  class="absolute -top-2 -right-2 h-7 w-7 rounded-full bg-gradient-to-br from-primary to-primary-glow text-primary-foreground text-xs font-mono font-semibold flex items-center justify-center shadow-glow group-hover:scale-110 transition-transform duration-500">
                  04
                </div>
              </div>
            </div>
            <h3 class="mt-6 font-display text-base font-semibold text-foreground">Submit Machine ID</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed px-2">Send us your unique workstation
              identifier.</p></div>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:480ms">
          <div class="relative text-center group">
            <div class="relative mx-auto h-[88px] w-[88px]">
              <div
                class="absolute inset-0 rounded-full bg-gradient-to-br from-primary/40 to-transparent blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
              <div
                class="relative h-full w-full rounded-full glass flex items-center justify-center group-hover:border-primary/50 transition-all duration-500 group-hover:-translate-y-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-key-round h-7 w-7 text-foreground transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-6"
                     aria-hidden="true">
                  <path
                    d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z" />
                  </path>
                  <circle cx="16.5" cy="7.5" r=".5" fill="currentColor" />
                  </circle></svg>
                <div
                  class="absolute -top-2 -right-2 h-7 w-7 rounded-full bg-gradient-to-br from-primary to-primary-glow text-primary-foreground text-xs font-mono font-semibold flex items-center justify-center shadow-glow group-hover:scale-110 transition-transform duration-500">
                  05
                </div>
              </div>
            </div>
            <h3 class="mt-6 font-display text-base font-semibold text-foreground">Receive License</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed px-2">Activated and delivered in under one
              hour.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>
<div aria-hidden="true" class="mx-auto max-w-7xl px-4 sm:px-6">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div>
</div>
<section id="features" class="relative py-24 sm:py-32 overflow-hidden">
  <div class="absolute inset-0 pointer-events-none opacity-50"
       style="background:radial-gradient(ellipse 70% 50% at 50% 50%, color-mix(in oklab, var(--primary) 10%, transparent) 0%, transparent 70%)"></div>
  <div class="absolute inset-0 grid-bg opacity-[0.04] pointer-events-none"></div>
  <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
    <div class="max-w-3xl">
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:0ms">
        <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">Capabilities</div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:80ms"><h2
          class="font-display text-4xl sm:text-5xl md:text-6xl font-semibold tracking-[-0.025em] leading-[1.05] text-gradient">
          Engineered to <span class="text-gradient-primary">outperform.</span></h2></div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:160ms"><p class="mt-5 text-lg text-muted-foreground max-w-xl">A full toolkit of
          intelligent features purpose-built for infrastructure engineering teams.</p></div>
    </div>
    <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-5">
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:0ms">
        <div
          class="group relative h-full rounded-3xl p-8 sm:p-10 overflow-hidden border border-border bg-surface transition-all duration-700 hover:-translate-y-1 hover:border-primary/30 hover:shadow-elegant">
          <div class="absolute inset-0"
               style="background:linear-gradient(135deg, color-mix(in oklab, var(--primary) 6%, transparent) 0%, color-mix(in oklab, var(--surface-elevated) 70%, transparent) 55%, transparent 100%)"></div>
          <div
            class="absolute -inset-20 opacity-0 group-hover:opacity-40 transition-opacity duration-700 blur-3xl pointer-events-none"
            style="background:radial-gradient(circle at 30% 20%, color-mix(in oklab, var(--primary) 14%, transparent), transparent 65%)"></div>
          <div class="relative">
            <div
              class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-primary to-primary-glow text-primary-foreground shadow-glow transition-transform duration-500 group-hover:scale-110 group-hover:rotate-6">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-zap h-6 w-6" aria-hidden="true">
                <path
                  d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
                </path></svg>
            </div>
            <h3 class="mt-6 font-display text-2xl sm:text-3xl font-semibold text-foreground tracking-tight">10×
              Faster</h3>
            <p class="mt-3 text-base text-muted-foreground leading-relaxed max-w-sm">Hours of modeling collapsed into
              seconds of intelligent automation.</p></div>
        </div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:100ms">
        <div
          class="group relative h-full rounded-3xl p-8 sm:p-10 overflow-hidden border border-border bg-surface transition-all duration-700 hover:-translate-y-1 hover:border-primary/30 hover:shadow-elegant">
          <div class="absolute inset-0"
               style="background:linear-gradient(135deg, color-mix(in oklab, var(--primary) 6%, transparent) 0%, color-mix(in oklab, var(--surface-elevated) 70%, transparent) 55%, transparent 100%)"></div>
          <div
            class="absolute -inset-20 opacity-0 group-hover:opacity-40 transition-opacity duration-700 blur-3xl pointer-events-none"
            style="background:radial-gradient(circle at 30% 20%, color-mix(in oklab, var(--primary) 14%, transparent), transparent 65%)"></div>
          <div class="relative">
            <div
              class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-primary to-primary-glow text-primary-foreground shadow-glow transition-transform duration-500 group-hover:scale-110 group-hover:rotate-6">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-cpu h-6 w-6" aria-hidden="true">
                <path d="M12 20v2" />
                </path>
                <path d="M12 2v2" />
                </path>
                <path d="M17 20v2" />
                </path>
                <path d="M17 2v2" />
                </path>
                <path d="M2 12h2" />
                </path>
                <path d="M2 17h2" />
                </path>
                <path d="M2 7h2" />
                </path>
                <path d="M20 12h2" />
                </path>
                <path d="M20 17h2" />
                </path>
                <path d="M20 7h2" />
                </path>
                <path d="M7 20v2" />
                </path>
                <path d="M7 2v2" />
                </path>
                <rect x="4" y="4" width="16" height="16" rx="2" />
                </rect>
                <rect x="8" y="8" width="8" height="8" rx="1" />
                </rect></svg>
            </div>
            <h3 class="mt-6 font-display text-2xl sm:text-3xl font-semibold text-foreground tracking-tight">3D Solids
              Compatibility</h3>
            <p class="mt-3 text-base text-muted-foreground leading-relaxed max-w-sm">Deeply integrated — no exports, no
              conversions, no friction.</p></div>
        </div>
      </div>
    </div>
    <div
      class="mt-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px rounded-3xl overflow-hidden border border-border bg-border">
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:0ms">
        <div
          class="group relative h-full hover:bg-surface transition-all duration-500 p-8 overflow-hidden bg-surface/40">
          <div
            class="absolute -inset-px opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
            style="background:radial-gradient(400px circle at 50% 0%, color-mix(in oklab, var(--primary) 18%, transparent), transparent 60%)"></div>
          <div class="relative">
            <div
              class="inline-flex h-12 w-12 items-center justify-center rounded-xl border transition-all duration-500 group-hover:scale-110 border-primary/30 bg-gradient-to-br from-primary/15 to-transparent text-foreground group-hover:border-primary/60">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-boxes h-5 w-5" aria-hidden="true">
                <path
                  d="M2.97 12.92A2 2 0 0 0 2 14.63v3.24a2 2 0 0 0 .97 1.71l3 1.8a2 2 0 0 0 2.06 0L12 19v-5.5l-5-3-4.03 2.42Z" />
                </path>
                <path d="m7 16.5-4.74-2.85" />
                </path>
                <path d="m7 16.5 5-3" />
                </path>
                <path d="M7 16.5v5.17" />
                </path>
                <path
                  d="M12 13.5V19l3.97 2.38a2 2 0 0 0 2.06 0l3-1.8a2 2 0 0 0 .97-1.71v-3.24a2 2 0 0 0-.97-1.71L17 10.5l-5 3Z" />
                </path>
                <path d="m17 16.5-5-3" />
                </path>
                <path d="m17 16.5 4.74-2.85" />
                </path>
                <path d="M17 16.5v5.17" />
                </path>
                <path
                  d="M7.97 4.42A2 2 0 0 0 7 6.13v4.37l5 3 5-3V6.13a2 2 0 0 0-.97-1.71l-3-1.8a2 2 0 0 0-2.06 0l-3 1.8Z" />
                </path>
                <path d="M12 8 7.26 5.15" />
                </path>
                <path d="m12 8 4.74-2.85" />
                </path>
                <path d="M12 13.5V8" />
                </path></svg>
            </div>
            <h3 class="mt-6 font-display text-xl font-semibold text-foreground">Parametric 3D</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Every dimension editable, every model
              regenerable.</p></div>
        </div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:80ms">
        <div
          class="group relative h-full hover:bg-surface transition-all duration-500 p-8 overflow-hidden bg-surface/40">
          <div
            class="absolute -inset-px opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
            style="background:radial-gradient(400px circle at 50% 0%, color-mix(in oklab, var(--primary) 18%, transparent), transparent 60%)"></div>
          <div class="relative">
            <div
              class="inline-flex h-12 w-12 items-center justify-center rounded-xl border transition-all duration-500 group-hover:scale-110 border-primary/30 bg-gradient-to-br from-primary/15 to-transparent text-foreground group-hover:border-primary/60">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-workflow h-5 w-5" aria-hidden="true">
                <rect width="8" height="8" x="3" y="3" rx="2" />
                </rect>
                <path d="M7 11v4a2 2 0 0 0 2 2h4" />
                </path>
                <rect width="8" height="8" x="13" y="13" rx="2" />
                </rect></svg>
            </div>
            <h3 class="mt-6 font-display text-xl font-semibold text-foreground">Smart Workflows</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Detects alignments and corridor lines.</p>
          </div>
        </div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:160ms">
        <div
          class="group relative h-full hover:bg-surface transition-all duration-500 p-8 overflow-hidden bg-surface/40">
          <div
            class="absolute -inset-px opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
            style="background:radial-gradient(400px circle at 50% 0%, color-mix(in oklab, var(--primary) 18%, transparent), transparent 60%)"></div>
          <div class="relative">
            <div
              class="inline-flex h-12 w-12 items-center justify-center rounded-xl border transition-all duration-500 group-hover:scale-110 border-primary/30 bg-gradient-to-br from-primary/15 to-transparent text-foreground group-hover:border-primary/60">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-git-branch h-5 w-5" aria-hidden="true">
                <path d="M15 6a9 9 0 0 0-9 9V3" />
                </path>
                <circle cx="18" cy="6" r="3" />
                </circle>
                <circle cx="6" cy="18" r="3" />
                </circle></svg>
            </div>
            <h3 class="mt-6 font-display text-xl font-semibold text-foreground">Multi-Culvert</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Batch generate across entire corridors in one
              pass.</p></div>
        </div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:0ms">
        <div
          class="group relative h-full hover:bg-surface transition-all duration-500 p-8 overflow-hidden bg-surface/40">
          <div
            class="absolute -inset-px opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
            style="background:radial-gradient(400px circle at 50% 0%, color-mix(in oklab, var(--primary) 18%, transparent), transparent 60%)"></div>
          <div class="relative">
            <div
              class="inline-flex h-12 w-12 items-center justify-center rounded-xl border transition-all duration-500 group-hover:scale-110 border-primary/30 bg-gradient-to-br from-primary/15 to-transparent text-foreground group-hover:border-primary/60">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-plug h-5 w-5" aria-hidden="true">
                <path d="M12 22v-5" />
                </path>
                <path d="M15 8V2" />
                </path>
                <path d="M17 8a1 1 0 0 1 1 1v4a4 4 0 0 1-4 4h-4a4 4 0 0 1-4-4V9a1 1 0 0 1 1-1z" />
                </path>
                <path d="M9 8V2" />
                </path></svg>
            </div>
            <h3 class="mt-6 font-display text-xl font-semibold text-foreground">Manual Design</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Design your culvert with your own
              parameters.</p></div>
        </div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:80ms">
        <div
          class="group relative h-full hover:bg-surface transition-all duration-500 p-8 overflow-hidden bg-surface/40">
          <div
            class="absolute -inset-px opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
            style="background:radial-gradient(400px circle at 50% 0%, color-mix(in oklab, var(--primary) 18%, transparent), transparent 60%)"></div>
          <div class="relative">
            <div
              class="inline-flex h-12 w-12 items-center justify-center rounded-xl border transition-all duration-500 group-hover:scale-110 border-primary/30 bg-gradient-to-br from-primary/15 to-transparent text-foreground group-hover:border-primary/60">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-target h-5 w-5" aria-hidden="true">
                <circle cx="12" cy="12" r="10" />
                </circle>
                <circle cx="12" cy="12" r="6" />
                </circle>
                <circle cx="12" cy="12" r="2" />
                </circle></svg>
            </div>
            <h3 class="mt-6 font-display text-xl font-semibold text-foreground">High Accuracy Modeling</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Engineering-grade precision for reliable,
              consistent results.</p></div>
        </div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:160ms">
        <div
          class="group relative h-full bg-background hover:bg-surface transition-all duration-500 p-8 overflow-hidden">
          <div
            class="absolute -inset-px opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
            style="background:radial-gradient(400px circle at 50% 0%, color-mix(in oklab, var(--primary) 18%, transparent), transparent 60%)"></div>
          <div class="relative">
            <div
              class="inline-flex h-12 w-12 items-center justify-center rounded-xl border transition-all duration-500 group-hover:scale-110 border-border bg-surface-elevated text-primary-glow group-hover:border-primary/50 group-hover:text-foreground">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-layers h-5 w-5" aria-hidden="true">
                <path
                  d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z" />
                </path>
                <path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12" />
                </path>
                <path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17" />
                </path></svg>
            </div>
            <h3 class="mt-6 font-display text-xl font-semibold text-foreground">Style Manager</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Reusable visual styles for team-wide
              consistency.</p></div>
        </div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:0ms">
        <div
          class="group relative h-full bg-background hover:bg-surface transition-all duration-500 p-8 overflow-hidden">
          <div
            class="absolute -inset-px opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
            style="background:radial-gradient(400px circle at 50% 0%, color-mix(in oklab, var(--primary) 18%, transparent), transparent 60%)"></div>
          <div class="relative">
            <div
              class="inline-flex h-12 w-12 items-center justify-center rounded-xl border transition-all duration-500 group-hover:scale-110 border-border bg-surface-elevated text-primary-glow group-hover:border-primary/50 group-hover:text-foreground">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-shield-check h-5 w-5" aria-hidden="true">
                <path
                  d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                </path>
                <path d="m9 12 2 2 4-4" />
                </path></svg>
            </div>
            <h3 class="mt-6 font-display text-xl font-semibold text-foreground">Code-Compliant</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Outputs aligned with industry engineering
              standards.</p></div>
        </div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:80ms">
        <div
          class="group relative h-full bg-background hover:bg-surface transition-all duration-500 p-8 overflow-hidden">
          <div
            class="absolute -inset-px opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
            style="background:radial-gradient(400px circle at 50% 0%, color-mix(in oklab, var(--primary) 18%, transparent), transparent 60%)"></div>
          <div class="relative">
            <div
              class="inline-flex h-12 w-12 items-center justify-center rounded-xl border transition-all duration-500 group-hover:scale-110 border-border bg-surface-elevated text-primary-glow group-hover:border-primary/50 group-hover:text-foreground">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-gauge h-5 w-5" aria-hidden="true">
                <path d="m12 14 4-4" />
                </path>
                <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                </path></svg>
            </div>
            <h3 class="mt-6 font-display text-xl font-semibold text-foreground">Lightweight</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Optimized to keep your Civil 3D session
              snappy.</p></div>
        </div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:160ms">
        <div
          class="group relative h-full bg-background hover:bg-surface transition-all duration-500 p-8 overflow-hidden">
          <div
            class="absolute -inset-px opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
            style="background:radial-gradient(400px circle at 50% 0%, color-mix(in oklab, var(--primary) 18%, transparent), transparent 60%)"></div>
          <div class="relative">
            <div
              class="inline-flex h-12 w-12 items-center justify-center rounded-xl border transition-all duration-500 group-hover:scale-110 border-border bg-surface-elevated text-primary-glow group-hover:border-primary/50 group-hover:text-foreground">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-file-box h-5 w-5" aria-hidden="true">
                <path
                  d="M14.5 22H18a2 2 0 0 0 2-2V8a2.4 2.4 0 0 0-.706-1.706l-3.588-3.588A2.4 2.4 0 0 0 14 2H6a2 2 0 0 0-2 2v3.8" />
                </path>
                <path d="M14 2v5a1 1 0 0 0 1 1h5" />
                </path>
                <path d="M11.7 14.2 7 17l-4.7-2.8" />
                </path>
                <path
                  d="M3 13.1a2 2 0 0 0-.999 1.76v3.24a2 2 0 0 0 .969 1.78L6 21.7a2 2 0 0 0 2.03.01L11 19.9a2 2 0 0 0 1-1.76V14.9a2 2 0 0 0-.97-1.78L8 11.3a2 2 0 0 0-2.03-.01z" />
                </path>
                <path d="M7 17v5" />
                </path></svg>
            </div>
            <h3 class="mt-6 font-display text-xl font-semibold text-foreground">Export Ready</h3>
            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Drawings, schedules, and reports —
              instantly.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>
<div aria-hidden="true" class="mx-auto max-w-7xl px-4 sm:px-6">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div>
</div>

<section id="pricing" class="relative py-24 sm:py-32">

    <?php


    /* -------------------------------------------------------------------------
                * Build the list of cards to render.
                * ---------------------------------------------------------------------- */
    $awp_slug = 'culvert-builder';
    $cards    = array();

    if (function_exists('awp_service_has_packages') && awp_service_has_packages($awp_slug)) {
        foreach (AWP_Query::get_packages($awp_slug) as $product) {
            $c = AWP_Render::card_context($product);
            $cards[] = array(
                'title'        => $c['title'],
                'subtitle'     => $c['subtitle'],
                'features'     => $c['features'],
                'price'        => html_entity_decode((string) $c['price'], ENT_QUOTES, 'UTF-8'),
                'regular'      => html_entity_decode((string) $c['regular'], ENT_QUOTES, 'UTF-8'),
                'on_sale'      => ! empty($c['on_sale']),
                'discount_percent' => isset($c['discount_percent']) ? (int) $c['discount_percent'] : 0,
                'suffix'       => $c['suffix'],
                'badge'        => $c['badge'],
                'highlighted'  => ! empty($c['highlighted']),
                'cta_label'    => $c['cta_label'],
                'checkout_url' => $c['checkout_url'],
            );
        }
    }

    /* Static fallback (plugin inactive or no packages yet). */
    if (empty($cards)) {
        $cards = array(
            array(
                'title' => 'Basic',
                'subtitle' => 'Solo engineers and small projects.',
                'features' => array('Manual mode culvert creation', 'Box and Pipe culverts (multi-cell / multi-pipe)', '1 workstation license', 'Email support'),
                'price' => 'EGP 19,999',
                'regular' => '',
                'on_sale' => false,
                'suffix' => 'yearly',
                'badge' => '',
                'highlighted' => false,
                'cta_label' => 'Get Started',
                'checkout_url' => home_url('/download'),
            ),
            array(
                'title' => 'Advanced',
                'subtitle' => 'Production teams that need automation.',
                'features' => array('Everything in Basic', 'Automatic mode (alignment + corridor elevation detection)', '1 workstation license', 'Priority support', 'Free updates for 1 year'),
                'price' => 'EGP 39,999',
                'regular' => '',
                'on_sale' => false,
                'suffix' => 'yearly',
                'badge' => 'Recommended',
                'highlighted' => true,
                'cta_label' => 'Get Started',
                'checkout_url' => home_url('/download'),
            ),
            array(
                'title' => 'Enterprise',
                'subtitle' => 'Large teams running culverts at corridor scale.',
                'features' => array('Everything in Advanced', 'Multi Culvert Creation (Excel batch import)', 'Custom integrations', 'Dedicated engineer'),
                'price' => 'Custom',
                'regular' => '',
                'on_sale' => false,
                'suffix' => 'tailored',
                'badge' => '',
                'highlighted' => false,
                'cta_label' => 'Contact Us',
                'checkout_url' => home_url('/contact'),
            ),
        );
    }

    ?>

    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="text-center max-w-2xl mx-auto">
            <div
                class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                style="transition-delay:0ms">
                <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">Pricing</div>
            </div>
            <div
                class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                style="transition-delay:80ms">
                <h2
                    class="font-display text-4xl sm:text-5xl md:text-6xl font-semibold tracking-[-0.025em] leading-[1.05] text-gradient">
                    Built for every team.</h2>
            </div>
            <div
                class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                style="transition-delay:160ms">
                <p class="mt-5 text-lg text-muted-foreground">Transparent pricing. No
                    subscriptions. Just pure engineering value.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 items-stretch mt-20">
            <?php foreach ($cards as $i => $card) :
                $hl    = ! empty($card['highlighted']);
                $delay = $i * 100;
            ?>
                <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:<?php echo (int) $delay; ?>ms">
                    <div class="relative h-full rounded-3xl transition-all duration-500 hover:-translate-y-2 group<?php echo $hl ? ' lg:-translate-y-4 lg:scale-[1.02]' : ''; ?>">
                        <div class="relative h-full rounded-3xl p-8 transition-all duration-500 bg-card <?php echo $hl ? 'border border-primary/40' : 'border border-border hover:border-primary/20'; ?>" style="box-shadow:<?php echo $hl ? '0 10px 30px rgba(0,0,0,0.06)' : '0 6px 20px rgba(0,0,0,0.04)'; ?>">
                            <?php if ($hl && '' !== $card['badge']) : ?>
                                <div class="absolute -top-3 left-1/2 -translate-x-1/2 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary text-primary-foreground text-[11px] font-semibold uppercase tracking-wider"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-3 w-3" aria-hidden="true">
                                        <path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z" />
                                        <path d="M20 2v4" />
                                        <path d="M22 4h-4" />
                                        <circle cx="4" cy="20" r="2" />
                                    </svg><?php echo esc_html($card['badge']); ?></div>
                            <?php endif; ?>
                            <div class="relative">
                                <h3 class="font-display text-xl font-semibold text-foreground"><?php echo esc_html($card['title']); ?></h3>
                                <?php if ('' !== $card['subtitle']) : ?>
                                    <p class="mt-2 text-sm text-muted-foreground"><?php echo esc_html($card['subtitle']); ?></p>
                                <?php endif; ?>
                                <?php if ( ! empty($card['discount_percent']) ) : ?>
                                <div class="mt-4 inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-destructive/10 text-destructive text-[10px] font-semibold uppercase tracking-wider border border-destructive/20"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-2.5 w-2.5" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg><?php echo (int) $card['discount_percent']; ?>% Discount · Limited Offer</div>
                                <?php endif; ?>
                                <div class="mt-7 flex items-baseline gap-2 flex-wrap">
                                    <span class="font-display text-5xl font-semibold tracking-tight <?php echo $hl ? 'text-gradient-primary' : 'text-gradient'; ?>"><?php echo esc_html($card['price']); ?></span>
                                    <?php if ($card['on_sale'] && '' !== $card['regular']) : ?>
                                        <span class="text-sm text-muted-foreground/70 line-through"><?php echo esc_html($card['regular']); ?></span>
                                    <?php endif; ?>
                                    <?php if ('' !== $card['suffix']) : ?>
                                        <span class="text-sm text-muted-foreground">/ <?php echo esc_html($card['suffix']); ?></span>
                                    <?php endif; ?>
                                </div>
                                <a href="<?php echo esc_url($card['checkout_url']); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 <?php echo $hl
                                                                                                                                                                                                                                                                                                                                                                                ? 'relative bg-gradient-to-b from-primary-glow to-primary text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:shadow-[0_18px_45px_-10px_color-mix(in_oklab,var(--primary)_70%,transparent)] hover:brightness-110 transition-all duration-300 border border-primary/20'
                                                                                                                                                                                                                                                                                                                                                                                : 'glass text-foreground hover:bg-background hover:border-primary/40 transition-all duration-300'; ?> h-12 px-8 text-[15px] mt-7 w-full rounded-full hover:scale-[1.02] active:scale-[0.99]"><?php echo esc_html($card['cta_label']); ?></a>
                                <?php if (! empty($card['features'])) : ?>
                                    <ul class="mt-8 space-y-3">
                                        <?php foreach ($card['features'] as $feature) : ?>
                                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><span class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full <?php echo $hl ? 'bg-gradient-to-br from-primary to-primary-glow text-primary-foreground' : 'bg-surface-elevated text-foreground border border-border'; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-3 w-3" aria-hidden="true">
                                                        <path d="M20 6 9 17l-5-5" />
                                                    </svg></span><span class="text-foreground/85"><?php echo esc_html($feature); ?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<div aria-hidden="true" class="mx-auto max-w-7xl px-4 sm:px-6">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div>
</div>
<section id="about" class="relative py-24 sm:py-32 overflow-hidden">
  <div class="absolute inset-0 pointer-events-none opacity-20"
       style="background:radial-gradient(ellipse 60% 40% at 50% 50%, color-mix(in oklab, var(--primary) 6%, transparent) 0%, transparent 70%)"></div>
  <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-end">
      <div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:0ms">
          <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">About Ridge Labs</div>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:80ms"><h2
            class="font-display text-4xl sm:text-5xl md:text-6xl font-semibold tracking-[-0.025em] leading-[1.05] text-gradient">
            Where engineering meets software.</h2></div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:160ms"><p class="mt-6 text-lg text-muted-foreground leading-relaxed">Ridge Labs builds
            advanced tools for AutoCAD Civil 3D — engineered by practicing infrastructure professionals who understand
            the friction of real-world workflows.</p></div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:240ms"><p class="mt-4 text-lg text-muted-foreground leading-relaxed">Across<!-- -->
            <span class="text-foreground font-medium">200+ delivered projects</span>, our software has saved engineering
            teams thousands of hours — turning repetitive modeling work into intelligent automation.</p></div>
      </div>
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:200ms">
        <div class="relative">
          <div class="relative grid grid-cols-2 gap-px bg-border rounded-3xl overflow-hidden border border-border"
               style="box-shadow:0 6px 20px rgba(0,0,0,0.04)">
            <div class="bg-background p-8 hover:bg-surface transition-colors duration-500 group">
              <div class="font-display text-5xl sm:text-6xl font-semibold text-gradient-primary tracking-tight"><span>0
                  <!-- -->+</span></div>
              <div class="mt-3 text-sm text-muted-foreground leading-snug">Real-world projects delivered</div>
            </div>
            <div class="bg-background p-8 hover:bg-surface transition-colors duration-500 group">
              <div class="font-display text-5xl sm:text-6xl font-semibold text-gradient-primary tracking-tight"><span>0
                  <!-- -->×</span></div>
              <div class="mt-3 text-sm text-muted-foreground leading-snug">Faster modeling time</div>
            </div>
            <div class="bg-background p-8 hover:bg-surface transition-colors duration-500 group">
              <div class="font-display text-5xl sm:text-6xl font-semibold text-gradient-primary tracking-tight"><span>&lt;
                  <!-- -->0<!-- -->h</span></div>
              <div class="mt-3 text-sm text-muted-foreground leading-snug">License delivery time</div>
            </div>
            <div class="bg-background p-8 hover:bg-surface transition-colors duration-500 group">
              <div class="font-display text-5xl sm:text-6xl font-semibold text-gradient-primary tracking-tight"><span>0
                  <!-- -->/7</span></div>
              <div class="mt-3 text-sm text-muted-foreground leading-snug">Engineering support</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
      style="transition-delay:320ms">
      <div class="mt-20 relative group">
        <div
          class="relative overflow-hidden rounded-[2rem] border border-border bg-card transition-all duration-500 group-hover:border-primary/30"
          style="box-shadow:0 10px 30px rgba(0,0,0,0.05)">
          <div class="absolute inset-0 opacity-60 pointer-events-none"
               style="background:radial-gradient(ellipse 50% 80% at 0% 50%, color-mix(in oklab, var(--primary) 18%, transparent) 0%, transparent 60%)"></div>
          <div class="absolute inset-0 opacity-[0.05] pointer-events-none"
               style="background-image:linear-gradient(rgba(255,255,255,0.4) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.4) 1px, transparent 1px);background-size:40px 40px"></div>
          <div class="relative grid lg:grid-cols-[auto_1fr_auto] gap-10 items-center p-10 sm:p-12">
            <div class="relative h-36 w-36 sm:h-44 sm:w-44 shrink-0 mx-auto lg:mx-0">
              <div class="relative h-full w-full rounded-full overflow-hidden border border-border"
                   style="box-shadow:0 6px 20px rgba(0,0,0,0.06)"><img
                  src="https://www.arqamweb.com/wp-content/uploads/2026/05/Eng-Tarek-Hamouda-Ridge-Labs-CEO.jpg"
                  alt="Tarek Hamouda" class="h-full w-full object-cover"></div>
            </div>
            <div class="text-center lg:text-left">
              <div class="text-[10px] uppercase tracking-[0.3em] text-primary-glow font-medium">Founder</div>
              <div class="mt-2 font-display text-3xl sm:text-4xl font-semibold text-foreground tracking-tight">Tarek
                Hamouda
              </div>
              <div class="mt-1 text-sm sm:text-base text-muted-foreground">Hydrology &amp; Infrastructure Engineer<span
                  class="mx-2 text-border">|</span>CEO, Ridge Infra Consult
              </div>
              <div
                class="mt-5 mx-auto lg:mx-0 max-w-2xl h-px bg-gradient-to-r from-transparent via-primary/40 to-transparent lg:from-primary/40 lg:via-primary/20 lg:to-transparent"></div>
              <p class="mt-5 text-base text-muted-foreground leading-relaxed max-w-2xl mx-auto lg:mx-0">With over a
                decade of experience in hydrology, hydroinformatics, and infrastructure design, Tarek specializes in
                developing advanced engineering solutions and software tools that automate complex workflows and enhance
                productivity.</p></div>
            <div class="flex justify-center lg:justify-end"><a
                href="https://www.linkedin.com/in/tarek-hamouda-msc-vma-6b5b743b/" target="_blank"
                rel="noopener noreferrer"
                class="group/link inline-flex items-center gap-2 px-5 py-3 rounded-full glass border border-border text-sm text-foreground hover:border-primary/50 hover:-translate-y-0.5 transition-all"
                aria-label="LinkedIn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-linkedin h-4 w-4 text-primary-glow" aria-hidden="true">
                  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                  </path>
                  <rect width="4" height="12" x="2" y="9" />
                  </rect>
                  <circle cx="4" cy="4" r="2" />
                  </circle></svg>
                <span>Connect</span></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="download" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div
      class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
      style="transition-delay:0ms">
      <div
        class="relative overflow-hidden rounded-[2rem] sm:rounded-[2.5rem] p-10 sm:p-16 lg:p-24 text-center border border-primary/20">
        <div class="absolute inset-0 bg-gradient-to-br from-surface-elevated via-background to-surface"></div>
        <div class="absolute inset-0 opacity-70"
             style="background:radial-gradient(ellipse 70% 60% at 50% 0%, color-mix(in oklab, var(--primary) 45%, transparent) 0%, transparent 65%)"></div>
        <div class="absolute inset-0 grid-bg opacity-30 radial-fade"></div>
        <div
          class="absolute -inset-px rounded-[2rem] sm:rounded-[2.5rem] pointer-events-none opacity-60 blur-md animate-glow"
          style="background:linear-gradient(135deg, color-mix(in oklab, var(--primary) 40%, transparent), transparent 60%, color-mix(in oklab, var(--primary-glow) 30%, transparent))"></div>
        <div class="relative">
          <div
            class="inline-flex items-center gap-2 glass rounded-full px-4 py-1.5 text-xs font-medium text-muted-foreground mb-7">
            <span class="h-1.5 w-1.5 rounded-full animate-pulse" style="background-color:oklch(0.78 0.18 150)"></span>Limited
            trial access
          </div>
          <h2
            class="font-display text-4xl sm:text-5xl md:text-7xl font-semibold tracking-[-0.03em] leading-[1.02] text-gradient max-w-3xl mx-auto">
            Start your free trial today.</h2>
          <p class="mt-6 text-lg text-muted-foreground max-w-xl mx-auto">Install Culvert Builder in minutes and
            experience the future of infrastructure modeling inside Civil 3D.</p>
          <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-3"><a href="/download"
                                                                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 relative bg-gradient-to-b from-primary-glow to-primary text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:shadow-[0_18px_45px_-10px_color-mix(in_oklab,var(--primary)_70%,transparent)] hover:brightness-110 transition-all duration-300 border border-primary/20 h-14 px-9 text-base rounded-full group min-w-[230px] hover:scale-[1.04] active:scale-[0.99]">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-download mr-1 transition-transform group-hover:-translate-y-0.5"
                   aria-hidden="true">
                <path d="M12 15V3" />
                </path>
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                </path>
                <path d="m7 10 5 5 5-5" />
                </path></svg>
              Download Trial</a><a href="#contact"
                                   class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 glass text-foreground hover:bg-background hover:border-primary/40 transition-all duration-300 h-14 px-9 text-base rounded-full group min-w-[200px] hover:scale-[1.02]">Talk
              to Sales
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-arrow-right ml-1 transition-transform group-hover:translate-x-1"
                   aria-hidden="true">
                <path d="M5 12h14" />
                </path>
                <path d="m12 5 7 7-7 7" />
                </path></svg>
            </a></div>
          <div class="mt-8 flex flex-wrap items-center justify-center gap-x-8 gap-y-3 text-xs text-muted-foreground/80">
            <span class="inline-flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              class="lucide lucide-clock h-3.5 w-3.5 text-primary-glow"
                                                              aria-hidden="true"><circle cx="12" cy="12" r="10" />
                </circle>
                <path d="M12 6v6l4 2" />
                </path></svg>License delivered in &lt; 1 hour</span></div>
        </div>
      </div>
    </div>
  </div>
</section>
<div aria-hidden="true" class="mx-auto max-w-7xl px-4 sm:px-6">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div>
</div>
<section id="contact" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-16 items-start">
      <div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:0ms">
          <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">Contact</div>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:80ms"><h2
            class="font-display text-4xl sm:text-5xl md:text-6xl font-semibold tracking-[-0.025em] leading-[1.05] text-gradient">
            Let’s build the future, together.</h2></div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:160ms"><p class="mt-5 text-lg text-muted-foreground max-w-md">Whether you have a
            question, need a custom integration, or want to see a live demo — our team is one message away.</p></div>
      </div>
      <div class="space-y-3">
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:0ms">
          <div class=""><a href="https://wa.me/201222635937" target="_blank" rel="noreferrer"
                           class="group flex items-center gap-5 p-6 rounded-2xl glass hover:border-primary/40 hover:-translate-y-0.5 transition-all duration-500 h-full">
              <div
                class="h-12 w-12 shrink-0 rounded-xl bg-gradient-to-br from-primary to-primary-glow flex items-center justify-center text-primary-foreground shadow-glow transition-transform duration-500 group-hover:scale-110 group-hover:rotate-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-message-circle h-5 w-5" aria-hidden="true">
                  <path
                    d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719" />
                  </path></svg>
              </div>
              <div class="flex-1 min-w-0">
                <div class="text-xs uppercase tracking-[0.2em] text-muted-foreground">WhatsApp</div>
                <div class="mt-1 text-lg text-foreground font-medium truncate">+20 122 263 5937</div>
              </div>
              <div
                class="text-muted-foreground group-hover:text-foreground group-hover:translate-x-1 transition-all duration-300">
                →
              </div>
            </a></div>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:80ms">
          <div class=""><a href="mailto:info@ridge-labs.net" target="_blank" rel="noreferrer"
                           class="group flex items-center gap-5 p-6 rounded-2xl glass hover:border-primary/40 hover:-translate-y-0.5 transition-all duration-500 h-full">
              <div
                class="h-12 w-12 shrink-0 rounded-xl bg-gradient-to-br from-primary to-primary-glow flex items-center justify-center text-primary-foreground shadow-glow transition-transform duration-500 group-hover:scale-110 group-hover:rotate-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-mail h-5 w-5" aria-hidden="true">
                  <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                  </path>
                  <rect x="2" y="4" width="20" height="16" rx="2" />
                  </rect></svg>
              </div>
              <div class="flex-1 min-w-0">
                <div class="text-xs uppercase tracking-[0.2em] text-muted-foreground">Email</div>
                <div class="mt-1 text-lg text-foreground font-medium truncate">info@ridge-labs.net</div>
              </div>
              <div
                class="text-muted-foreground group-hover:text-foreground group-hover:translate-x-1 transition-all duration-300">
                →
              </div>
            </a></div>
        </div>
        <div
          class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
          style="transition-delay:160ms">
          <div class="">
            <div class="flex items-center gap-5 p-6 rounded-2xl glass h-full">
              <div
                class="h-12 w-12 shrink-0 rounded-xl bg-gradient-to-br from-primary to-primary-glow flex items-center justify-center text-primary-foreground shadow-glow">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-map-pin h-5 w-5" aria-hidden="true">
                  <path
                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                  </path>
                  <circle cx="12" cy="10" r="3" />
                  </circle></svg>
              </div>
              <div>
                <div class="text-xs uppercase tracking-[0.2em] text-muted-foreground">Headquarters</div>
                <div class="mt-1 text-lg text-foreground font-medium">Cairo, Egypt</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-6">
      <div
        class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
        style="transition-delay:0ms">
        <div
          class="group flex flex-col gap-4 p-6 rounded-2xl glass hover:border-primary/40 transition-all duration-500 h-full">
          <div class="flex items-center gap-5">
            <div
              class="h-12 w-12 shrink-0 rounded-xl bg-gradient-to-br from-primary to-primary-glow flex items-center justify-center text-primary-foreground shadow-glow transition-transform duration-500 group-hover:scale-110 group-hover:rotate-6">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-lightbulb h-5 w-5" aria-hidden="true">
                <path
                  d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                </path>
                <path d="M9 18h6" />
                </path>
                <path d="M10 22h4" />
                </path></svg>
            </div>
            <div class="flex-1 min-w-0">
              <div class="text-xs uppercase tracking-[0.2em] text-muted-foreground">Have an idea?</div>
              <div class="mt-1 text-lg text-foreground font-medium">Suggest a feature</div>
            </div>
          </div>
          <p class="text-sm text-muted-foreground leading-relaxed">Got a brilliant idea, a feature you’d love to see, or
            spotted a pesky bug? Maybe just a thought or a friendly recommendation? We’re all ears — and genuinely
            excited to hear from you. Drop us a line through the contact form on this page, or reach out via any of the
            channels above. Whichever feels easiest, we’ll be happy to chat.</p></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
