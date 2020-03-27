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
            <h5 class="horaire-overture">horaire d'ouverture de pizzeria sur la ville de vauréal : </h5>
            <h1>LUNDI AU VENDREDI DE 18H00 A 23H00</h1>
            <!-- <h3>VENDREDI DE 18H00 A 23H00</h3> -->
            <h3>SAMEDI ET DIMANCHE DE 11H45 A 15H00 / DE 18H00 A 23H00</h3>
        </div>
        <div class="col-12 col-md-2"></div>
        <div class="col-12 col-md-4 zone-livraison">
            <h1>Nos zones de livraison :</h1>
            <h5 class="text-livraion">Livraison gratuite à domicile, au bureau sur Vauréal et ses régions</h5>
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
                        printf(esc_html__('%1$s by %2$s.', 'dro-alan-pizza'), 'Alan Pizza Theme ', '<a  title = "développeur web freelance maroc" href="https://github.com/younes-dro">Younés DRO</a>');
                        ?>
                    </p>
                    <h5 class="paiement-acceptee">Les paiements acceptés</h5>
                    <p class="paiement-acceptee">payer votre pizza à vauréal par : Espèces, Ticket restaurant et Chèque-déjeuner. 
                        Les CB sont acceptées en livraison (15 € mini) sur commande.</p>
                </div><!-- .site-info -->
            </div><!-- ./col-12-->
        </div><!-- ./row -->
    </div><!-- ./container-fluid -->
</footer><!-- #colophon -->

</div><!-- #page -->
<a href="#" class="scrollup"><i class="fa fa-arrow-up"></i></a>
<?php wp_footer(); ?>
<style>
    #flashNotice{
        position: fixed;
        height: auto;
        background-color: rgba(255, 255, 255, 0.8);
        color: rgb(0, 0, 0);
        z-index: 999999999;
        margin: 0px auto;
        top: 0px;
        right: 0;
        width: 100%;
        height: 100%;
        display: none;
        color: #fff;
    }
    .noticeContent{
        background-color: hsla(8, 61%, 15%);
        width: 90%;
        margin: 0 auto;
        text-align: center;
        padding: 20px;
    }
    .noticeContent h1{
        color: #fff;
        font-size: 1.3rem;
    }
    .closeFlash{
        float: right;
        width: 50px;
        height: 50px;
        color: #edeaea;
        margin-right: 0px;
        margin-top: 0;
        font-size: 20px;
        line-height: 50px;
        text-align: center;
        cursor: pointer;
        border: 1px solid #edeaea;
        margin-bottom: 10px;
    }
    @media screen and (min-width:992px){
        .noticeContent{ width:  50%}
        .noticeContent h1{font-size: 2rem;}

    }
</style>
<div id="flashNotice">
    <div class="noticeContent">
        <span class="closeFlash fa fa-close"></span>
        <p> <span class="fa fa-heart"> </span> <h2>Fermer pendant la période du confinement </h2> </p>
    </div>
</div>

</body>
</html>
