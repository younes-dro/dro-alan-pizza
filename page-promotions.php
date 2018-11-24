<?php
/*
 * Template Name: Page Promotions
 */
get_header('page-promo');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 content-area-wrapper">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <?php
                    $promo = new WP_Query(array(
                        'post_type' => 'pizza',
                        'meta_key' => 'promo',
                        'meta_value' => 'yes'
                    ));
                    $args = array(
                        'query' => $promo,
                        'title' => 'Nos Pizzas en Promo',
                        'class' => 'big-red',
                        'promo' => 'promo',
                        'come_from' => 'page-promo',
                        'term_id' => '',
                        'bg_class' => ''
                    );
                    dro_alan_pizza_element_pizza($args);
                    ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>
</div>
<?php
get_footer();
