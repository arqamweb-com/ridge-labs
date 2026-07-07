<?php
defined('ABSPATH') || exit;

require_once get_template_directory() . '/inc/setup.php';

// ── Theme Support ─────────────────────────────────────────────────────────────
function ridge_labs_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    add_theme_support('wp-block-styles');
    register_nav_menus(['primary' => __('Primary Navigation', 'ridge-labs')]);

    // ── WooCommerce support ──────────────────────────────────────────────────
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'ridge_labs_setup');

// ── Assets ────────────────────────────────────────────────────────────────────
function ridge_labs_assets() {
    $ver = '1.0.0';
    $uri = get_template_directory_uri();

    wp_enqueue_style('google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap',
        [], null);

    wp_enqueue_style('ridge-labs-main', $uri . '/assets/css/styles.css', ['google-fonts'], $ver);
    wp_enqueue_script('ridge-labs-theme', $uri . '/assets/js/theme.js', [], $ver, true);

    // WooCommerce skin — load only on store pages, after WC's own stylesheet.
    if (function_exists('is_woocommerce') &&
        (is_woocommerce() || is_cart() || is_checkout() || is_account_page())) {
        wp_enqueue_style('ridge-labs-woocommerce',
            $uri . '/assets/css/woocommerce.css',
            ['ridge-labs-main', 'woocommerce-general'], $ver);
    }
}
add_action('wp_enqueue_scripts', 'ridge_labs_assets');

// ── Strip WP's auto-generated <body> classes that could clash with Tailwind ───
function ridge_labs_body_classes($classes) {
    // Keep the classes we need for conditional styling, plus any WooCommerce
    // classes so WooCommerce's stylesheet targets the page correctly.
    $keep = ['logged-in', 'admin-bar', 'rtl'];
    return array_filter($classes, fn($c) =>
        in_array($c, $keep, true) || strpos($c, 'woocommerce') === 0
    );
}
add_filter('body_class', 'ridge_labs_body_classes');

// ── Remove wp-emoji and unused head items ─────────────────────────────────────
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

// ── Disable Gutenberg block CSS on non-block pages ───────────────────────────
function ridge_labs_remove_block_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'ridge_labs_remove_block_css', 100);

// ── Contact form handler ──────────────────────────────────────────────────────
function ridge_labs_handle_contact() {
    if (!isset($_POST['ridge_contact_nonce']) || !wp_verify_nonce($_POST['ridge_contact_nonce'], 'ridge_contact')) {
        wp_die('Security check failed.');
    }

    $name    = sanitize_text_field($_POST['name']    ?? '');
    $email   = sanitize_email($_POST['email']        ?? '');
    $company = sanitize_text_field($_POST['company'] ?? '');
    $subject = sanitize_text_field($_POST['subject'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        wp_safe_redirect(add_query_arg('contact', 'error', wp_get_referer()));
        exit;
    }

    $to      = get_option('admin_email');
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        "Reply-To: {$name} <{$email}>",
    ];
    $body = sprintf(
        '<p><strong>Name:</strong> %s</p><p><strong>Email:</strong> %s</p><p><strong>Company:</strong> %s</p><p><strong>Subject:</strong> %s</p><p><strong>Message:</strong><br>%s</p>',
        esc_html($name), esc_html($email), esc_html($company), esc_html($subject), nl2br(esc_html($message))
    );

    wp_mail($to, 'Ridge Labs Contact: ' . esc_html($subject), $body, $headers);

    wp_safe_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    exit;
}
add_action('admin_post_nopriv_ridge_contact', 'ridge_labs_handle_contact');
add_action('admin_post_ridge_contact', 'ridge_labs_handle_contact');

// ── Helper: get current page slug for nav active state ────────────────────────
function ridge_labs_current_slug(): string {
    if (is_front_page()) return '/';
    $obj = get_queried_object();
    if ($obj instanceof WP_Post) return '/' . $obj->post_name;
    return '/' . trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
}

// ── Trim checkout fields (block + classic) ────────────────────────────────────
// Keep only: email, first/last name, phone, country, city.
// Hide: company, address line 1 & 2, state/governorate, postcode.
function ridge_labs_hidden_checkout_fields() {
    return array( 'company', 'address_1', 'address_2', 'state', 'postcode' );
}

// Make them non-required and hidden in the default address fields...
function ridge_labs_hide_extra_fields_default($fields) {
    foreach (ridge_labs_hidden_checkout_fields() as $key) {
        if (isset($fields[$key])) {
            $fields[$key]['required'] = false;
            $fields[$key]['hidden']   = true;
        }
    }
    return $fields;
}
add_filter('woocommerce_default_address_fields', 'ridge_labs_hide_extra_fields_default');

// ...and override every country's locale so they stay hidden per-country
// (the block checkout resolves fields through the country locale).
function ridge_labs_hide_extra_fields_locale($locale) {
    foreach ($locale as $cc => $fields) {
        foreach (ridge_labs_hidden_checkout_fields() as $key) {
            $locale[$cc][$key]['required'] = false;
            $locale[$cc][$key]['hidden']   = true;
        }
    }
    return $locale;
}
add_filter('woocommerce_get_country_locale', 'ridge_labs_hide_extra_fields_locale');
