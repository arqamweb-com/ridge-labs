<?php
/**
 * Shared Thank-You / Order-Received content.
 *
 * Rendered by page-thank.php (standalone page) and by
 * woocommerce/checkout/thankyou.php (WooCommerce order-received endpoint).
 * Pure presentation — no get_header()/get_footer() here.
 */
defined('ABSPATH') || exit;

// Order context — only present when rendered from the WooCommerce
// order-received endpoint. The standalone page passes no order and
// falls back to the static design.
$rl_order        = ( isset( $args['order'] ) && $args['order'] instanceof WC_Order ) ? $args['order'] : null;
$rl_order_number = $rl_order ? $rl_order->get_order_number() : '';
?>
<main class="relative bg-background text-foreground">
    <section class="relative pt-40 pb-16 sm:pt-48 sm:pb-20 overflow-hidden">
        <div class="absolute inset-0 pointer-events-none opacity-60"
             style="background:radial-gradient(ellipse 70% 50% at 50% 0%, color-mix(in oklab, var(--primary) 25%, transparent) 0%, transparent 65%)"></div>
        <div class="absolute inset-0 grid-bg opacity-[0.05] radial-fade pointer-events-none"></div>
        <div class="relative mx-auto max-w-4xl px-4 sm:px-6 text-center">
            <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                 style="transition-delay:0ms">
                <div class="mx-auto inline-flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-primary to-primary-glow text-primary-foreground shadow-xl animate-scale-in">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-circle-check h-10 w-10" aria-hidden="true">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                </div>
            </div>
            <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                 style="transition-delay:80ms">
                <div class="mt-6 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/10 text-primary-glow text-[11px] font-semibold uppercase tracking-wider border border-primary/20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-sparkles h-3 w-3" aria-hidden="true">
                        <path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path>
                        <path d="M20 2v4"></path>
                        <path d="M22 4h-4"></path>
                        <circle cx="4" cy="20" r="2"></circle>
                    </svg>
                    Order Confirmed
                </div>
            </div>
            <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                 style="transition-delay:140ms"><h1
                        class="mt-6 font-display text-5xl sm:text-6xl md:text-7xl font-semibold tracking-[-0.03em] leading-[1.02] text-gradient">
                    Thank you for your <span class="text-gradient-primary">purchase.</span></h1></div>
            <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                 style="transition-delay:220ms"><p
                        class="mt-6 text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">Your payment was
                    received successfully. You're one step away from automating your culvert workflows in Civil 3D.</p>
            </div>
            <?php if ( $rl_order_number ) : ?>
            <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                 style="transition-delay:300ms">
                <div class="mt-8 inline-flex items-center gap-2 rounded-full border border-border bg-card px-4 py-2 text-sm">
                    <span class="uppercase tracking-wider text-xs text-muted-foreground">Order</span>
                    <span class="font-mono font-semibold text-foreground">#<?php echo esc_html( $rl_order_number ); ?></span>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="relative py-20 sm:py-24">
        <div class="mx-auto max-w-5xl px-4 sm:px-6">
            <div class="text-center max-w-2xl mx-auto">
                <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                     style="transition-delay:0ms">
                    <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">What Happens
                        Next
                    </div>
                </div>
                <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                     style="transition-delay:80ms"><h2
                            class="font-display text-4xl sm:text-5xl font-semibold tracking-[-0.025em] leading-[1.05] text-gradient">
                        Here's the plan.</h2></div>
                <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                     style="transition-delay:160ms"><p class="mt-4 text-muted-foreground">A quick walk-through of the
                        next few steps so you know exactly what to expect.</p></div>
            </div>
            <div class="mt-16 relative">
                <div class="absolute left-6 sm:left-1/2 top-0 bottom-0 w-px -translate-x-1/2 hidden sm:block"
                     style="background:linear-gradient(to bottom, transparent, color-mix(in oklab, var(--primary) 40%, transparent), transparent)"></div>
                <ol class="space-y-6 sm:space-y-10">
                    <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                         style="transition-delay:0ms">
                        <li class="relative sm:grid sm:grid-cols-2 sm:gap-10 items-center ">
                            <div class="sm:text-right">
                                <div class="relative rounded-2xl border border-border bg-card p-6 hover:border-primary/30 transition-colors">
                                    <div class="flex items-start gap-4">
                                        <div class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-primary to-primary-glow text-primary-foreground shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="lucide lucide-circle-check h-5 w-5" aria-hidden="true">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <div class="text-left">
                                            <div class="flex items-center gap-2 text-[10px] uppercase tracking-wider text-muted-foreground font-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M12 6v6l4 2"></path>
                                                </svg>
                                                Just now
                                            </div>
                                            <h3 class="mt-1 font-display text-lg font-semibold text-foreground">Step 1 — Payment received</h3>
                                            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">We've
                                                successfully received your order. A receipt has been sent to your
                                                email.</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute left-6 sm:left-1/2 top-8 -translate-x-1/2 hidden sm:flex h-4 w-4 rounded-full bg-primary ring-4 ring-background shadow-[0_0_0_2px_color-mix(in_oklab,var(--primary)_40%,transparent)]"></div>
                        </li>
                    </div>
                    <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                         style="transition-delay:100ms">
                        <li class="relative sm:grid sm:grid-cols-2 sm:gap-10 items-center">
                            <div class="sm:text-left sm:col-start-2">
                                <div class="relative rounded-2xl border border-border bg-card p-6 hover:border-primary/30 transition-colors">
                                    <div class="flex items-start gap-4">
                                        <div class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-primary to-primary-glow text-primary-foreground shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="lucide lucide-mail h-5 w-5" aria-hidden="true">
                                                <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                            </svg>
                                        </div>
                                        <div class="text-left">
                                            <div class="flex items-center gap-2 text-[10px] uppercase tracking-wider text-muted-foreground font-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M12 6v6l4 2"></path>
                                                </svg>
                                                Within 5 minutes
                                            </div>
                                            <h3 class="mt-1 font-display text-lg font-semibold text-foreground">Step 2 — Confirmation email</h3>
                                            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Check your
                                                inbox within the next few minutes for the order confirmation and next
                                                steps.</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute left-6 sm:left-1/2 top-8 -translate-x-1/2 hidden sm:flex h-4 w-4 rounded-full bg-primary ring-4 ring-background shadow-[0_0_0_2px_color-mix(in_oklab,var(--primary)_40%,transparent)]"></div>
                        </li>
                    </div>
                    <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                         style="transition-delay:200ms">
                        <li class="relative sm:grid sm:grid-cols-2 sm:gap-10 items-center ">
                            <div class="sm:text-right">
                                <div class="relative rounded-2xl border border-border bg-card p-6 hover:border-primary/30 transition-colors">
                                    <div class="flex items-start gap-4">
                                        <div class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-primary to-primary-glow text-primary-foreground shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="lucide lucide-key-round h-5 w-5" aria-hidden="true">
                                                <path d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z"></path>
                                                <circle cx="16.5" cy="7.5" r=".5" fill="currentColor"></circle>
                                            </svg>
                                        </div>
                                        <div class="text-left">
                                            <div class="flex items-center gap-2 text-[10px] uppercase tracking-wider text-muted-foreground font-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M12 6v6l4 2"></path>
                                                </svg>
                                                Within 24 hours
                                            </div>
                                            <h3 class="mt-1 font-display text-lg font-semibold text-foreground">Step 3 — Your activation code</h3>
                                            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Our team will
                                                send your unique activation code and license details directly to your
                                                email.</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute left-6 sm:left-1/2 top-8 -translate-x-1/2 hidden sm:flex h-4 w-4 rounded-full bg-primary ring-4 ring-background shadow-[0_0_0_2px_color-mix(in_oklab,var(--primary)_40%,transparent)]"></div>
                        </li>
                    </div>
                    <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                         style="transition-delay:300ms">
                        <li class="relative sm:grid sm:grid-cols-2 sm:gap-10 items-center">
                            <div class="sm:text-left sm:col-start-2">
                                <div class="relative rounded-2xl border border-border bg-card p-6 hover:border-primary/30 transition-colors">
                                    <div class="flex items-start gap-4">
                                        <div class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-primary to-primary-glow text-primary-foreground shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="lucide lucide-download h-5 w-5" aria-hidden="true">
                                                <path d="M12 15V3"></path>
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <path d="m7 10 5 5 5-5"></path>
                                            </svg>
                                        </div>
                                        <div class="text-left">
                                            <div class="flex items-center gap-2 text-[10px] uppercase tracking-wider text-muted-foreground font-semibold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M12 6v6l4 2"></path>
                                                </svg>
                                                Ready to go
                                            </div>
                                            <h3 class="mt-1 font-display text-lg font-semibold text-foreground">Step 4 — Install &amp; activate</h3>
                                            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Download
                                                Culvert Builder, run the installer, and paste your activation code to
                                                get started.</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute left-6 sm:left-1/2 top-8 -translate-x-1/2 hidden sm:flex h-4 w-4 rounded-full bg-primary ring-4 ring-background shadow-[0_0_0_2px_color-mix(in_oklab,var(--primary)_40%,transparent)]"></div>
                        </li>
                    </div>
                </ol>
            </div>
        </div>
    </section>
    <section class="relative pb-24">
        <div class="mx-auto max-w-4xl px-4 sm:px-6">
            <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
                 style="transition-delay:0ms">
                <div class="relative overflow-hidden rounded-3xl border border-primary/20 p-10 sm:p-14 text-center">
                    <div class="absolute inset-0 bg-gradient-to-br from-surface-elevated via-background to-surface"></div>
                    <div class="absolute inset-0 opacity-60"
                         style="background:radial-gradient(ellipse 70% 60% at 50% 0%, color-mix(in oklab, var(--primary) 35%, transparent) 0%, transparent 65%)"></div>
                    <div class="relative">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl glass text-primary-glow mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="lucide lucide-message-circle h-5 w-5"
                                 aria-hidden="true">
                                <path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-2xl sm:text-4xl font-semibold text-gradient">Need instant
                            help?</h3>
                        <p class="mt-5 text-muted-foreground max-w-xl mx-auto">Message us on WhatsApp for immediate
                            assistance with your order, activation code, or installation.</p>
                        <div class="mt-8 flex flex-wrap items-center justify-center gap-3"><a
                                    href="https://wa.me/201222635937" target="_blank" rel="noreferrer"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 relative from-primary-glow to-primary shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:shadow-[0_18px_45px_-10px_color-mix(in_oklab,var(--primary)_70%,transparent)] hover:brightness-110 transition-all duration-300 border border-primary/20 h-14 px-9 text-base rounded-full group hover:scale-[1.03] active:scale-[0.99] bg-[#25D366] hover:bg-[#20bd5a] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-message-circle mr-1"
                                     aria-hidden="true">
                                    <path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"></path>
                                </svg>
                                Chat on WhatsApp
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="lucide lucide-arrow-right ml-1 transition-transform group-hover:translate-x-1"
                                     aria-hidden="true">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a><a href="/download"
                                   class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 glass text-foreground hover:bg-background hover:border-primary/40 transition-all duration-300 h-14 px-9 text-base rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-download mr-1" aria-hidden="true">
                                    <path d="M12 15V3"></path>
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <path d="m7 10 5 5 5-5"></path>
                                </svg>
                                Go to Downloads</a></div>
                        <div class="mt-8 flex items-center justify-center gap-2 text-xs text-muted-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="lucide lucide-shield-check h-3.5 w-3.5"
                                 aria-hidden="true">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            Secure payment · Confirmation email sent to your inbox
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
