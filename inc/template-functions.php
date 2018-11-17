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
                                        <span class="fa fa-male">&nbsp;</span>
                                        <span class="price-promo"><?php echo $meta['price_senior'][0] ?>€</span>
                                        <span class="price" ><?php echo $meta['price_senior_promo'][0] ?>€</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-group">&nbsp;</span>
                                        <span class="price-promo"><?php echo $meta['price_famille'][0] ?>€</span>
                                        <span class="price" ><?php echo $meta['price_famille_promo'][0] ?>€</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-child">&nbsp;</span>
                                        <span class="price-promo"><?php echo $meta['price_junior'][0] ?>€</span>
                                        <span class="price" ><?php echo $meta['price_junior_promo'][0] ?>€</span>
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
                                        <a  tel="00330670794050"><spanclass="text-success fa fa-phone-square">&nbsp;Appeler pour commander</span></a>

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

