<?php
/**
 * Template Name: Download Page
 */
get_header();

// ── Helper: build download button data ───────────────────────────────────────
// Returns: [ 'url' => string|null, 'label' => string, 'paid' => bool ]
// url = null means no file available → caller should show disabled state
function ridge_get_download_url( int $release_id, int $software_id ): array {
    // 1. WC product linked to the software_product
    $wc_trial_id = (int) get_field( 'wc_trial_id', $software_id );
    if ( $wc_trial_id && function_exists( 'wc_get_product' ) ) {
        $wc = wc_get_product( $wc_trial_id );
        if ( $wc ) {
            if ( (float) $wc->get_price() > 0 ) {
                return [ 'url' => $wc->add_to_cart_url(), 'label' => 'Buy — $' . $wc->get_price(), 'paid' => true ];
            }
            return [ 'url' => wc_get_checkout_url() . '?add-to-cart=' . $wc_trial_id, 'label' => 'Download', 'paid' => false ];
        }
    }
    // 2. Direct file from the release
    $file = get_field( 'download_file', $release_id );
    if ( $file ) {
        return [ 'url' => $file, 'label' => 'Download', 'paid' => false ];
    }
    // 3. No file → signal caller to show disabled button
    return [ 'url' => null, 'label' => 'Coming Soon', 'paid' => false ];
}

// ── Helper: render download button ───────────────────────────────────────────
function ridge_download_btn( array $dl, string $extra_class = '' ): void {
    if ( $dl['url'] ) {
        $download_attr = ! $dl['paid'] ? 'download' : '';
        printf(
            '<a href="%s" %s class="%s">%s %s</a>',
            esc_url( $dl['url'] ),
            $download_attr,
            esc_attr( $extra_class ),
            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1 transition-transform group-hover/btn:-translate-y-0.5" aria-hidden="true"><path d="M12 15V3"/><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="m7 10 5 5 5-5"/></svg>',
            esc_html( $dl['label'] )
        );
    } else {
        // No file — disabled button with lock icon
        printf(
            '<span class="%s opacity-40 cursor-not-allowed select-none" aria-disabled="true">%s %s</span>',
            esc_attr( $extra_class ),
            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1" aria-hidden="true"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
            esc_html( $dl['label'] )
        );
    }
}

// ── Fetch software product ────────────────────────────────────────────────────
$software = get_page_by_path( 'culvert-builder', OBJECT, 'software_product' );
$sw_id    = $software ? $software->ID : 0;

// ── Fetch all releases ordered by date DESC ───────────────────────────────────
$all_releases = new WP_Query( [
    'post_type'      => 'release',
    'posts_per_page' => -1,
    'meta_query'     => $sw_id ? [ [
        'key'     => 'product',
        'value'   => '"' . $sw_id . '"',
        'compare' => 'LIKE',
    ] ] : [],
    'meta_key'  => 'release_date',
    'orderby'   => 'meta_value',
    'order'     => 'DESC',
] );

$releases     = $all_releases->posts;
$top_releases = array_slice( $releases, 0, 3 );   // first 3 cards
$all_for_table = $releases;                         // full list for table

// ── Latest trial & manual for hero cards ─────────────────────────────────────
$latest_trial  = null;
$latest_manual = null;
foreach ( $releases as $r ) {
    $type = get_field( 'release_type', $r->ID );
    if ( ! $latest_trial  && $type === 'trial'  ) $latest_trial  = $r;
    if ( ! $latest_manual && $type === 'manual' ) $latest_manual = $r;
    if ( $latest_trial && $latest_manual ) break;
}
// Fallback: if no manual release exists yet, latest_manual stays null
?>

<!-- ── Page Header ─────────────────────────────────────────────────────────── -->
<section class="relative pt-40 pb-20 sm:pt-48 sm:pb-24 overflow-hidden">
  <div class="absolute inset-0 pointer-events-none opacity-60" style="background:radial-gradient(ellipse 70% 50% at 50% 0%, color-mix(in oklab, var(--primary) 22%, transparent) 0%, transparent 65%)"></div>
  <div class="absolute inset-0 grid-bg opacity-[0.05] radial-fade pointer-events-none"></div>
  <div class="relative mx-auto max-w-5xl px-4 sm:px-6 text-center">

    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]">
      <nav aria-label="Breadcrumb" class="flex items-center justify-center gap-2 text-xs text-muted-foreground mb-6">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="inline-flex items-center gap-1.5 hover:text-foreground transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
          <span>Home</span>
        </a>
        <span class="inline-flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-60" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>
          <span class="text-foreground/80 font-medium">Download</span>
        </span>
      </nav>
    </div>

    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]">
      <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-5">Download</div>
    </div>
    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:80ms">
      <h1 class="font-display text-5xl sm:text-6xl md:text-7xl font-semibold tracking-[-0.03em] leading-[1.02] text-gradient">
        Download<br><span class="text-gradient-primary">Culvert Builder.</span>
      </h1>
    </div>
    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:160ms">
      <p class="mt-6 text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">
        Get started with Culvert Builder by downloading the trial version or the user manual.
      </p>
    </div>

  </div>
