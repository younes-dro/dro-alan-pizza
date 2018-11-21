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

<footer id="colophon" class="site-footer" style=" background-color: #264d20; min-height: 150px; text-align:  center;padding: 2rem">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-12">
                        <img style="max-width: 150px" src="<?php echo CHILD_THEME_URI ?>/images//alan-pizza-logo-retina.png">
                    </div>
                    <div class="col-12">
                        <p style="color: #ccc">Alan Pizza investit dans les meilleures produits et achète ses produits de base de chez les meilleurs fournisseurs, afin de vous garantir la qualité, et la fraicheur des Pizzas</p>
                    </div>
                </div>
            </div><!-- ./col-12 col-md-4 -->
            <div class="col-12 col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2616.3155451418256!2d2.0273116501703563!3d49.02360529691358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f4ad329958b9%3A0x3da8e1beaa936543!2sAlan+Pizza+Sarl!5e0!3m2!1sfr!2sma!4v1542559011382" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>            
            </div>

        </div><!-- ./row justify-content-center -->
        <div class="row">
            <div class="col-12">
                <div class="site-info">
                    <?php
                    /* translators: 1: Theme name, 2: Theme author. */
                    printf(esc_html__('Theme: %1$s by %2$s.', 'dro-caterer'), 'Alan Pizza ', '<a href="http://www.dro.123.fr">caterer theme</a>');
                    ?>
                </div><!-- .site-info -->
            </div><!-- ./col-12-->
        </div><!-- ./row -->
    </div><!-- ./container-fluid -->
</footer><!-- #colophon -->

</div><!-- #page -->
<a href="#" class="scrollup"><i class="fa fa-arrow-up"></i></a>
<?php wp_footer(); ?>

</body>
</html>
