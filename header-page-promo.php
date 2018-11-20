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

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
<div id="page" class="site">
            <div class="container-fluid">
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
                        <h1 class="phone-number">06 70 79 40 50</h1>
                        <h1 class="phone-number">01 34 25 03 32</h1>
                    </section>
                    
                    <a href="http://127.0.0.2:8000" title="Traiteur à Domicile" class="custom-logo-link" rel="home" itemprop="url">
                        <img width="400" height="200" src="http://127.0.0.2:8000/wp-content/uploads/2018/11/alan-pizza-logo-retina.png" 
                             class="custom-logo " 
                             alt="Alan Pizza" itemprop="logo" 
                             srcset="http://127.0.0.2:8000/wp-content/uploads/2018/11/alan-pizza-logo-retina.png 400w, http://127.0.0.2:8000/wp-content/uploads/2018/11/alan-pizza-logo-retina-300x150.png 300w" sizes="(max-width: 400px) 100vw, 400px">
                    </a>
                    
                        <?php $header_image_promo = CUSTOM_IMAGES_PATH . '/promo-and-type-pizza/promotion-pizza-vaureal.jpg';?>
                        <div class="site-branding header-background-image" 
                             style="background-image: url('<?php echo $header_image_promo  ?>') ; height: 35vh">
                        </div> <!-- .site-branding --> 

                </header><!-- #masthead -->


                <div id="content" class="site-content">
