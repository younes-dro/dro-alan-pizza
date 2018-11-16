<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dro_caterer
 */
get_header();
?>
<div class="row">
    <div class="col-lg-9">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                
                contenet
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .col- -->
    <div class="col-lg-3">
        <?php get_sidebar('front-page'); ?>
    </div>
</div><!-- .row -->
<?php
get_footer();

