<?php
/**
 * Template Name: Gallery
 */
get_header('gallery');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 content-area-wrapper">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
                ?>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .col-lg-9 -->
        
        <!--<div class="col-lg-12">-->
            <?php //get_sidebar('front-page'); ?>
        <!--</div>-->
    </div><!-- .row -->
</div><!-- ./ container-fluid -->
<?php
get_footer();

