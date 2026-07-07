<?php
/**
 * Generic page template.
 *
 * Fallback for any WordPress page that doesn't have a dedicated page-{slug}.php
 * template — most importantly the WooCommerce Cart, Checkout and My Account
 * pages, which are regular pages holding WooCommerce shortcodes/blocks.
 * Without this file such pages fall through to index.php (the front page).
 */
defined('ABSPATH') || exit;

get_header(); ?>

<section class="relative pt-40 pb-20 sm:pt-48 sm:pb-24 overflow-hidden">
  <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 70% 40% at 50% 0%, color-mix(in oklab, var(--primary) 12%, transparent) 0%, transparent 60%)"></div>

  <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
    <?php while (have_posts()) : the_post(); ?>

      <?php if (!is_cart() && !is_checkout() && !is_account_page()) : ?>
        <h1 class="font-display text-3xl sm:text-5xl font-semibold tracking-[-0.02em] text-gradient mb-8">
          <?php the_title(); ?>
        </h1>
      <?php endif; ?>

      <div class="ridge-woo prose-invert max-w-none">
        <?php the_content(); ?>
      </div>

    <?php endwhile; ?>
  </div>
</section>

<?php get_footer(); ?>