</section>

<div aria-hidden="true" class="mx-auto max-w-7xl px-4 sm:px-6">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-border to-transparent"></div>
</div>

<!-- ── System Requirements ──────────────────────────────────────────────────── -->
<section class="relative pb-12">
  <div class="mx-auto max-w-4xl px-4 sm:px-6">
    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]">
      <div class="rounded-3xl glass border border-border p-8 sm:p-10">
        <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-4">System Requirements</div>
        <h3 class="font-display text-2xl sm:text-3xl font-semibold text-gradient">Before you install</h3>
        <ul class="mt-7 grid sm:grid-cols-2 gap-4">
          <?php
          $reqs = [
            'Compatible with Autodesk Civil 3D 2025–2026',
            'Windows 10 / 11 (64-bit)',
            'Trial version available for evaluation',
            'License activation required after trial period',
          ];
          foreach ( $reqs as $req ) : ?>
          <li class="flex items-start gap-3 text-sm text-foreground/85">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 shrink-0 text-primary-glow mt-0.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            <span><?php echo esc_html( $req ); ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ── Hero Download Cards (Trial + Manual) ────────────────────────────────── -->
<section class="relative pb-20">
  <div class="mx-auto max-w-6xl px-4 sm:px-6">
    <div class="grid md:grid-cols-2 gap-6">

      <?php
      // ── Trial Card ──────────────────────────────────────────────────────────
      if ( $latest_trial ) :
        $t_version = get_field( 'version', $latest_trial->ID );
        $t_dl      = ridge_get_download_url( $latest_trial->ID, $sw_id );
      ?>
      <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]">
        <div class="group relative h-full rounded-3xl p-8 sm:p-10 glass border border-border hover:border-primary/40 transition-all duration-500 overflow-hidden">
          <div class="absolute -inset-px rounded-3xl pointer-events-none opacity-0 group-hover:opacity-60 blur-md transition-opacity duration-500"
               style="background:linear-gradient(135deg, color-mix(in oklab, var(--primary) 40%, transparent), transparent 60%, color-mix(in oklab, var(--primary-glow) 25%, transparent))"></div>
          <div class="relative">
            <div class="flex items-start justify-between gap-3">
              <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-primary to-primary-glow text-primary-foreground shadow-glow">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 15V3"/><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="m7 10 5 5 5-5"/></svg>
              </div>
              <span class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[10px] font-semibold uppercase tracking-wider bg-emerald-500/10 text-emerald-500 border border-emerald-500/30">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                Latest v<?php echo esc_html( $t_version ); ?>
              </span>
            </div>
            <h2 class="mt-6 font-display text-2xl sm:text-3xl font-semibold text-foreground">Download Trial</h2>
            <p class="mt-3 text-sm text-muted-foreground leading-relaxed">
              Install the latest Culvert Builder trial (v<?php echo esc_html( $t_version ); ?>) and start generating parametric culverts inside Civil 3D within minutes.
            </p>
            <?php ridge_download_btn( $t_dl,
              'inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium relative bg-gradient-to-b from-primary-glow to-primary text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:brightness-110 transition-all duration-300 border border-primary/20 h-14 px-9 text-base mt-8 w-full rounded-full group/btn hover:scale-[1.02] active:scale-[0.99]'
            ); ?>
          </div>
        </div>
      </div>
      <?php endif; ?>

      <?php
      // ── Manual Card ─────────────────────────────────────────────────────────
      if ( $latest_manual ) :
        $m_dl = ridge_get_download_url( $latest_manual->ID, $sw_id );
      ?>
      <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:120ms">
        <div class="group relative h-full rounded-3xl p-8 sm:p-10 glass border border-border hover:border-primary/40 transition-all duration-500 overflow-hidden">
          <div class="absolute -inset-px rounded-3xl pointer-events-none opacity-0 group-hover:opacity-60 blur-md transition-opacity duration-500"
               style="background:linear-gradient(135deg, color-mix(in oklab, var(--primary-glow) 35%, transparent), transparent 60%, color-mix(in oklab, var(--primary) 30%, transparent))"></div>
          <div class="relative">
            <div class="inline-flex h-14 w-14 items-center justify-center rounded-2xl glass border border-border text-primary-glow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/><path d="M14 2v5a1 1 0 0 0 1 1h5"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
            </div>
            <h2 class="mt-6 font-display text-2xl sm:text-3xl font-semibold text-foreground">Download Manual</h2>
            <p class="mt-3 text-sm text-muted-foreground leading-relaxed">
              The complete Culvert Builder user manual — installation, setup, workflows, and best practices in one PDF.
            </p>
            <?php ridge_download_btn( $m_dl,
              'inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium glass text-foreground hover:bg-background hover:border-primary/40 transition-all duration-300 h-14 px-9 text-base mt-8 w-full rounded-full group/btn hover:scale-[1.02] active:scale-[0.99]'
            ); ?>
          </div>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </div>
