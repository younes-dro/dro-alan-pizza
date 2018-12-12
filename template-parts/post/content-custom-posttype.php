<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dro_caterer
 */
?>
<?php
//var_dump(get_the_terms(get_the_ID(),'type_menu'));
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('row justify-content-center'); ?>>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-md-offset-2">
                <header class="entry-header">
                    <?php
                    if (is_singular()) :
                        the_title('<h1 class="entry-title">', '</h1>');
                    else :
                        the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                    endif;

                    if ('post' === get_post_type()) :
                        ?>
                        <div class="entry-meta">
                            <?php
                            dro_caterer_posted_on();
                            dro_caterer_posted_by();
                            ?>
                        </div><!-- .entry-meta -->
                    <?php endif; ?>
                    <?php
                        // If the men has a price
                        $price = get_post_meta(get_the_ID());
                        if (!empty($price['price_apres_repas'][0])):
                            echo '<span class="price-type-menu">' . $price['price_apres_repas'][0] . '€</span>';
                        endif; 
                        if (!empty($price['price_chiken_wings'][0])):
                            echo '<span class="price-type-menu">' . $price['price_chiken_wings'][0] . '€</span>';
                        endif;
                        // Or , we retrive the global type menu price
//                        var_dump(get_ter)
                    ?>
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <?php
                    the_excerpt(sprintf(
                                    wp_kses(
                                            /* translators: %s: Name of current post. Only visible to screen readers */
                                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'dro-caterer'), array(
                        'span' => array(
                            'class' => array(),
                        ),
                                            )
                                    ), get_the_title()
                    ));

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'dro-caterer'),
                        'after' => '</div>',
                    ));
                    ?>
                </div><!-- .entry-content -->
            </div>
            <div class="col-12 col-md-6">
                <?php dro_caterer_post_thumbnail(); ?>
                <?php
                /**
                 * get the secondry image if exists
                 */
                if (class_exists('MultiPostThumbnails')) :
                    $bg = MultiPostThumbnails::get_post_thumbnail_url(
                                    'menu', 'secondary-image-type-menu', get_the_ID()
                    );
                    if ($bg !== false) {
                        echo '<div class="post-thumbnail"><img src="' . $bg . '"></div>';
                    }
                endif;
                ?>
            </div>


            <footer class="entry-footer post-thumbnail">
            </footer><!-- .entry-footer -->
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
