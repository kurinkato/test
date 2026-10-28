<?php
/**
 * The footer template.
 *
 * @package Brightline
 */
?>
<footer class="site-footer">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">
        <span>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span>
        <span><?php esc_html_e( 'Designed for focused teams.', 'brightline' ); ?></span>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