</section>

<!-- ── Version Cards (top 3) + Full Archive Table ──────────────────────────── -->
<?php if ( $all_releases->have_posts() ) : ?>
<section class="relative py-20">
  <div class="mx-auto max-w-6xl px-4 sm:px-6">

    <!-- heading -->
    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]">
      <div class="text-center mb-14">
        <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-4">Version Archive</div>
        <h2 class="font-display text-3xl sm:text-4xl md:text-5xl font-semibold tracking-[-0.025em] text-gradient">All releases</h2>
        <p class="mt-5 text-muted-foreground max-w-xl mx-auto">Browse and download previous versions of Culvert Builder.</p>
      </div>
    </div>

    <!-- top 3 cards -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
      $delay = 0;
      foreach ( $top_releases as $r ) :
        $ver      = get_field( 'version', $r->ID );
        $date     = get_field( 'release_date', $r->ID );
        $c3d      = get_field( 'civil3d_support', $r->ID );
        $notes    = get_field( 'release_notes', $r->ID );
        $is_latest = get_field( 'is_latest', $r->ID );
        $dl       = ridge_get_download_url( $r->ID, $sw_id );
        $year     = $date ? date( 'Y', strtotime( $date ) ) : '';

        $card_border  = $is_latest ? 'border-primary/50 shadow-elegant' : 'border-border hover:border-primary/30';
        $glow_opacity = $is_latest ? 'opacity-50' : 'opacity-0 group-hover:opacity-30';
        $btn_class    = $is_latest
          ? 'relative bg-gradient-to-b from-primary-glow to-primary text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:brightness-110 border border-primary/20'
          : 'glass text-foreground hover:bg-background hover:border-primary/40';
      ?>
      <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]" style="transition-delay:<?php echo $delay; ?>ms">
        <div class="group relative h-full rounded-2xl p-6 sm:p-7 glass border transition-all duration-500 hover:-translate-y-0.5 overflow-hidden <?php echo $card_border; ?>">
          <?php if ( $is_latest ) : ?>
          <div class="absolute -inset-px rounded-2xl pointer-events-none <?php echo $glow_opacity; ?> blur-md"
               style="background:linear-gradient(135deg, color-mix(in oklab, var(--primary) 35%, transparent), transparent 70%)"></div>
          <?php endif; ?>
          <div class="relative">
            <div class="flex items-center justify-between mb-4">
              <div class="font-display text-2xl font-semibold text-foreground tracking-[-0.02em]">v<?php echo esc_html( $ver ); ?></div>
              <?php if ( $is_latest ) : ?>
              <span class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[10px] font-semibold uppercase tracking-wider bg-emerald-500/10 text-emerald-500 border border-emerald-500/30">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></span>Latest
              </span>
              <?php endif; ?>
            </div>

            <?php if ( $year ) : ?>
            <div class="flex items-center gap-2 text-xs text-muted-foreground mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
              <?php echo esc_html( $year ); ?>
            </div>
            <?php endif; ?>

            <?php if ( $notes ) : ?>
            <p class="text-sm text-foreground/80 leading-relaxed mb-5"><?php echo esc_html( $notes ); ?></p>
            <?php endif; ?>

            <?php if ( $c3d ) : ?>
            <div class="text-xs text-muted-foreground border-t border-border pt-4 mb-5">
              Supports <?php echo esc_html( $c3d ); ?>
            </div>
            <?php endif; ?>

            <?php ridge_download_btn( $dl,
              'inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all duration-300 h-10 px-5 py-2 w-full rounded-full group/btn ' . $btn_class
            ); ?>
          </div>
        </div>
      </div>
      <?php $delay += 80; endforeach; ?>
    </div>

    <!-- full archive table -->
    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px] mt-16">
      <div class="text-center mb-8">
        <div class="text-xs uppercase tracking-[0.25em] text-primary-glow font-medium mb-3">Full archive</div>
        <h3 class="font-display text-2xl sm:text-3xl font-semibold tracking-[-0.02em] text-gradient">All previous versions</h3>
      </div>
      <div class="rounded-2xl glass border border-border overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full text-sm">
            <thead>
              <tr class="border-b border-border bg-surface-elevated/40">
                <th class="text-left font-medium text-muted-foreground uppercase tracking-wider text-[11px] px-5 py-4">Version</th>
                <th class="text-left font-medium text-muted-foreground uppercase tracking-wider text-[11px] px-5 py-4">Date</th>
                <th class="text-left font-medium text-muted-foreground uppercase tracking-wider text-[11px] px-5 py-4">Civil 3D</th>
                <th class="text-left font-medium text-muted-foreground uppercase tracking-wider text-[11px] px-5 py-4">Notes</th>
                <th class="text-right font-medium text-muted-foreground uppercase tracking-wider text-[11px] px-5 py-4">Download</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ( $all_for_table as $r ) :
                $ver      = get_field( 'version', $r->ID );
                $date     = get_field( 'release_date', $r->ID );
                $c3d      = get_field( 'civil3d_support', $r->ID );
                $notes    = get_field( 'release_notes', $r->ID );
                $is_latest = get_field( 'is_latest', $r->ID );
                $dl       = ridge_get_download_url( $r->ID, $sw_id );
                $year     = $date ? date( 'Y', strtotime( $date ) ) : '—';
                $first_note = $notes ? $notes : '';
                $row_bg   = $is_latest ? 'bg-primary/5' : '';
              ?>
              <tr class="border-b border-border/60 last:border-b-0 hover:bg-surface-elevated/30 transition-colors <?php echo $row_bg; ?>">
                <td class="px-5 py-4 font-display font-semibold text-foreground tracking-[-0.01em]">
                  <span class="inline-flex items-center gap-2">
                    v<?php echo esc_html( $ver ); ?>
                    <?php if ( $is_latest ) : ?>
                    <span class="inline-flex items-center gap-1 rounded-full px-2 py-0.5 text-[9px] font-semibold uppercase tracking-wider bg-emerald-500/10 text-emerald-500 border border-emerald-500/30">Latest</span>
                    <?php endif; ?>
                  </span>
                </td>
                <td class="px-5 py-4 text-muted-foreground whitespace-nowrap"><?php echo esc_html( $year ); ?></td>
                <td class="px-5 py-4 text-foreground/80 whitespace-nowrap"><?php echo esc_html( $c3d ); ?></td>
                <td class="px-5 py-4 text-foreground/75"><?php echo esc_html( $first_note ); ?></td>
                <td class="px-5 py-4 text-right">
                  <?php ridge_download_btn( $dl,
                    'inline-flex items-center justify-center gap-1.5 whitespace-nowrap font-medium glass text-foreground hover:bg-background hover:border-primary/40 transition-all duration-300 h-8 px-3.5 text-xs rounded-full group/dl'
                  ); ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</section>
