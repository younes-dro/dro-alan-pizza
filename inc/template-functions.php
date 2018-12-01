<?php
function get_infos_options($field){
    $dro_alan_pizza_infos_options = get_option('dro_alan_pizza_infos_options');
    
    return $dro_alan_pizza_infos_options[$field];
}
function get_senior_mega_price_options() {
    $dro_alan_pizza_options = get_option('dro_alan_pizza_options');
    ?>
    <div class="container senior_mega_wrapper">
        <div class="row">
            <div class="col-6 col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <h1>SENIOR</h1>
                        <div class="row">
                            <div class="col-12">
                                <h4>à emporter<span class="price">
                                        <?php echo $dro_alan_pizza_options['prix_senior_emporter']; ?>€</span></h4>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12 ">
                                <h4>Livraison<span class="price">
                                        <?php echo $dro_alan_pizza_options['prix_senior_livraison']; ?>€</span></h4>
                            </div>
                        </div>                                    
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <h1>MEGA</h1>
                        <div class="row">
                            <div class="col-12">
                                <h4>à emporter<span class="price">
                                        <?php echo $dro_alan_pizza_options['prix_mega_emporter']; ?>€</span></h4>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12 ">
                                <h4>Livraison<span class="price">
                                        <?php echo $dro_alan_pizza_options['prix_mega_livraison']; ?>€</span></h4>
                            </div>
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

if (!function_exists('dro_alan_pizza_fromagio')) {

    function dro_alan_pizza_fromagio($args) {
        extract($args);
//        var_dump($query->have_posts());
        if ($query->have_posts()):
            ?>
            <div class="break-line"></div>
            <div class="element-pizza-wrapper  la-fromagio-wrapper">
<!--                <div class="element-pizza-banner <?php echo $bg_class ?>"></div>
                <div class="element-pizza-overlay"></div>-->
                <div class="container-fluid element-pizza">


                    <?php
                    while ($query->have_posts()) {
                        $fromagio_price = get_option('dro_alan_pizza_options');
                        $query->the_post();
                        ?>
                        <div class="row">
                            <?php
                            if (class_exists('MultiPostThumbnails')) :
                                $bg = MultiPostThumbnails::get_post_thumbnail_url(
                                                'page', 'secondary-image'
                                );
                            endif;
                            ?>
                            <div class="col-12 col-lg-6 bg_fromagio" style="background-image: url('<?php echo $bg ?>')">
                                <?php
                                the_post_thumbnail();
                                ?>
                            </div>
                            <div class="col-12 col-lg-6 fromagio-content">
                                <span class="fromagio_price"><?php echo $fromagio_price['prix_fromagio'] ?>€</span>
                                <?php the_content() ?>
                <!--                                 <a  href="tel:+33670794050"><span class="modal-icon-phone"><i class="fa fa-phone-square"></i></span><span class="call-alanpizza">Appeler pour commander</span>
                                     <hr style="visibility: hidden; clear: both">
                                 </a>-->
                            </div>
                        </div><!-- /.row -->
                        <?php
                    }
                    ?>

                </div><!-- .container / .element-pizza -->
            </div><!-- element-pizza wrapper -->
            <?php
        endif;
        wp_reset_postdata();
    }

}

if (!function_exists('dro_alan_pizza_element_pizza')) {

    /**
     * Generate a Pizza details
     */
    function dro_alan_pizza_element_pizza($args) {
        extract($args);
        if ($query->have_posts()) {
            ?>
            <div class="break-line"></div>
            <div class="element-pizza-wrapper">
                <div class="element-pizza-banner <?php echo $bg_class ?>"></div>
                <div class="element-pizza-overlay"></div>
                <div class="container-fluid element-pizza">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-header">
                                <h1>
                                    <span class="<?php echo $class ?>"><?php echo $title ?></span>
                                    <?php
                                    if (is_front_page()) {
                                        echo '<a href="' . get_term_link($term_id) . '" class="see-all">Voir tout <i class="ion-ios-arrow-forward"></i></a>';
                                    }
                                    ?>
                                </h1>
                            </div>
                        </div>
                    </div><!-- .row -->
                    <div class="row justify-content-center">
                        <?php while ($query->have_posts()) { ?>
                            <article id="post-<?php the_ID(); ?>"  <?php post_class(array('col-xs-12 col-sm-6 col-md-3 ')); ?>>
                                <?php
                                $query->the_post();
                                $meta = get_post_meta(get_the_ID(), '');
                                ?>

                                <a class="row details-element-pizza" href="#<?php echo basename(get_permalink()) ?>" data-toggle="modal" >
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="pizza-title"><?php the_title() ?></span>
                                            </div>
                                        </div><!-- /.row -->
                                        <div class="row">
                                            <div class="col-12 pizza-image">
                                                <?php the_post_thumbnail('', array('class' => 'img-responsive  img-thumbnail img-circle')) ?>
                                            </div><!-- .col-12 /. image-pizza-->
                                            <div class="col-12">
                                                <button class=" btn-details btn btn-dark btn-light btn-sm"><i class="fa fa-plus">&nbsp;</i>Détails </button>
                                            </div><!-- ./ details -->                                            
                                        </div><!-- ./row-->
                                    </div><!-- ./ col-12 -->
                                </a> <!--  / row / . details-element-pizza -->
                                <!-- Modal content  -->
                                <div class="modal fade" style="z-index: 123999942222" id="<?php echo basename(get_permalink()) ?>" tabindex="-1"  aria-labelledby="exampleModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="background-color: #303030;">
                                            <div class="modal-header">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4 class="modal-title" id="exampleModalLabel">
                                                                <?php the_title() ?>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a  href="tel:<?php echo get_infos_options('tele_1')?>">
                                                                <span class="modal-icon-phone"><i class="fa fa-phone-square"></i></span>
                                                                <span class="call-alanpizza"><?php echo get_infos_options('tele_1')?></span>
                                                            </a>
                                                        </div>
                                                        <div class="col-12">
                                                            <a  href="tel:<?php echo get_infos_options('tele_2')?>">
                                                                <span class="modal-icon-phone"><i class="fa fa-phone-square"></i></span>
                                                                <span class="call-alanpizza"><?php echo get_infos_options('tele_2')?></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Modal content -->                                    
                            </article>
                        <?php }// End while promo have_posts()         ?>
                    </div><!-- /.row Promo -->
                </div><!-- .container / .element-pizza -->
            </div><!-- element-pizza wrapper -->

            <?php
        } // End if promo have_posts()
        wp_reset_postdata();
    }

}
/**
 * To remove 
 */
if (!function_exists('dro_alan_pizza_price')) {

    function dro_alan_pizza_price($price, $promo, $icon, $inPromo = '') {

        $html_output = '<div class="row">';
        $html_output .='<div class="col-3"></div>';
        $html_output .= '<div class="col-2"><span class="fa fa-' . $icon . '">&nbsp;</span></div>';

        if (!empty($price) && isset($price) && !empty($promo) && isset($promo)) {
            $html_output .= '<div class="col-2"><del><span>' . $price . '€</span></del></div>';
            $html_output .= '<div class="col-2"><span class="price">' . $promo . '€</span></div>';
        } else
        if (empty($promo) && !empty($price)) {
            $html_output .= '<div class="col-2"><span class="price">' . $price . '€</span></div>';
        } else
        if (empty($promo) && empty($price)) {
            return '';
        }
        $html_output .='<div class="col-3"></div>';
        $html_output .='</div>';

        return $html_output;
    }

}

function get_the_type_menu_price($term_id) {

    $taxonmomy_price = get_option("taxonomy_" . $term_id);
    if (is_null($taxonmomy_price['type_menu_price']))
        return '';

    return '<span class="price-type-menu">' . $taxonmomy_price['type_menu_price'] . '€</span>';
}

/**
 * Not used for now
 * @param type $price
 * @return string
 */
function get_senior_mega_price($price = '') {
    if (isset($price) && !emty($price) && trim($price) != '') {
        return $price . '€';
    }
    return '';
}
