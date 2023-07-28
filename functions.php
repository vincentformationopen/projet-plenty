<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

function buttonorder() {

    $monTexte = '<div class="parent">
    <div class="div1"><input value="0"></div>
    <div class="div2">+</div>
    <div class="div3">-</div>
    <div class="div4">OK</div>
    </div>';
    
    return $monTexte;
    }
    
    add_shortcode('nomShortcode', 'buttonorder');

// END ENQUEUE PARENT ACTION

/*
function add_extra_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in() && $args->menu === 'menutop') {
        $items .= '<li><a href="'. get_permalink( get_option('woocommerce_myaccount_page_id') ) .'">Admin</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
*/


add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );


function add_admin_link( $items, $args ) {


    if (is_user_logged_in() && $args->theme_location == 'primary') {


        $items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';


    }


    return $items;


}

