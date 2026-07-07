<?php
/**
 * Template Name: Pricing Page
 *
 * The pricing cards are driven by WooCommerce products grouped under the
 * "culvert-builder" service (Arqam Woo Pricing plugin). If the plugin or its
 * packages are unavailable, a static fallback set is rendered instead so the
 * page never breaks.
 */
get_header();

/* -------------------------------------------------------------------------
 * Build the list of cards to render.
 * ---------------------------------------------------------------------- */
$awp_slug = 'culvert-builder';
$cards    = array();

if ( function_exists( 'awp_service_has_packages' ) && awp_service_has_packages( $awp_slug ) ) {
	foreach ( AWP_Query::get_packages( $awp_slug ) as $product ) {
		$c = AWP_Render::card_context( $product );
		$cards[] = array(
			'title'        => $c['title'],
			'subtitle'     => $c['subtitle'],
			'features'     => $c['features'],
			'price'        => html_entity_decode( (string) $c['price'], ENT_QUOTES, 'UTF-8' ),
			'regular'      => html_entity_decode( (string) $c['regular'], ENT_QUOTES, 'UTF-8' ),
			'on_sale'      => ! empty( $c['on_sale'] ),
			'discount_percent' => isset( $c['discount_percent'] ) ? (int) $c['discount_percent'] : 0,
			'suffix'       => $c['suffix'],
			'badge'        => $c['badge'],
			'highlighted'  => ! empty( $c['highlighted'] ),
			'cta_label'    => $c['cta_label'],
			'checkout_url' => $c['checkout_url'],
		);
	}
}

/* Static fallback (plugin inactive or no packages yet). */
if ( empty( $cards ) ) {
	$cards = array(
		array(
			'title' => 'Basic', 'subtitle' => 'Solo engineers and small projects.',
			'features' => array( 'Manual mode culvert creation', 'Box and Pipe culverts (multi-cell / multi-pipe)', '1 workstation license', 'Email support' ),
			'price' => 'EGP 19,999', 'regular' => '', 'on_sale' => false, 'suffix' => 'yearly',
			'badge' => '', 'highlighted' => false, 'cta_label' => 'Get Started', 'checkout_url' => home_url( '/download' ),
		),
		array(
			'title' => 'Advanced', 'subtitle' => 'Production teams that need automation.',
			'features' => array( 'Everything in Basic', 'Automatic mode (alignment + corridor elevation detection)', '1 workstation license', 'Priority support', 'Free updates for 1 year' ),
			'price' => 'EGP 39,999', 'regular' => '', 'on_sale' => false, 'suffix' => 'yearly',
			'badge' => 'Recommended', 'highlighted' => true, 'cta_label' => 'Get Started', 'checkout_url' => home_url( '/download' ),
		),
		array(
			'title' => 'Enterprise', 'subtitle' => 'Large teams running culverts at corridor scale.',
			'features' => array( 'Everything in Advanced', 'Multi Culvert Creation (Excel batch import)', 'Custom integrations', 'Dedicated engineer' ),
			'price' => 'Custom', 'regular' => '', 'on_sale' => false, 'suffix' => 'tailored',
			'badge' => '', 'highlighted' => false, 'cta_label' => 'Contact Us', 'checkout_url' => home_url( '/contact' ),
		),
	);
}
?>

