<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dro_caterer
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row justify-content-center'); ?>>
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
    </div>


    <footer class="entry-footer">
<?php dro_caterer_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->