<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dro_caterer
 */
global $taxonomy_image_url;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <meta name="theme-color" content="#e21f26">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php the_custom_logo() ?>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'dro-alan-pizza'); ?></a>
            <header id="masthead" class="site-header">
                <nav id="site-navigation" class="main-navigation sticky-active" role="navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary',
                    ));
                    ?>
                </nav><!-- #site-navigation -->
                
                <section class="phone">
                    <h1 class="phone-number">
                        <i class="fa fa-phone-square"></i>
                        <a href="tel:<?php echo get_infos_options('tele_1')?>"><?php echo get_infos_options('tele_1')?></a>
                        <a href="tel:<?php echo get_infos_options('tele_2')?>"><?php echo get_infos_options('tele_2')?></a>
                    </h1>
                </section>

                
                <?php
                $taxonomy_id = $wp_query->queried_object->term_id;
                $taxonomy_image_id = get_term_meta($taxonomy_id, 'showcase-taxonomy-image-id', true);
                $taxonomy_image_url = wp_get_attachment_image_url($taxonomy_image_id, 'header-taxonomy-image');
//                var_dump($taxonomy_image_url);
                ?>
                <?php if ($taxonomy_image_url !== FALSE): ?>
                    <div id = "header-image" class = "site-branding header-background-image" style="background-image: url(<?php echo $taxonomy_image_url; ?>)"> 
                        <?php get_senior_mega_price_options();?>
                    </div>
                <?php endif; ?>
                <?php if (get_header_image() && ($taxonomy_image_url == false)) : ?>
                    <div id="header-image" class="header-image">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <img src="<?php header_image(); ?>"
                                 width="<?php echo absint(get_custom_header()->width); ?>" 
                                 height="<?php echo absint(get_custom_header()->height); ?>"
                                 alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        </a>
                    </div>
                <?php endif; ?>

            </header><!-- #masthead -->


            <div id="content" class="site-content" >
                