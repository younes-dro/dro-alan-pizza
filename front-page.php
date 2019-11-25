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
get_header('front-page');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 content-area-wrapper">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php
                    $fromagio = new WP_Query(array('pagename'=>'la-fromagio'));
                    $args = array(
                        'query' => $fromagio,
                        'bg_class' => ''
                    );
                    dro_alan_pizza_fromagio($args);
                    ?>
                    <?php
                    $creme_fraiche = new WP_Query(array(
                        'post_type'         => 'pizza',
                        'posts_per_page'    => 4,
                        'orderby'           => 'title',
                        'order'             => 'ASC',
                        'tax_query' => array(
                            array('taxonomy' => 'type_pizza',
                                'field' => 'term_id',
                                'terms' =>  5 //198 // 6 //198
                            )
                        ),
                    ));
                    $args = array(
                        'query'     => $creme_fraiche,
                        'title'     => 'Pizza à Base Crème Fraîche',
                        'class'     => 'big-green',
                        'promo'     => '',
                        'come_from' => '',
                        'term_id'   => 5, //198, //6,  // 198
                        'bg_class'  => 'element-pizza-banner-creme'
                    );
                    dro_alan_pizza_element_pizza($args);
                    ?>
                    <?php
                    $sauce_tomate = new WP_Query(array(
                        'post_type'         => 'pizza',
                        'posts_per_page'    => 4,
                        'orderby'           => 'title',
                        'order'             => 'ASC',                        
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'type_pizza',
                                'field' => 'term_id',
                                'terms' => 4 //197 //5 //197
                            )
                        ),
                    ));
                    $args = array(
                        'query' => $sauce_tomate,
                        'title' => 'Pizza à Sauce Tomate',
                        'class' => 'big-green',
                        'promo' => '',
                        'come_from' => '',
                        'term_id' => 4, // 197, // 5
                        'bg_class' => 'element-pizza-banner-sauce'
                    );                    
                    dro_alan_pizza_element_pizza($args);
                    ?>
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

