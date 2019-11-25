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
                
 <?php
echo do_shortcode('[smartslider3 slider=3]');
?>

            </header><!-- #masthead -->


            <div id="content" class="site-content">
