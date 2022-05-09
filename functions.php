<?php

function cms_webdesign_child_theme_css_scripts() {
        wp_enqueue_style( 'lightboxcss', get_stylesheet_directory_uri(). '/css/lightbox.min.css' , array(), '1.0.0', 'all' );
        wp_enqueue_script( 'lightboxjs', get_stylesheet_directory_uri() . '/js/lightbox.min.js', array( 'jquery' ), '1.0.0', true );

        wp_enqueue_style( 'cms_webdesign_child_theme_css', get_stylesheet_directory_uri() . '/style.css', array( 'cmswebdesign-font-awesome','cmswebdesign-main-style','cmswebdesign-woocommerce-style','cmswebdesign-tablet-style','cmswebdesign-spinner-style' ), '2.3', 'all' );

        wp_enqueue_script( 'cms_webdesign_child_theme_script', get_stylesheet_directory_uri() . '/js/child-scripts.js', array ( 'cmswebdesign-main-script', 'jquery', 'jquery-effects-slide' ), '2.3', true);
    }
add_action( 'wp_enqueue_scripts', 'cms_webdesign_child_theme_css_scripts', 10 );

/*
* #.# ACF 
*
*/
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

    acf_add_options_sub_page('Home Page');
    acf_add_options_sub_page('Footer');
	
	
}

/*
* #.# Hide singular pages for site reviews
*
*/
function cmswebdesign_hide_sitereviews_singular() {
  if ( is_singular( 'site_reviews' ) ) {
    wp_redirect( home_url(), 301 );
    exit;
  }
}
add_action( 'template_redirect', 'cmswebdesign_hide_sitereviews_singular' );


/*
* Customizer
*
*/

