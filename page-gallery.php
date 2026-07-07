<?php
/**
 * Template Name: Gallery Page
 *
 * Pulls images from the "gallery" custom post type (created with ACF).
 *   • Image   → Featured Image
 *   • Caption → Post Title
 *   • Order   → Page Attributes "Order" (menu_order)
 *
 * If no gallery posts exist yet, it falls back to the original demo
 * screenshots so the page never renders empty.
 */
get_header();

/* ── Collect gallery items (from the "gallery" CPT) ───────────────────── */
$items = ridge_labs_gallery_items(-1);

/* Fallback demo images (used only when the CPT has no published items) */
if (empty($items)) {
    for ($i = 1; $i <= 13; $i++) {
        $url = 'https://ridge-labs.net/wp-content/uploads/2026/07/' . $i . '.png';
        $items[] = array(
            'full'    => $url,
            'thumb'   => $url,
            'caption' => 'Culvert Builder screenshot ' . $i,
            'alt'     => 'Culvert Builder screenshot ' . $i,
        );
    }
}

$reveal = 'transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]';
?>

<!-- ── Hero ─────────────────────────────────────────────────────────── -->
<section id="top" class="relative pt-40 pb-20 sm:pt-48 sm:pb-24 overflow-hidden">
  <div class="absolute inset-0 grid-bg opacity-[0.05] radial-fade pointer-events-none"></div>

  <div class="relative mx-auto max-w-5xl px-4 sm:px-6 text-center">

    <div class="<?php echo $reveal; ?>">
      <nav class="flex items-center justify-center gap-2 text-xs text-muted-foreground mb-6" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-1.5 hover:text-foreground transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" /><path d="M9 22V12h6v10" /></svg>
          Home
        </a>
        <span aria-hidden="true">/</span>
        <span class="text-foreground/80 font-medium">Gallery</span>
      </nav>
    </div>

    <div class="<?php echo $reveal; ?>" style="transition-delay:80ms">
      <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">Gallery</div>
    </div>

    <div class="<?php echo $reveal; ?>" style="transition-delay:160ms">
      <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-foreground mb-6">
        Culvert Builder
        <span class="block" style="background:linear-gradient(90deg,var(--primary-glow),var(--primary));-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent;">in action.</span>
      </h1>
    </div>

    <div class="<?php echo $reveal; ?>" style="transition-delay:240ms">
      <p class="text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">
        A visual tour of the plugin — interface, workflows, and parametric 3D output generated inside AutoCAD &amp; Civil 3D.
      </p>
    </div>

  </div>
</section>

<div class="mx-auto max-w-7xl px-4 sm:px-6">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div>
</div>

<!-- ── Gallery grid ─────────────────────────────────────────────────── -->
<section class="relative pb-28 pt-16">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
      <?php foreach ($items as $index => $item):
        $delay = ($index % 3) * 90; ?>
      <div class="<?php echo $reveal; ?>" style="transition-delay:<?php echo (int) $delay; ?>ms">
        <button type="button"
                class="group relative w-full overflow-hidden rounded-2xl border border-border bg-surface transition-all duration-500 hover:-translate-y-1 hover:border-primary/40 hover:shadow-elegant focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/50"
                data-gallery-item
                data-index="<?php echo (int) $index; ?>"
                data-full="<?php echo esc_url($item['full']); ?>"
                data-caption="<?php echo esc_attr($item['caption']); ?>"
                aria-label="<?php echo esc_attr('View ' . $item['caption']); ?>">
          <div class="aspect-[4/3] w-full overflow-hidden">
            <img src="<?php echo esc_url($item['thumb']); ?>"
                 alt="<?php echo esc_attr($item['alt']); ?>"
                 loading="lazy"
                 class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.04]" />
          </div>
          <div class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/[0.03] transition-colors duration-500"></div>
          <div class="pointer-events-none absolute bottom-3 right-3 inline-flex h-9 w-9 items-center justify-center rounded-full bg-background/80 backdrop-blur-md border border-border text-foreground opacity-0 translate-y-1 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 3h6v6" /><path d="M10 14 21 3" /><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" /></svg>
          </div>
        </button>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── CTA ──────────────────────────────────────────────────────────── -->
<section class="relative border-t border-border bg-gradient-to-b from-surface/40 to-background">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 py-20 sm:py-28">
    <div class="<?php echo $reveal; ?>">
      <div class="relative overflow-hidden rounded-3xl border border-border bg-surface p-8 sm:p-12 lg:p-16 text-center">
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary via-primary/60 to-primary/20"></div>

        <div class="mx-auto inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 2 11 13" /><path d="M22 2 15 22l-4-9-9-4z" /></svg>
        </div>

        <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-foreground mb-4">Ready to streamline your culvert workflow?</h2>
        <p class="text-base sm:text-lg text-muted-foreground max-w-2xl mx-auto mb-10">
          See something you like? Reach out for a custom demo, licensing questions, or technical support — our team is ready to help.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="<?php echo esc_url(home_url('/contact')); ?>"
             style="padding:0.875rem 1.75rem;"
             class="group inline-flex items-center justify-center gap-2 rounded-xl bg-primary text-sm font-medium text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:brightness-110 transition-all duration-300">
            Contact Us
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform group-hover:translate-x-0.5" aria-hidden="true"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg>
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>"
             style="padding:0.875rem 1.75rem;"
             class="inline-flex items-center justify-center gap-2 rounded-xl border border-border bg-background text-sm font-medium text-foreground hover:bg-muted/50 transition-all duration-300">
            Back to Home Page
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/gallery-lightbox'); ?>

<?php get_footer(); ?>
