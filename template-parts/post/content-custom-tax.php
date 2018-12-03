<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dro_caterer
 */
?>
<article  id="post-<?php the_ID(); ?>" <?php post_class(array('col-12 col-md-4')); ?>>
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
            // Price for custom post type Apres Repas
            if ($wp_query->queried_object->taxonomy == 'type_apres_repas'):
                $price_apres_repas = get_post_meta(get_the_ID());
//                var_dump($price_apres_repas['price_apres_repas']);
                if(!empty($price_apres_repas['price_apres_repas'][0])):
                    echo '<span class="price-type-menu">'.$price_apres_repas['price_apres_repas'][0].'€</span>';
                endif;
            endif;
            ?>
    </header><!-- .entry-header -->

    <?php dro_caterer_post_thumbnail(); ?>

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

    <footer class="entry-footer">
        <?php
        /**
         * get the secondry image if exists
         */
        if (class_exists('MultiPostThumbnails')) :
            $bg = MultiPostThumbnails::get_post_thumbnail_url(
                            'menu', 'secondary-image-type-menu'
            );
            if ($bg !== false) {
                echo '<img src="'.$bg.'">';
            }
        endif;
        ?>
        <?php //dro_caterer_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