<section class="relative pt-40 pb-20 sm:pt-48 sm:pb-24 overflow-hidden"><div class="absolute inset-0 pointer-events-none opacity-60" style="background:radial-gradient(ellipse 70% 50% at 50% 0%, color-mix(in oklab, var(--primary) 22%, transparent) 0%, transparent 65%)"></div><div class="absolute inset-0 grid-bg opacity-[0.05] radial-fade pointer-events-none"></div><div class="relative mx-auto max-w-5xl px-4 sm:px-6 text-center"><div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:0ms"><nav aria-label="Breadcrumb" class="flex items-center justify-center gap-2 text-xs text-muted-foreground mb-6"><a href="/" class="inline-flex items-center gap-1.5 hover:text-foreground transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house h-3.5 w-3.5" aria-hidden="true"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg><span>Home</span></a><span class="inline-flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-3.5 w-3.5 opacity-60" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span class="text-foreground/80 font-medium">Pricing</span></span></nav></div><div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:0ms"><div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">Pricing</div></div><div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:80ms"><h1 class="font-display text-5xl sm:text-6xl md:text-7xl font-semibold tracking-[-0.03em] leading-[1.02] text-gradient">A fraction of the value <span class="text-gradient-primary">it delivers.</span></h1></div><div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:160ms"><p class="mt-6 text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">Two years of engineering. Thousands of hours saved per project. Now available at launch pricing — for a limited time, to a limited number of teams.</p></div></div></section><div aria-hidden="true" class="mx-auto max-w-7xl px-4 sm:px-6"><div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div></div><section class="relative pt-8 pb-4"><div class="mx-auto max-w-4xl px-4 sm:px-6"><div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:0ms"><div class="grid sm:grid-cols-3 gap-3 mb-12"><div class="flex items-start gap-3 p-4 rounded-2xl border border-primary/20 bg-surface"><div class="inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-primary to-primary-glow text-primary-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-4 w-4" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><div><div class="text-sm font-semibold text-foreground">Limited-Time Offer</div><div class="text-xs text-muted-foreground mt-0.5">Launch pricing ends soon</div></div></div><div class="flex items-start gap-3 p-4 rounded-2xl border border-primary/20 bg-surface"><div class="inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-primary to-primary-glow text-primary-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-4 w-4" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg></div><div><div class="text-sm font-semibold text-foreground">Limited Seats</div><div class="text-xs text-muted-foreground mt-0.5">Reserved for early adopters</div></div></div><div class="flex items-start gap-3 p-4 rounded-2xl border border-primary/20 bg-surface"><div class="inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-primary to-primary-glow text-primary-foreground"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw h-4 w-4" aria-hidden="true"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M8 16H3v5"/></svg></div><div><div class="text-sm font-semibold text-foreground">Free Yearly Updates</div><div class="text-xs text-muted-foreground mt-0.5">All upgrades included</div></div></div></div></div><div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:80ms"><div class="text-center max-w-3xl mx-auto"><h2 class="font-display text-3xl sm:text-4xl font-semibold text-gradient leading-tight">Worth thousands. Priced for the few who move first.</h2><p class="mt-5 text-lg text-muted-foreground leading-relaxed">Culvert Builder is the result of years of engineering, deep Civil 3D expertise, and obsessive workflow refinement. A single project saved with it pays for the license many times over. We’re opening access at launch pricing to a limited number of teams — once these seats are filled, prices go up. Join the community now and lock in the value before it’s gone.</p></div></div></div></section>

