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
<div class="row">
    <div class="col-lg-9">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <?php //require 'template-parts/front-page/pizza-promo.php ' ?>
                <?php
                $promo = new WP_Query(array(
                    'posts_per_page' => 6,
                    'post_type' => 'pizza',
                    'meta_key' => 'promo',
                    'meta_value' => 'yes'
                ));
                dro_alan_pizza_element_pizza($promo, 'Promotions', 'red');
                ?>
                <?php
                $creme_fraiche = new WP_Query(array(
                    'post_type' => 'pizza',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array('taxonomy' => 'type_pizza',
                            'field' => 'term_id',
                            'terms' => 198
                        )
                    ),
                    'orderby' => 'title',
                    'order' => 'ASC'
                ));
                dro_alan_pizza_element_pizza($creme_fraiche, 'Pizza à Base Crème Fraîche', '#F0F');
                ?>
                <?php
                $sauce_tomate = new WP_Query(array(
                    'post_type' => 'pizza',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'type_pizza',
                            'field' => 'term_id',
                            'terms' => 197
                        )
                    ),
                    'orderby' => 'title',
                    'order' => 'ASC'
                ));
                dro_alan_pizza_element_pizza($sauce_tomate, 'Pizza à Sauce Tomate', '#F0F');
                ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .col- -->
    <div class="col-lg-3">
        <?php get_sidebar('front-page'); ?>
    </div>
</div><!-- .row -->
<?php
get_footer();

