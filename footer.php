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
<div class="container-fluid horaire-zone-livraison-wrapper">
    <div class="row">
        <div class="col-12 col-md-1"></div>
        <div class="col-12 col-md-4  horaire">
            <h1>OUVERT 7J/7 DE 11H00 A 14H30 / DE 18H A 23H00</h1>
            <h3>SAMEDI ET DIMANCHE DE 11H00 A 15H00 / DE 18H00 A 23H30</h3>
        </div>
        <div class="col-12 col-md-2"></div>
        <div class="col-12 col-md-4 zone-livraison">
            <h1>Nos zones de livraison :</h1>
            <p>
                <span>Cergy st Christophe</span><span> Cergy Le Haut</span>
                <span>Vauréal</span> <span>Jouy Le Moutier</span> 
                <span>Boisement</span>
                <span>Menucourt</span> <span>Maurecourt</span>
                <span>Courdimanche</span>
            </p>
        </div>
        <div class="col-12 col-md-1"></div>
    </div>
</div>
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
                        <p class="signature">Alan Pizza investit dans les meilleures produits et achète ses produits de base de chez les meilleurs fournisseurs, afin de vous garantir la qualité, et la fraicheur des Pizzas</p>
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
                    <p>
                        <?php
                        /* translators: 1: Theme name, 2: Theme author. */
                        printf(esc_html__('%1$s by %2$s.', 'dro-caterer'), 'Alan Pizza ', '<a  title = "" href="https://github.com/younes-dro/dro-caterer">caterer theme</a>');
                        ?>
                    </p>
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
