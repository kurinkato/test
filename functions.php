<?php
/**
 * Brightline theme functions.
 */

function brightline_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus(
        array(
            'primary' => __( 'Primary menu', 'brightline' ),
        )
    );
}
add_action( 'after_setup_theme', 'brightline_setup' );

function brightline_document_title_parts( $title ) {
    if ( is_front_page() ) {
        $title['title'] = __( 'A clearer way to move your best ideas forward', 'brightline' );
    }

    return $title;
}
add_filter( 'document_title_parts', 'brightline_document_title_parts' );

function brightline_meta_description() {
    if ( defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) ) {
        return;
    }

    if ( is_front_page() ) {
        $description = __( 'Brightline brings your team, projects, and priorities together in one simple workspace so you can spend less time organizing and more time creating.', 'brightline' );
    } elseif ( is_singular() ) {
        $description = get_the_excerpt();
    } else {
        $description = get_bloginfo( 'description' );
    }

    $description = wp_strip_all_tags( $description );
    if ( '' === $description ) {
        return;
    }
    ?>
    <meta name="description" content="<?php echo esc_attr( wp_trim_words( $description, 30, '...' ) ); ?>">
    <?php
}
add_action( 'wp_head', 'brightline_meta_description', 1 );

function brightline_social_meta() {
    if ( defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) ) {
        return;
    }

    $title = wp_get_document_title();
    $url   = is_front_page() ? home_url( '/' ) : ( is_singular() ? get_permalink() : home_url( '/' ) );
    $description = is_front_page()
        ? __( 'Brightline brings your team, projects, and priorities together in one simple workspace so you can spend less time organizing and more time creating.', 'brightline' )
        : ( is_singular() ? get_the_excerpt() : get_bloginfo( 'description' ) );
    $description = wp_trim_words( wp_strip_all_tags( $description ), 30, '...' );
    ?>
    <meta property="og:type" content="<?php echo esc_attr( is_singular() ? 'article' : 'website' ); ?>">
    <meta property="og:title" content="<?php echo esc_attr( $title ); ?>">
    <meta property="og:description" content="<?php echo esc_attr( $description ); ?>">
    <meta property="og:url" content="<?php echo esc_url( $url ); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo esc_attr( $title ); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr( $description ); ?>">
    <?php
}
add_action( 'wp_head', 'brightline_social_meta', 1 );

function brightline_structured_data() {
    if ( defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || ! is_front_page() ) {
        return;
    }

    $schema = array(
        '@context'    => 'https://schema.org',
        '@type'       => 'WebSite',
        'name'        => get_bloginfo( 'name' ),
        'description' => __( 'A clear workspace for teams, projects, and priorities.', 'brightline' ),
        'url'         => home_url( '/' ),
    );
    ?>
    <script type="application/ld+json"><?php echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES ); ?></script>
    <?php
}
add_action( 'wp_head', 'brightline_structured_data', 1 );

function brightline_primary_menu_fallback() {
    ?>
    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
        <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/#properties' ) ); ?>"><?php esc_html_e( 'Properties', 'brightline' ); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/#reviews' ) ); ?>"><?php esc_html_e( 'Reviews', 'brightline' ); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/#features' ) ); ?>"><?php esc_html_e( 'Features', 'brightline' ); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/#get-started' ) ); ?>"><?php esc_html_e( 'Get started', 'brightline' ); ?></a></li>
    </ul>
    <?php
}

function brightline_enqueue_assets() {
    wp_enqueue_style(
        'brightline-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );
    wp_enqueue_style(
        'font-awesome',
        'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css',
        array(),
        '6.5.2'
    );
    wp_enqueue_style(
        'brightline-style',
        get_stylesheet_uri(),
        array( 'bootstrap', 'font-awesome' ),
        '1.1.0'
    );
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'brightline_enqueue_assets' );
