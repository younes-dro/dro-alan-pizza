<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dro_caterer
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <a href="<?php echo esc_url(__('https://wordpress.org/', 'dro-caterer')); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf(esc_html__('Proudly powered by %s', 'dro-caterer'), 'WordPress');
            ?>
        </a>
        <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(esc_html__('Theme: %1$s by %2$s.', 'dro-caterer'), 'dro-caterer', '<a href="http://www.dro.123.fr">caterer theme</a>');
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- .container-fluid-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
