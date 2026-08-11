<?php
/**
 * Template Name: Privacy Page
 */
get_header();
?>

<section class="relative pt-40 pb-20 sm:pt-48 sm:pb-24 overflow-hidden">
    <div class="absolute inset-0 pointer-events-none opacity-60"
         style="background:radial-gradient(ellipse 70% 50% at 50% 0%, color-mix(in oklab, var(--primary) 22%, transparent) 0%, transparent 65%)"></div>
    <div class="absolute inset-0 grid-bg opacity-[0.05] radial-fade pointer-events-none"></div>
    <div class="relative mx-auto max-w-5xl px-4 sm:px-6 text-center">
        <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
             style="transition-delay:0ms">
            <nav aria-label="Breadcrumb"
                 class="flex items-center justify-center gap-2 text-xs text-muted-foreground mb-6"><a href="/"
                                                                                                      class="inline-flex items-center gap-1.5 hover:text-foreground transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-house h-3.5 w-3.5" aria-hidden="true">
                        <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/>
                        </path>
                        <path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        </path></svg>
                    <span>Home</span></a><span class="inline-flex items-center gap-2"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-right h-3.5 w-3.5 opacity-60" aria-hidden="true"><path
                                d="m9 18 6-6-6-6"/>
                        </path></svg><span class="text-foreground/80 font-medium">Privacy Policy</span></span></nav>
        </div>
        <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
             style="transition-delay:0ms">
            <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">Legal</div>
        </div>
        <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
             style="transition-delay:80ms"><h1
                    class="font-display text-5xl sm:text-6xl md:text-7xl font-semibold tracking-[-0.03em] leading-[1.02] text-gradient">
                Privacy Policy</h1></div>
        <div class="transition-all duration-1000 ease-[cubic-bezier(0.16,1,0.3,1)] will-change-transform opacity-0 translate-y-8 blur-[2px]"
             style="transition-delay:160ms"><p
                    class="mt-6 text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">Effective date: August
                6, 2026. This policy explains what data we collect, how we collect and use it, and the third parties we
                share it with.</p></div>
    </div>
</section>

<div aria-hidden="true" class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div>
</div>

<div>
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>
