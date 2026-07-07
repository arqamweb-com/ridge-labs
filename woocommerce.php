<?php
/**
 * WooCommerce wrapper template.
 *
 * Used for every WooCommerce page (shop archive, single product, cart,
 * checkout, account, etc.). It renders the theme header/footer around
 * WooCommerce's own content, so the store inherits the site layout.
 */
defined('ABSPATH') || exit;

get_header();

// The order-received (thank-you) endpoint renders its own full-bleed design
// (woocommerce/checkout/thankyou.php), so skip the standard section wrapper.
if ( function_exists('is_order_received_page') && is_order_received_page() ) :

    woocommerce_content();

else : ?>

<section class="relative pt-40 pb-20 sm:pt-48 sm:pb-24 overflow-hidden">
  <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 70% 40% at 50% 0%, color-mix(in oklab, var(--primary) 12%, transparent) 0%, transparent 60%)"></div>

  <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
    <div class="ridge-woo prose-invert">
      <?php woocommerce_content(); ?>
    </div>
  </div>
</section>

<?php endif; ?>

<?php get_footer(); ?>