<?php endif; wp_reset_postdata(); ?>

<!-- ── CTA ─────────────────────────────────────────────────────────────────── -->
<section class="relative py-20">
  <div class="mx-auto max-w-4xl px-4 sm:px-6">
    <div class="transition-all duration-1000 will-change-transform opacity-0 translate-y-8 blur-[2px]">
      <div class="relative overflow-hidden rounded-3xl border border-primary/20 p-10 sm:p-14 text-center">
        <div class="absolute inset-0 bg-gradient-to-br from-surface-elevated via-background to-surface"></div>
        <div class="absolute inset-0 opacity-60" style="background:radial-gradient(ellipse 70% 60% at 50% 0%, color-mix(in oklab, var(--primary) 35%, transparent) 0%, transparent 65%)"></div>
        <div class="relative">
          <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl glass text-primary-glow mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
          </div>
          <h3 class="font-display text-2xl sm:text-4xl font-semibold text-gradient">Need help before downloading?</h3>
          <p class="mt-5 text-muted-foreground max-w-xl mx-auto">
            If you need help choosing the right version or understanding the activation workflow, feel free to contact us.
          </p>
          <a href="<?php echo esc_url( home_url('/contact') ); ?>"
             class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium relative bg-gradient-to-b from-primary-glow to-primary text-primary-foreground shadow-[0_10px_30px_-10px_color-mix(in_oklab,var(--primary)_55%,transparent)] hover:brightness-110 transition-all duration-300 border border-primary/20 h-14 px-9 text-base mt-8 rounded-full group hover:scale-[1.03] active:scale-[0.99]">
            Contact Us
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1 transition-transform group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
