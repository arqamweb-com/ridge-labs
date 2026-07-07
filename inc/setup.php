<?php
defined('ABSPATH') || exit;

/**
 * Auto-creates all Ridge Labs pages on theme activation.
 * Runs once; skips pages that already exist by slug.
 */
function ridge_labs_create_pages() {

    $pages = [
        [
            'title'    => 'Home',
            'slug'     => 'home',
            'template' => '',           // front-page.php handles this via Reading settings
            'front'    => true,
        ],
        [
            'title'    => 'Product',
            'slug'     => 'product',
            'template' => 'page-product.php',
        ],
        [
            'title'    => 'Features',
            'slug'     => 'features',
            'template' => 'page-features.php',
        ],
        [
            'title'    => 'Pricing',
            'slug'     => 'pricing',
            'template' => 'page-pricing.php',
        ],
        [
            'title'    => 'About',
            'slug'     => 'about',
            'template' => 'page-about.php',
        ],
        [
            'title'    => 'Contact',
            'slug'     => 'contact',
            'template' => 'page-contact.php',
        ],
        [
            'title'    => 'Download',
            'slug'     => 'download',
            'template' => 'page-download.php',
        ],
        [
            'title'    => 'Privacy Policy',
            'slug'     => 'privacy',
            'template' => 'page-privacy.php',
        ],
        [
            'title'    => 'Terms and Conditions',
            'slug'     => 'terms',
            'template' => 'page-terms.php',
        ],
        [
            'title'    => 'Refund Policy',
            'slug'     => 'refund',
            'template' => 'page-refund.php',
        ],
    ];

    $front_page_id = 0;

    foreach ($pages as $page) {
        // Skip if a page with this slug already exists
        $existing = get_page_by_path($page['slug'], OBJECT, 'page');
        if ($existing) {
            if (!empty($page['front'])) {
                $front_page_id = $existing->ID;
            }
            continue;
        }

        $page_id = wp_insert_post([
            'post_title'   => $page['title'],
            'post_name'    => $page['slug'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_author'  => 1,
            'post_content' => '',
        ]);

        if (is_wp_error($page_id) || !$page_id) continue;

        // Assign template if specified
        if (!empty($page['template'])) {
            update_post_meta($page_id, '_wp_page_template', $page['template']);
        }

        if (!empty($page['front'])) {
            $front_page_id = $page_id;
        }
    }

    // Set front page & Reading settings
    if ($front_page_id) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $front_page_id);
    }

    // Set permalink structure to /%postname%/ if not already custom
    $current_structure = get_option('permalink_structure');
    if (empty($current_structure)) {
        update_option('permalink_structure', '/%postname%/');
        flush_rewrite_rules();
    }

    // Mark setup as done so this doesn't run on every switch
    update_option('ridge_labs_setup_done', '1.0.0');
}
add_action('after_switch_theme', 'ridge_labs_create_pages');

/**
 * Admin notice if setup hasn't run yet.
 */
function ridge_labs_setup_notice() {
    if (get_option('ridge_labs_setup_done')) return;
    echo '<div class="notice notice-warning"><p><strong>Ridge Labs Theme:</strong> '
       . 'Run <a href="' . esc_url(admin_url('themes.php?page=ridge-labs-setup')) . '">Theme Setup</a> to auto-create all pages.</p></div>';
}
add_action('admin_notices', 'ridge_labs_setup_notice');

/**
 * Admin setup page under Appearance.
 */
function ridge_labs_admin_menu() {
    add_theme_page(
        'Ridge Labs Setup',
        'Ridge Labs Setup',
        'manage_options',
        'ridge-labs-setup',
        'ridge_labs_setup_page'
    );
}
add_action('admin_menu', 'ridge_labs_admin_menu');

function ridge_labs_setup_page() {
    // Trigger setup manually if button clicked
    if (isset($_POST['ridge_run_setup']) && check_admin_referer('ridge_setup')) {
        ridge_labs_create_pages();
        flush_rewrite_rules();
        echo '<div class="notice notice-success"><p>Setup complete! All pages created.</p></div>';
    }

    $done    = get_option('ridge_labs_setup_done');
    $pages   = ['home','product','features','pricing','about','contact','download','privacy','terms','refund'];
    $checklist = [];
    foreach ($pages as $slug) {
        $p = get_page_by_path($slug, OBJECT, 'page');
        $checklist[$slug] = $p ? ['exists' => true, 'id' => $p->ID, 'status' => $p->post_status] : ['exists' => false];
    }

    $front_id   = (int) get_option('page_on_front');
    $show_front = get_option('show_on_front');
    $permalink  = get_option('permalink_structure');
    ?>
    <div class="wrap">
      <h1>Ridge Labs Theme — Setup</h1>

      <?php if (!$done): ?>
      <form method="POST">
        <?php wp_nonce_field('ridge_setup'); ?>
        <p>Click the button below to auto-create all required pages and configure WordPress settings.</p>
        <p><button type="submit" name="ridge_run_setup" class="button button-primary button-large">Run Setup</button></p>
      </form>
      <?php else: ?>
      <p class="notice notice-success inline">&#10003; Setup was run. You can re-run it safely — it skips existing pages.</p>
      <form method="POST" style="margin-top:12px">
        <?php wp_nonce_field('ridge_setup'); ?>
        <button type="submit" name="ridge_run_setup" class="button">Re-run Setup</button>
      </form>
      <?php endif; ?>

      <h2 style="margin-top:2em">Pages Checklist</h2>
      <table class="widefat" style="max-width:600px">
        <thead><tr><th>Slug</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>
        <?php foreach ($checklist as $slug => $info): ?>
          <tr>
            <td><code>/<?php echo esc_html($slug); ?></code></td>
            <td><?php if ($info['exists']): ?>
              <span style="color:green">&#10003; Published</span>
            <?php else: ?>
              <span style="color:red">&#10007; Missing</span>
            <?php endif; ?></td>
            <td><?php if ($info['exists']): ?>
              <a href="<?php echo esc_url(get_edit_post_link($info['id'])); ?>">Edit</a>
              &nbsp;|&nbsp;
              <a href="<?php echo esc_url(get_permalink($info['id'])); ?>" target="_blank">View</a>
            <?php endif; ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>

      <h2 style="margin-top:2em">WordPress Settings</h2>
      <table class="widefat" style="max-width:600px">
        <tbody>
          <tr><td><strong>Front Page</strong></td>
              <td><?php echo ($show_front === 'page' && $front_id)
                ? '<span style="color:green">&#10003; Static page set (ID: '.$front_id.')</span>'
                : '<span style="color:red">&#10007; Not configured — run Setup</span>'; ?></td></tr>
          <tr><td><strong>Permalink Structure</strong></td>
              <td><?php echo !empty($permalink)
                ? '<span style="color:green">&#10003; '.esc_html($permalink).'</span>'
                : '<span style="color:red">&#10007; Plain — run Setup to fix</span>'; ?></td></tr>
        </tbody>
      </table>

      <h2 style="margin-top:2em">Installation Instructions</h2>
      <ol style="max-width:700px;line-height:2">
        <li>Go to <strong>Appearance → Themes → Add New → Upload Theme</strong> and upload <code>ridge-labs-theme.zip</code></li>
        <li>Activate the theme, then come back here and click <strong>Run Setup</strong></li>
        <li>Go to <strong>Settings → Permalinks</strong> and click Save (to flush rewrite rules)</li>
        <li>Visit the site — all pages should be live at their correct URLs</li>
      </ol>
    </div>
    <?php
}
