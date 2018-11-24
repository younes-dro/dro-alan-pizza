<?php

/**
 * dro alan pizza Theme Customizer
 *
 * @package dro_alan_pizza
 */
if (!function_exists('dro_alan_pizza_customize_register')) {

    /**
     * Add postMessage support for site title and description for the Theme Customizer.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    function dro_alan_pizza_customize_register($wp_customize) {
        
        
	$dro_alan_pizza_defaults = dro_alan_pizza_default_shop_options();
	
	//Shop option panel
	$wp_customize->add_panel( 'shop_option_panel',
                array( 'title' => esc_html__( 'Shop Options', 'dro-alan-pizza' ),
                    'priority' => 300, 
                    'capability' => 'edit_theme_options' ) );
        
	// Senior Mega  section
	$wp_customize->add_section( 'dro_alan_pizza_senior_mega_section', 
		array( 'title' => esc_html__( 'Senior Mega', 'dro-alan-pizza' ),
			   'priority' => 100, 
			   'capability' => 'edit_theme_options', 
			   'panel' => 'shop_option_panel' 
		)
	); 
	//Senior  setting.
	$wp_customize->add_setting( 'dro_alan_pizza_senior_price',
                array( 'sanitize_callback' => 'shop_options' ) );
	
	//Senior control
	$wp_customize->add_control( 'dro_alan_pizza_senior_price', 
		array( 'label' => esc_html__( 'Prix Sénior', 'dro-alan-pizza' ),
			   'description' =>  __( 'Le prix Sénior sans le signe €', 'dro-alan-pizza' ), 
			   'section' => 'dro_alan_pizza_senior_mega_section', 
			   'type' => 'text',
			   'priority' => 100 
		) 
	);        
        
    }

}

add_action('customize_register', 'dro_alan_pizza_customize_register');


function shop_options(){
    return ;
}

if (!function_exists('dro_alan_pizza_default_theme_options')):

    /**
     * 
     * @return array The defaults values for the theme options 
     */
    function dro_alan_pizza_default_shop_options() {

        $dro_alan_pizza_defaults = array();

        return $dro_alan_pizza_defaults;
    }

endif;


/**
 * Get theme option.
 * @param string $key Option key.
 * @return mixed Option value.
 */
if (!function_exists('dro_alan_pizza_get_option')) :

    function dro_alan_pizza_get_option($key) {

        if (empty($key)) {

            return;
        }
        $value = '';
        $default = dro_alan_pizza_default_theme_options();
        $default_value = null;
        if (is_array($default) && isset($default[$key])) {

            $default_value = $default[$key];
        }
        if (null !== $default_value) {

            $value = get_theme_mod($key, $default_value);
        } else {
            $value = get_theme_mod($key);
        }

        return $value;
    }
endif;
