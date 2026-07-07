<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>

<section class="relative pt-40 pb-20 sm:pt-48 sm:pb-24 overflow-hidden">
  <div class="absolute inset-0 pointer-events-none opacity-60" style="background:radial-gradient(ellipse 70% 50% at 50% 0%, color-mix(in oklab, var(--primary) 22%, transparent) 0%, transparent 65%)"></div>
  <div class="absolute inset-0 grid-bg opacity-[0.05] radial-fade pointer-events-none"></div>
  <div class="relative mx-auto max-w-5xl px-4 sm:px-6 text-center">
    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]">
      <nav aria-label="Breadcrumb" class="flex items-center justify-center gap-2 text-xs text-muted-foreground mb-6">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-1.5 hover:text-foreground transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
          <span>Home</span>
        </a>
        <span class="inline-flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-60" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>
          <span class="text-foreground/80 font-medium">Contact</span>
        </span>
      </nav>
    </div>
    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]">
      <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">Contact</div>
    </div>
    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:80ms">
      <h1 class="font-display text-5xl sm:text-6xl md:text-7xl font-semibold tracking-[-0.03em] leading-[1.02] text-gradient">Get in touch with our team.</h1>
    </div>
    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:160ms">
      <p class="mt-6 text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">Whether you have a question, need a custom integration, or want to see a live demo — our team is one message away.</p>
    </div>
  </div>
</section>

<div aria-hidden="true" class="mx-auto max-w-7xl px-4 sm:px-6">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div>
</div>

<section id="contact" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-10 items-stretch">

      <div class="flex flex-col gap-3">
        <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]">
          <a href="https://wa.me/201222635937" target="_blank" rel="noreferrer"
             class="group flex items-center gap-5 p-6 rounded-2xl glass hover:border-primary/40 hover:-translate-y-0.5 transition-all duration-500">
            <div class="h-12 w-12 shrink-0 rounded-xl bg-gradient-to-br from-primary to-primary-glow flex items-center justify-center text-primary-foreground shadow-glow group-hover:scale-110 group-hover:rotate-6 transition-transform duration-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"/></svg>
            </div>
            <div class="flex-1"><div class="text-xs uppercase tracking-[0.2em] text-muted-foreground">WhatsApp</div><div class="mt-1 text-lg text-foreground font-medium">+20 122 263 5937</div></div>
            <span class="text-muted-foreground group-hover:text-foreground group-hover:translate-x-1 transition-all duration-300">→</span>
          </a>
        </div>
        <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:80ms">
          <a href="mailto:info@ridge-labs.net" class="group flex items-center gap-5 p-6 rounded-2xl glass hover:border-primary/40 hover:-translate-y-0.5 transition-all duration-500">
            <div class="h-12 w-12 shrink-0 rounded-xl bg-gradient-to-br from-primary to-primary-glow flex items-center justify-center text-primary-foreground shadow-glow group-hover:scale-110 group-hover:rotate-6 transition-transform duration-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
            </div>
            <div class="flex-1"><div class="text-xs uppercase tracking-[0.2em] text-muted-foreground">Email</div><div class="mt-1 text-lg text-foreground font-medium">info@ridge-labs.net</div></div>
            <span class="text-muted-foreground group-hover:text-foreground group-hover:translate-x-1 transition-all duration-300">→</span>
          </a>
        </div>
        <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:160ms">
          <div class="flex items-center gap-5 p-6 rounded-2xl glass">
            <div class="h-12 w-12 shrink-0 rounded-xl bg-gradient-to-br from-primary to-primary-glow flex items-center justify-center text-primary-foreground shadow-glow">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div><div class="text-xs uppercase tracking-[0.2em] text-muted-foreground">Headquarters</div><div class="mt-1 text-lg text-foreground font-medium">Cairo, Egypt</div></div>
          </div>
        </div>
      </div>

      <div>
        <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]">
          <div class="rounded-3xl glass border border-border p-8 sm:p-10">
            <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-3">Send a message</div>
            <h2 class="font-display text-2xl sm:text-3xl font-semibold text-gradient tracking-[-0.02em]">Tell us how we can help</h2>

            <?php if (!empty($_GET['contact'])): ?>
              <?php if ($_GET['contact'] === 'success'): ?>
                <div class="mt-4 p-4 rounded-xl bg-green-500/10 border border-green-500/30 text-green-400 text-sm">Message sent! We'll get back to you soon.</div>
              <?php else: ?>
                <div class="mt-4 p-4 rounded-xl bg-red-500/10 border border-red-500/30 text-red-400 text-sm">Something went wrong. Please try again.</div>
              <?php endif; ?>
            <?php endif; ?>

            <form method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="mt-8 grid gap-5" data-contact-form>
              <input type="hidden" name="action" value="ridge_contact">
              <?php wp_nonce_field('ridge_contact', 'ridge_contact_nonce'); ?>

              <div class="grid sm:grid-cols-2 gap-5">
                <div class="grid gap-2">
                  <label class="text-sm font-medium" for="cf-name">Name</label>
                  <input type="text" id="cf-name" name="name" required placeholder="Your name"
                         class="flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring"/>
                </div>
                <div class="grid gap-2">
                  <label class="text-sm font-medium" for="cf-email">Email</label>
                  <input type="email" id="cf-email" name="email" required placeholder="you@company.com"
                         class="flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring"/>
                </div>
              </div>

              <div class="grid gap-2">
                <label class="text-sm font-medium" for="cf-company">Company (optional)</label>
                <input type="text" id="cf-company" name="company" placeholder="Your company"
                       class="flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring"/>
              </div>

              <div class="grid gap-2">
                <label class="text-sm font-medium" for="cf-subject">Subject</label>
                <select id="cf-subject" name="subject"
                        class="flex h-11 w-full rounded-md border border-input bg-transparent px-3 py-2 text-sm shadow-sm focus:outline-none focus:ring-1 focus:ring-ring">
                  <option value="" disabled selected>Select a subject</option>
                  <option value="General Inquiry">General Inquiry</option>
                  <option value="Technical Support">Technical Support</option>
                  <option value="Licensing &amp; Pricing">Licensing &amp; Pricing</option>
                  <option value="Feature Request">Feature Request</option>
                  <option value="Bug Report">Bug Report</option>
                  <option value="Partnership">Partnership</option>
                </select>
              </div>

              <div class="grid gap-2">
                <label class="text-sm font-medium" for="cf-message">Message</label>
                <textarea id="cf-message" name="message" required rows="6" placeholder="How can we help?"
                          class="flex min-h-[60px] w-full rounded-md border border-input bg-transparent px-3 py-2 text-sm shadow-sm placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring"></textarea>
              </div>

              <button type="submit"
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium relative bg-gradient-to-b from-primary-glow to-primary text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:brightness-110 transition-all duration-300 border border-primary/20 h-14 px-9 text-base rounded-full group justify-self-start mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1 transition-transform group-hover:-translate-y-0.5" aria-hidden="true"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"/><path d="m21.854 2.147-10.94 10.939"/></svg>
                Send message
              </button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
