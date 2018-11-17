<?php
$sauce_tomate = new WP_Query(array(
    'post_type' => 'pizza',
    'posts_per_page' => 3,
    'tax_query' => array(
        array(
            'taxonomy' => 'type_pizza',
            'field' => 'term_id',
            'terms' => 2
        )
    ),
    'orderby' => 'title',
    'order' => 'ASC'
        ));
if ($sauce_tomate->have_posts()) {
    ?>
    <div class="row">
        <div class="page-header"><h1><span class="red">Pizza à Base Sacue Tomate</span></h1></div>
        <?php
        while ($sauce_tomate->have_posts()) {
            ?>
            <div class="col-xs-12 col-sm-6 col-md-4 element-pizza" >
                <?php
                $sauce_tomate->the_post();
                $meta = get_post_meta(get_the_ID(), '');
                ?>
                <a href="#<?php echo basename(get_permalink()) ?>" data-toggle="modal" >
                    <div class="col-xs-4">
                        <?php the_post_thumbnail('', array('class' => 'img-responsive  img-thumbnail img-circle')) ?>

                    </div>

                    <div class="col-xs-8" >
                        <div class="row">
                            <div class="col-xs-12 pizza-title">
                                <?php the_title() ?>
                                <span class="ion ion-plus-circled"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <span class="fa fa-male">&nbsp;</span>
                                <span class="price-promo"><?php echo $meta['price_senior'][0] ?>€</span>
                                <span class="price" ><?php echo $meta['price_senior_promo'][0] ?>€</span>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <span class="fa fa-group">&nbsp;</span>
                                <span class="price-promo"><?php echo $meta['price_famille'][0] ?>€</span>
                                <span class="price" ><?php echo $meta['price_famille_promo'][0] ?>€</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <span class="fa fa-child">&nbsp;</span>
                                <span class="price-promo"><?php echo $meta['price_junior'][0] ?>€</span>
                                <span class="price" ><?php echo $meta['price_junior_promo'][0] ?>€</span>
                            </div>

                        </div>
                    </div>
                </a> 
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
            </div><!-- ./ element-pizza -->
            <?php
        }// End while promo have_posts()
        ?>
    </div><!-- /.row Promo -->
    <?php
} // End if promo have_posts()
wp_reset_postdata();
