<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class('bg-background text-foreground'); ?>>
<?php wp_body_open(); ?>

<div id="cursor-glow" aria-hidden="true" class="pointer-events-none fixed inset-0 z-[9999] transition-opacity duration-300 opacity-0" style="background:radial-gradient(600px circle at var(--cx,50%) var(--cy,50%), color-mix(in oklab, var(--primary) 6%, transparent), transparent 40%)"></div>

<main class="relative bg-background text-foreground">

<header class="fixed top-0 inset-x-0 z-50 transition-all duration-500 py-5" id="site-header">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="flex items-center justify-between rounded-full px-4 sm:px-6 py-3 transition-all duration-500 bg-background/70 backdrop-blur-xl border border-border">

      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2.5 group">
        <img src="https://www.arqamweb.com/wp-content/uploads/2026/04/Logo-Web-1.png"
             alt="Ridge Labs"
             class="h-11 sm:h-12 w-auto transition-transform duration-500 group-hover:scale-105"/>
      </a>

      <?php
      $current_slug = ridge_labs_current_slug();
      $nav_links = [
        '/'         => 'Home',
        '/product'  => 'Product',
        '/gallery'  => 'Gallery',
        '/features' => 'Features',
        '/pricing'  => 'Pricing',
        '/about'    => 'About',
        '/contact'  => 'Contact',
      ];
      ?>
      <nav class="hidden lg:flex items-center gap-1">
        <?php foreach ($nav_links as $path => $label):
          $href   = home_url($path);
          $active = ($current_slug === $path) ? 'active' : '';
          $scale  = $active ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100';
        ?>
        <a href="<?php echo esc_url($href); ?>"
           class="relative px-4 py-2 text-sm text-muted-foreground hover:text-foreground transition-colors rounded-full group data-[status=active]:text-foreground <?php echo $active; ?>"
           <?php if ($active): ?>aria-current="page"<?php endif; ?>>
          <?php echo esc_html($label); ?>
          <span class="absolute inset-x-4 bottom-1 h-px bg-gradient-to-r from-transparent via-primary-glow to-transparent transition-transform duration-500 origin-center <?php echo $scale; ?>"></span>
        </a>
        <?php endforeach; ?>
      </nav>

      <div class="flex items-center gap-2">
        <a href="<?php echo esc_url(home_url('/download')); ?>"
           class="items-center justify-center gap-2 whitespace-nowrap font-medium relative bg-gradient-to-b from-primary-glow to-primary text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:shadow-[0_18px_45px_-10px_color-mix(in_oklab,var(--primary)_70%,transparent)] hover:brightness-110 transition-all duration-300 border border-primary/20 h-8 px-3.5 text-xs rounded-full group hidden sm:inline-flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1 transition-transform group-hover:-translate-y-0.5" aria-hidden="true"><path d="M12 15V3"/><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="m7 10 5 5 5-5"/></svg>
          Download Trial
        </a>

        <button type="button" id="mobile-menu-btn" aria-label="Toggle menu" aria-expanded="false"
                class="lg:hidden h-9 w-9 rounded-full glass flex items-center justify-center text-foreground">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="menu-icon" aria-hidden="true"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="close-icon hidden" aria-hidden="true"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
      </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden lg:hidden mt-2 rounded-2xl glass border border-border p-4">
      <nav class="flex flex-col gap-1">
        <?php foreach ($nav_links as $path => $label):
          $href       = home_url($path);
          $mob_active = ($current_slug === $path) ? 'text-foreground font-medium' : 'text-muted-foreground';
        ?>
        <a href="<?php echo esc_url($href); ?>"
           class="px-4 py-2.5 text-sm rounded-xl hover:bg-muted/50 transition-colors <?php echo $mob_active; ?>"
           <?php if ($current_slug === $path): ?>aria-current="page"<?php endif; ?>>
          <?php echo esc_html($label); ?>
        </a>
        <?php endforeach; ?>
        <div class="mt-2 pt-2 border-t border-border">
          <a href="<?php echo esc_url(home_url('/download')); ?>"
             class="flex items-center gap-2 px-4 py-2.5 text-sm font-medium text-primary-foreground bg-gradient-to-b from-primary-glow to-primary rounded-xl transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 15V3"/><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="m7 10 5 5 5-5"/></svg>
            Download Trial
          </a>
        </div>
      </nav>
    </div>
  </div>
</header>
