<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dro_caterer
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
                    
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php

                                echo  single_cat_title('<h1 class="page-title">');
                                echo get_the_type_menu_price($wp_query->queried_object->term_id);
				the_archive_description( '<div class="archive-description text-muted">', '</div>' );
                                
				?>
			</header><!-- .page-header -->
                        
                        <div class="row justify-content-md-center">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', 'custom-tax' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
                    </div><!-- ./row -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
