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
}
add_action( 'wp_enqueue_scripts', 'bakery_assets' );