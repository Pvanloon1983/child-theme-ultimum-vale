<?php

function cms_webdesign_child_theme_css_scripts() {
        wp_enqueue_style( 'cms_webdesign_child_theme_css', get_stylesheet_directory_uri() . '/style.css', array( 'cmswebdesign-font-awesome','cmswebdesign-main-style','cmswebdesign-woocommerce-style','cmswebdesign-tablet-style','cmswebdesign-spinner-style' ), '', 'all' );

        wp_enqueue_script( 'cms_webdesign_child_theme_script', get_stylesheet_directory_uri() . '/scripts.js', array ( 'cmswebdesign-main-script', 'jquery', 'jquery-effects-slide' ), '', true);
    }
add_action( 'wp_enqueue_scripts', 'cms_webdesign_child_theme_css_scripts', 10 );

/*
* #.# ACF 
*
*/
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

    acf_add_options_sub_page('Home Page');
	
	
}