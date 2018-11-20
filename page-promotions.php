<?php
/* 
 * Template Name: Page Promotions
 */
get_header('page-promo');
?>
<div class="row">
    <div class="col-lg-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
                $promo = new WP_Query(array(
                    'post_type' => 'pizza',
                    'meta_key' => 'promo',
                    'meta_value' => 'yes'
                ));
                dro_alan_pizza_element_pizza($promo, 'Nos Pizzas en Promo', 'red' , 'promo' , 'page-promo');
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
    </div>
</div>

<?php
get_sidebar();
get_footer();
