<?php
/**
 * Created by PhpStorm.
 * User: bhavikm
 * Date: 11/9/2017
 * Time: 6:54 PM
 */
function redeal_settings_init() {
    // register a new setting for "redeal" page
    register_setting( 'redeal', 'redeal_options' );

    // register a new section in the "redeal" page
    add_settings_section(
        'redeal_section_developers',
        __( 'Redeal Configuration', 'redeal' ),
        'redeal_section_after_title',
        'redeal'
    );
    
    add_settings_field(
        'redeal_field_enable', // as of WP 4.6 this value is used only internally
        __( 'Enable:', 'redeal' ),
        'redeal_field_configuration',
        'redeal',
        'redeal_section_developers',
        [
            'label_for' => 'redeal_field_enable',
            'class' => 'redeal_row',
            'redeal_custom_data' => 'enable',
        ]
    );	  
   
}

/**
 * register our wporg_settings_init to the admin_init action hook
 */
add_action( 'admin_init', 'redeal_settings_init' );