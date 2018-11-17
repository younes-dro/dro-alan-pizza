<?php
$promo = new WP_Query(array(
    'posts_per_page' => 6,
    'post_type' => 'pizza',
    'meta_key' => 'promo',
    'meta_value' => 'yes'
        ));
// if one promo filed is 
//dro_alanpizza_has_promo();
//var_dump($promo);

if ($promo->have_posts()) {
    ?>
<div class="container-fluid element-pizza">
    <div class="row">
        <div class="col-12">
            <div class="page-header"><h1><span class="red">Promotions</span></h1></div>
        </div>
    </div><!-- .row -->
    <div class="row">
        <?php while ($promo->have_posts()) { ?>
            <article id="post-<?php the_ID(); ?>"  <?php post_class(array('col-xs-12 col-sm-6 col-md-4 ')); ?>>
                    <?php
                    $promo->the_post();
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
                        <div class="modal-dialog" style="text-align: center" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel"><?php the_title() ?> </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <?php the_post_thumbnail(array(100, 100), array('class' => 'img-responsive  img-thumbnail img-circle')) ?>
                                        </div>
                                        <div class="col-xs-12 excerpt">

                                            <?php the_excerpt() ?>

                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <span style="" class=" text-success fa fa-phone-square">&nbsp;Appeler pour commander</span>

                                </div>
                            </div>
                        </div>
                    </div><!-- End Modal content -->                                    
            </article>
            <?php }// End while promo have_posts() ?>
    </div><!-- /.row Promo -->
    
</div><!-- .container / .element-pizza -->
    <?php
} // End if promo have_posts()
wp_reset_postdata();
