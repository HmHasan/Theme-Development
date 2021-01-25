<?php


/**
 * Theme Functions.
 * 
 * @package IOTA
 */
//echo "<pre>";
//print_r(fileatime(get_template_directory()."/js/main.js"));
//wp_die();
function iota_enqueue_script()
{
//    Get Version
    $script_version = fileatime(get_template_directory()."/assets/src/js/main.js");
    $css_version = fileatime(get_template_directory()."/style.css");
//    Register Style .
    wp_register_style('stylesheet',get_stylesheet_uri(),false,$css_version,'all');
    wp_register_style('bootstrap-css',get_template_directory_uri().'/assets/src/vendor/css/bootstrap.css');

//    Register Script
    wp_register_script('main-js',get_template_directory_uri().'/assets/src/js/main.js',['jquery'],$script_version,true);
    wp_register_script('bootstrap-js',get_template_directory_uri().'/assets/src/vendor/js/bootstrap.js',['jquery'],$script_version,true);
//    Enqueue Style
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('bootstrap-css');
//    Enqueue Script
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');


}
add_action('wp_enqueue_scripts','iota_enqueue_script');
?> 