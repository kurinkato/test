<?php
/**
 * The main template file.
 *
 * @package Brightline
 */

get_header();
?>
<main class="container py-5">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'mb-5' ); ?>>
                <h1 class="display-6 fw-bold mb-3"><?php the_title(); ?></h1>
                <div class="section-copy"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e( 'Nothing found.', 'brightline' ); ?></p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
