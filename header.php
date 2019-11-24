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
                        <a href="tel:<?php echo get_infos_options('tele_1') ?>"><?php echo get_infos_options('tele_1') ?></a>
                        <a href="tel:<?php echo get_infos_options('tele_2') ?>"><?php echo get_infos_options('tele_2') ?></a>
                    </h1>
                </section>

                <?php the_custom_logo() ?>
                <?php if (get_header_image() && !display_header_text()) : ?>
                    <div id="header-image" class="header-image">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <img src="<?php header_image(); ?>"
                                 width="<?php echo absint(get_custom_header()->width); ?>" 
                                 height="<?php echo absint(get_custom_header()->height); ?>"
                                 alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        </a>
                    </div>
                <?php endif; ?>
                <?php if (get_header_image() && display_header_text()): ?>
                    <div class="site-branding header-background-image c" style="background-image: url(<?php header_image() ?>)">

                    <?php else: ?>
                        <div class="site-branding">
                        <?php endif; ?>
                        <div class="title-box">
                            <?php
                            if (is_front_page() && is_home()) :
                                ?>
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                                <?php
                            else :
                                ?>
                                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                            <?php
                            endif;
                            ?>
                        </div><!-- .title-box -->
                        <div class="paiement-mode">
                            <img alt="Mode de paiement de pizza : carte banquaire et ticket restaurant" src="<?php echo CUSTOM_IMAGES_PATH?>/mode-paiemnet-pizza-a-vaureal.png">
                        </div>
                        <div class="pizza-halal">
                            <img alt="Pizza Halal à Vauréal" src="<?php echo CUSTOM_IMAGES_PATH?>/pizza-halal-de-vaureal.png">
                        </div>
                        <?php get_senior_mega_price_options(); ?>

                    </div><!-- .site-branding -->

            </header><!-- #masthead -->


            <div id="content" class="site-content">
