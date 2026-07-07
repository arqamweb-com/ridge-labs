<?php get_header(); ?>

<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden">
  <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 70% 50% at 50% 30%, color-mix(in oklab, var(--primary) 18%, transparent) 0%, transparent 65%)"></div>
  <div class="absolute inset-0 grid-bg opacity-[0.05] radial-fade pointer-events-none"></div>

  <div class="relative mx-auto max-w-2xl px-4 sm:px-6 text-center">
    <div class="font-display text-[120px] sm:text-[180px] font-semibold leading-none text-gradient-primary opacity-20 select-none">
      404
    </div>
    <div class="-mt-8 sm:-mt-12">
      <h1 class="font-display text-3xl sm:text-5xl font-semibold text-gradient tracking-[-0.02em]">
        Page not found.
      </h1>
      <p class="mt-5 text-lg text-muted-foreground max-w-md mx-auto leading-relaxed">
        The page you're looking for doesn't exist or has been moved. Head back to the homepage.
      </p>
      <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"
           class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium relative bg-gradient-to-b from-primary-glow to-primary text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:brightness-110 transition-all duration-300 border border-primary/20 h-12 px-8 text-base rounded-full group">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1" aria-hidden="true"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
          Back to Home
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>"
           class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium glass text-foreground hover:bg-background hover:border-primary/40 transition-all duration-300 h-12 px-8 text-base rounded-full">
          Contact Us
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
