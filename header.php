<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header">
    <div class="container header-inner">
        <a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php bloginfo( 'name' ); ?>
        </a>

        <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">
            Menu
        </button>

        <nav class="site-nav" aria-label="Primary">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ) );
            ?>
        </nav>

        <a class="btn" href="tel:+10000000000">Call to order</a>
    </div>
</header>