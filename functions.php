<?php

define('CHILD_THEME_URI', get_stylesheet_directory_uri());
define ('CUSTOM_IMAGES_PATH' , CHILD_THEME_URI . '/images');


if (!function_exists('dro_alan_pizza_scripts')) {

    function dro_alan_pizza_scripts() {

        /*
         * css
         */
        wp_enqueue_style('font-awesome', CHILD_THEME_URI . '/assets/font-awesome/css/font-awesome.min.css');
        wp_enqueue_style('gogle-fonts-courgette', 'https://fonts.googleapis.com/css?family=Courgette');
        wp_enqueue_style('dro-alan-pizza-lato', 'https://fonts.googleapis.com/css?family=Lato');
        if (is_front_page()) {
//            wp_enqueue_style('animate-wow', CHILD_THEME_URI . '/assets/libs/animate.css');
        }

        /*
         * JS
         */
        wp_dequeue_script('dro-caterer-js');
        wp_deregister_script('dro-caterer-js');
        wp_enqueue_script('dro-alan-pizza-js', CHILD_THEME_URI . '/js/dro-alan-pizza.js', array('jquery'),'20181911',TRUE);

        if (is_front_page()) {
//            wp_enqueue_script('alan-pizza-js', CHILD_THEME_URI . '/assets/js/alan-pizza/alan-pizza.js', array('jquery'));
        }
    }

}
add_action('wp_enqueue_scripts', 'dro_alan_pizza_scripts',20);


/**
 * Load tamplate functions 
 */
require 'inc/template-functions.php';
