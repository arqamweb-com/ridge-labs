
<footer class="relative border-t border-border">
  <div class="absolute inset-x-0 top-0 h-px" style="background:linear-gradient(90deg, transparent, color-mix(in oklab, var(--primary) 50%, transparent), transparent)"></div>
  <div class="mx-auto max-w-7xl px-4 sm:px-6 py-14">
    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8 pb-10 border-b border-border">

      <div class="flex items-center gap-4">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="https://www.arqamweb.com/wp-content/uploads/2026/04/Logo-Web-1.png"
               alt="Ridge Labs"
               class="h-10 w-auto opacity-95 hover:opacity-100 transition-opacity"/>
        </a>
        <div class="text-sm text-muted-foreground max-w-xs hidden md:block">Engineering automation for AutoCAD Civil 3D.</div>
      </div>

      <div class="flex flex-col md:flex-row items-center gap-6">
        <div class="flex flex-wrap items-center justify-center md:justify-end gap-x-5 gap-y-2 text-xs text-muted-foreground">
          <a href="<?php echo esc_url(home_url('/terms')); ?>" class="hover:text-foreground transition-colors">Terms and Conditions</a>
          <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="hover:text-foreground transition-colors">Privacy Policy</a>
          <a href="<?php echo esc_url(home_url('/refund')); ?>" class="hover:text-foreground transition-colors">Refund Policy</a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="hover:text-foreground transition-colors">Contact Us</a>
        </div>
        <div class="flex items-center gap-2">
          <a href="#" rel="noreferrer" aria-label="LinkedIn"
             class="h-10 w-10 rounded-full glass flex items-center justify-center text-muted-foreground hover:text-foreground hover:border-primary/40 hover:-translate-y-0.5 transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
          <a href="mailto:info@ridge-labs.net" target="_blank" rel="noreferrer" aria-label="Email"
             class="h-10 w-10 rounded-full glass flex items-center justify-center text-muted-foreground hover:text-foreground hover:border-primary/40 hover:-translate-y-0.5 transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
          </a>
          <a href="https://wa.me/201222635937" target="_blank" rel="noreferrer" aria-label="WhatsApp"
             class="h-10 w-10 rounded-full glass flex items-center justify-center text-muted-foreground hover:text-foreground hover:border-primary/40 hover:-translate-y-0.5 transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"/></svg>
          </a>
        </div>
      </div>
    </div>

    <div class="pt-6 text-center text-xs text-muted-foreground">
      &copy; Ridge Labs &mdash; Website Designed &amp; Developed by
      <a href="https://www.arqamweb.com" target="_blank" rel="noreferrer"
         class="text-foreground/80 hover:text-primary-glow transition-colors">Arqam Web</a>
    </div>
  </div>
</footer>

</main><!-- /#main -->

<?php wp_footer(); ?>
</body>
</html>
