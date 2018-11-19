<?php
if (!function_exists('dro_alan_pizza_element_pizza')) {

    /**
     * Generate a Pizza details
     */
    function dro_alan_pizza_element_pizza($query, $title, $colors) {

        if ($query->have_posts()) {
            ?>
            <div class="container-fluid element-pizza">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header"><h1><span class="<?php echo $colors ?>"><?php echo $title ?></span></h1></div>
                    </div>
                </div><!-- .row -->
                <div class="row">
                    <?php while ($query->have_posts()) { ?>
                        <article id="post-<?php the_ID(); ?>"  <?php post_class(array('col-xs-12 col-sm-6 col-md-4 ')); ?>>
                            <?php
                            $query->the_post();
                            $meta = get_post_meta(get_the_ID(), '');
                            ?>

                            <a class="row details-element-pizza" href="#<?php echo basename(get_permalink()) ?>" data-toggle="modal" >
                                <div class="col-12 pizza-image">
                                    <?php the_post_thumbnail('', array('class' => 'img-responsive  img-thumbnail img-circle')) ?>
                                </div><!-- .col-12 /. image-pizza-->

                                <div class="col-12" >
                                    <div class="row ">
                                        <div class="col-12">
                                            <span class="pizza-title"><?php the_title() ?></span>
                                            <span class="ion ion-plus-circled"></span>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            <?php echo dro_alan_pizza_price($meta['price_senior'][0], $meta['price_senior_promo'][0], 'male', $meta['promo'][0]) ?>
                                        </div>
                                        <div class="col-12">
                                            <?php echo dro_alan_pizza_price($meta['price_famille'][0], $meta['price_famille_promo'][0], 'group') ?>
                                        </div>
                                        <div class="col-12">
                                            <?php echo dro_alan_pizza_price($meta['price_junior'][0], $meta['price_junior_promo'][0], 'child') ?>
                                        </div>
                                    </div>
                                </div>
                            </a> <!--  / row / . details-element-pizza -->
                            <!-- Modal content  -->
                            <div class="modal fade" style="z-index: 123999942222" id="<?php echo basename(get_permalink()) ?>" tabindex="-1"  aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h4 class="modal-title" id="exampleModalLabel"><?php the_title() ?> </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <?php the_post_thumbnail('', array('class' => 'img-responsive  img-thumbnail img-circle')) ?>
                                                </div>
                                                <div class="col-12">
                                                    <?php the_excerpt() ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a  href="tel:+33670794050"><span class="text-success fa fa-phone-square">&nbsp;Appeler pour commander</span></a>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Modal content -->                                    
                        </article>
                    <?php }// End while promo have_posts()  ?>
                </div><!-- /.row Promo -->
            </div><!-- .container / .element-pizza -->
            <?php
        } // End if promo have_posts()
        wp_reset_postdata();
    }

}
if (!function_exists('dro_alan_pizza_price')) {

    function dro_alan_pizza_price($price, $promo, $icon, $inPromo = '') {
        $html_output = '<span class="fa fa-' . $icon . '">&nbsp;</span>';

        if (!empty($price) && isset($price) && !empty($promo) && isset($promo)) {
            $html_output .= '<span class="price-promo">' . $price . '€</span>';
            $html_output .= '<span class="price">' . $promo . '€</span>';
        } else
        if (empty($promo) && !empty($price)) {
            $html_output .= '<span class="price">' . $price . '€</span>';
        } else
        if (empty($promo) && empty($price)) {
            return '';
        }


        return $html_output;
    }

}

function get_the_type_menu_price($term_id) {

    $taxonmomy_price = get_option("taxonomy_" . $term_id);
    if (is_null($taxonmomy_price['type_menu_price'])) return '';
    
    return '<span class="price-type-menu">'.$taxonmomy_price['type_menu_price'].'</span>';
}
