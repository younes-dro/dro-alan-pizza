<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dro_caterer
 */
get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 content-area-wrapper">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php
                    $promo = new WP_Query(array(
                        'posts_per_page' => 6,
                        'post_type' => 'pizza',
                        'meta_key' => 'promo',
                        'meta_value' => 'yes'
                    ));
                    $args = array(
                        'query' => $promo,
                        'title' => 'Nos Pizzas en Promo',
                        'class' => 'big-red',
                        'promo' => 'promo',
                        'come_from' => '',
                        'term_id' => '',
                        'bg_class' => 'element-pizza-banner-promo'
                    );
                    dro_alan_pizza_element_pizza($args);
                    ?>
                    <?php
                    $creme_fraiche = new WP_Query(array(
                        'post_type' => 'pizza',
                        'posts_per_page' => 3,
                        'tax_query' => array(
                            array('taxonomy' => 'type_pizza',
                                'field' => 'term_id',
                                'terms' => 198 //6 //198
                            )
                        ),
                        'orderby' => 'title',
                        'order' => 'ASC'
                    ));
                    $args = array(
                        'query' => $creme_fraiche,
                        'title' => 'Pizza à Base Crème Fraîche',
                        'class' => 'big-green',
                        'promo' => '',
                        'come_from' => '',
                        'term_id' =>  198 ,//5 // 198
                        'bg_class' => 'element-pizza-banner-creme'
                    );
                    dro_alan_pizza_element_pizza($args);
                    ?>
                    <?php
                    $sauce_tomate = new WP_Query(array(
                        'post_type' => 'pizza',
                        'posts_per_page' => 3,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'type_pizza',
                                'field' => 'term_id',
                                'terms' => 197 // 6
                            )
                        ),
                        'orderby' => 'title',
                        'order' => 'ASC'
                    ));
                    $args = array(
                        'query' => $sauce_tomate,
                        'title' => 'Pizza à Sauce Tomate',
                        'class' => 'big-green',
                        'promo' => '',
                        'come_from' => '',
                        'term_id' => 197, // 6
                        'bg_class' => 'element-pizza-banner-sauce'
                    );                    
                    dro_alan_pizza_element_pizza($args);
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
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .col-lg-9 -->
        
        <!--<div class="col-lg-12">-->
            <?php //get_sidebar('front-page'); ?>
        <!--</div>-->
    </div><!-- .row -->
</div><!-- ./ container-fluid -->
<?php
get_footer();