<section id="pricing" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 items-stretch mt-0">
      <?php foreach ( $cards as $i => $card ) :
        $hl    = ! empty( $card['highlighted'] );
        $delay = $i * 100;
      ?>
      <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:<?php echo (int) $delay; ?>ms">
        <div class="relative h-full rounded-3xl transition-all duration-500 hover:-translate-y-2 group<?php echo $hl ? ' lg:-translate-y-4 lg:scale-[1.02]' : ''; ?>">
          <div class="relative h-full rounded-3xl p-8 transition-all duration-500 bg-card <?php echo $hl ? 'border border-primary/40' : 'border border-border hover:border-primary/20'; ?>" style="box-shadow:<?php echo $hl ? '0 10px 30px rgba(0,0,0,0.06)' : '0 6px 20px rgba(0,0,0,0.04)'; ?>">
            <?php if ( $hl && '' !== $card['badge'] ) : ?>
            <div class="absolute -top-3 left-1/2 -translate-x-1/2 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary text-primary-foreground text-[11px] font-semibold uppercase tracking-wider"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-3 w-3" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"/><path d="M20 2v4"/><path d="M22 4h-4"/><circle cx="4" cy="20" r="2"/></svg><?php echo esc_html( $card['badge'] ); ?></div>
            <?php endif; ?>
            <div class="relative">
              <h3 class="font-display text-xl font-semibold text-foreground"><?php echo esc_html( $card['title'] ); ?></h3>
              <?php if ( '' !== $card['subtitle'] ) : ?>
              <p class="mt-2 text-sm text-muted-foreground"><?php echo esc_html( $card['subtitle'] ); ?></p>
              <?php endif; ?>
              <?php if ( ! empty( $card['discount_percent'] ) ) : ?>
              <div class="mt-4 inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-destructive/10 text-destructive text-[10px] font-semibold uppercase tracking-wider border border-destructive/20"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-2.5 w-2.5" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path><path d="M20 2v4"></path><path d="M22 4h-4"></path><circle cx="4" cy="20" r="2"></circle></svg><?php echo (int) $card['discount_percent']; ?>% Discount · Limited Offer</div>
              <?php endif; ?>
              <div class="mt-7 flex items-baseline gap-2 flex-wrap">
                <span class="font-display text-5xl font-semibold tracking-tight <?php echo $hl ? 'text-gradient-primary' : 'text-gradient'; ?>"><?php echo esc_html( $card['price'] ); ?></span>
                <?php if ( $card['on_sale'] && '' !== $card['regular'] ) : ?>
                <span class="text-sm text-muted-foreground/70 line-through"><?php echo esc_html( $card['regular'] ); ?></span>
                <?php endif; ?>
                <?php if ( '' !== $card['suffix'] ) : ?>
                <span class="text-sm text-muted-foreground">/ <?php echo esc_html( $card['suffix'] ); ?></span>
                <?php endif; ?>
              </div>
              <a href="<?php echo esc_url( $card['checkout_url'] ); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 <?php echo $hl
                ? 'relative bg-gradient-to-b from-primary-glow to-primary text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:shadow-[0_18px_45px_-10px_color-mix(in_oklab,var(--primary)_70%,transparent)] hover:brightness-110 transition-all duration-300 border border-primary/20'
                : 'glass text-foreground hover:bg-background hover:border-primary/40 transition-all duration-300'; ?> h-12 px-8 text-[15px] mt-7 w-full rounded-full hover:scale-[1.02] active:scale-[0.99]"><?php echo esc_html( $card['cta_label'] ); ?></a>
              <?php if ( ! empty( $card['features'] ) ) : ?>
              <ul class="mt-8 space-y-3">
                <?php foreach ( $card['features'] as $feature ) : ?>
                <li class="flex items-start gap-3 text-sm text-muted-foreground"><span class="mt-0.5 inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full <?php echo $hl ? 'bg-gradient-to-br from-primary to-primary-glow text-primary-foreground' : 'bg-surface-elevated text-foreground border border-border'; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-3 w-3" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg></span><span class="text-foreground/85"><?php echo esc_html( $feature ); ?></span></li>
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

<section class="relative py-20"><div class="mx-auto max-w-4xl px-4 sm:px-6"><div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:0ms"><div class="relative overflow-hidden rounded-3xl border border-primary/20 p-10 sm:p-14 text-center"><div class="absolute inset-0 bg-gradient-to-br from-surface-elevated via-background to-surface"></div><div class="absolute inset-0 opacity-60" style="background:radial-gradient(ellipse 70% 60% at 50% 0%, color-mix(in oklab, var(--primary) 35%, transparent) 0%, transparent 65%)"></div><div class="relative"><div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl glass text-primary-glow mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-question-mark h-5 w-5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg></div><h3 class="font-display text-2xl sm:text-4xl font-semibold text-gradient">Need help choosing a plan?</h3><p class="mt-5 text-muted-foreground max-w-xl mx-auto">If you need help picking the right plan or want a tailored Enterprise quote, our team is one message away.</p><a href="/contact" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 relative bg-gradient-to-b from-primary-glow to-primary text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:shadow-[0_18px_45px_-10px_color-mix(in_oklab,var(--primary)_70%,transparent)] hover:brightness-110 transition-all duration-300 border border-primary/20 h-14 px-9 text-base mt-8 rounded-full group hover:scale-[1.03] active:scale-[0.99]">Contact Us<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 transition-transform group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a></div></div></div></div></section>

<?php get_footer(); ?>
