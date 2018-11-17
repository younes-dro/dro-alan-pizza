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

<footer id="colophon" class="site-footer" style="border:1px solid #F00">
    <div class="row">

    </div>
    <div class="row">
        <div class="col-12">
        <div class="site-info">
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf(esc_html__('Theme: %1$s by %2$s.', 'dro-caterer'), 'dro-caterer', '<a href="http://www.dro.123.fr">caterer theme</a>');
            ?>
        </div><!-- .site-info -->
        </div><!-- ./col-12-->
    </div><!-- ./row -->
</footer><!-- #colophon -->
</div><!-- .container-fluid-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
