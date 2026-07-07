<?php
/**
 * Order received (Thank-You) page — theme override.
 *
 * Overrides woocommerce/templates/checkout/thankyou.php to render the custom
 * Ridge Labs thank-you design. WooCommerce hooks are preserved so payment
 * gateways, cart clearing, analytics and plugins keep working.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package Ridge Labs
 * @version 8.1.0 (based on WooCommerce core template)
 *
 * @var WC_Order $order
 */

defined('ABSPATH') || exit;

if ( $order ) :

	do_action( 'woocommerce_before_thankyou', $order->get_id() );

	if ( $order->has_status( 'failed' ) ) : ?>

		<section class="relative pt-40 pb-24 sm:pt-48 overflow-hidden bg-background text-foreground">
			<div class="relative mx-auto max-w-2xl px-4 sm:px-6 text-center">
				<h1 class="font-display text-4xl sm:text-5xl font-semibold tracking-[-0.02em] text-gradient">Payment unsuccessful</h1>
				<p class="mt-5 text-muted-foreground">Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.</p>
				<div class="mt-8 flex flex-wrap items-center justify-center gap-3">
					<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="inline-flex items-center justify-center gap-2 h-14 px-9 text-base rounded-full font-medium bg-gradient-to-r from-primary-glow to-primary text-primary-foreground shadow-md hover:brightness-110 transition-all">Pay again</a>
					<?php if ( is_user_logged_in() ) : ?>
						<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="inline-flex items-center justify-center gap-2 h-14 px-9 text-base rounded-full font-medium glass text-foreground hover:bg-background transition-all">My account</a>
					<?php endif; ?>
				</div>
			</div>
		</section>

	<?php else : ?>

		<?php
		// Render the custom thank-you design. The shared part is order-aware:
		// pass the order so it can surface the order number / billing email.
		get_template_part( 'template-parts/thank-you-content', null, array( 'order' => $order ) );
		?>

	<?php endif; ?>

	<?php
	do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() );
	do_action( 'woocommerce_thankyou', $order->get_id() );
	?>

<?php else : ?>

	<?php wc_get_template( 'checkout/order-received.php', array( 'order' => false ) ); ?>

<?php endif; ?>
