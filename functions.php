<?php
// Theme setup
function bakery_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'bakery-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'bakery_setup' );

// Enqueue styles and scripts
function bakery_assets() {
    $uri = get_template_directory_uri();
    $ver = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'bakery-base', $uri . '/assets/css/base.css', array(), $ver );
    wp_enqueue_style( 'bakery-components', $uri . '/assets/css/components.css', array( 'bakery-base' ), $ver );
    wp_enqueue_style( 'bakery-responsive', $uri . '/assets/css/responsive.css', array( 'bakery-components' ), $ver );

    // Load JS in the footer and defer it so it doesn't block rendering
    wp_enqueue_script( 'bakery-menu', $uri . '/assets/js/menu.js', array(), $ver, array( 'in_footer' => true, 'strategy' => 'defer' ) );
    if ( is_front_page() ) {
    wp_enqueue_script( 'bakery-faq', $uri . '/assets/js/faq.js', array(), $ver, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
}
add_action( 'wp_enqueue_scripts', 'bakery_assets' );

// Add meta description for SEO
function bakery_meta_description() {
    if ( is_front_page() ) {
        $description = 'Family-owned local bakery serving fresh artisan bread, croissants, cakes and cookie boxes for over 20 years. Order online or call us today.';
    } elseif ( is_page( 'contact-us' ) ) {
        $description = 'Contact our local bakery to place a custom cake or bulk order, ask a question, or find our address and opening hours.';
    } else {
        $description = get_bloginfo( 'description' );
    }

    if ( $description ) {
        echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'bakery_meta_description', 1 );