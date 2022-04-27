<?php 
if(! defined ('ABSPATH')) exit;
/**
 *  Agrega Stilo y JavaScrips al Admin
*/

function merckmap_frontend_styles(){

    wp_enqueue_style('merckmapCss', plugins_url('../assets/css/merckmap.css', __FILE__), array(), '1.0.7');

    wp_enqueue_script('jquery');
    wp_enqueue_script('sweetalert2','//cdn.jsdelivr.net/npm/sweetalert2@11', array('jquery'), '1.0.3', true);

    wp_enqueue_script('merckmapjs',plugins_url('../assets/js/merckmap.js', __FILE__), array('jquery'), '1.0.5', true);

}   

add_action('wp_enqueue_scripts', 'merckmap_frontend_styles');