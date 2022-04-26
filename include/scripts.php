<?php 
if(! defined ('ABSPATH')) exit;
/**
 *  Agrega Stilo y JavaScrips al Admin
 */


function merckmap_frontend_styles(){

    wp_enqueue_style('merckmapCss', plugins_url('../assets/css/merckmap.css', __FILE__), array(), '1.0.6');

    wp_enqueue_script('jquery');
    wp_enqueue_script('merckmapjs',plugins_url('../assets/js/merckmap.js', __FILE__), array('jquery'), '1.0.3', true);

    
}   

add_action('wp_enqueue_scripts', 'merckmap_frontend_styles');