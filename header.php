<?php
/**
 * The header template.
 *
 * @package Brightline
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <nav class="navbar navbar-light navbar-expand-lg sticky-top" aria-label="<?php esc_attr_e( 'Main navigation', 'brightline' ); ?>">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <span class="brand-mark" aria-hidden="true">B</span>
                <?php bloginfo( 'name' ); ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavigation" aria-controls="primaryNavigation" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'brightline' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="primaryNavigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav ms-auto align-items-lg-center gap-lg-3',
                        'fallback_cb'    => 'brightline_primary_menu_fallback',
                    )
                );
                ?>
            </div>
        </div>
    </nav>
</header>
