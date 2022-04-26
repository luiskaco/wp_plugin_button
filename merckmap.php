<?php 
/*
    Plugin Name: MerckMap
    Plugin URI:   
    Description: Plugin para Añadir un boton de redireccion de wordpress
    Version: 1.0.1
    Author: Luis Carlos Gomez
    Author URI: lkgomez.com
    License: GPL2
    License: https://www.gnu.org/License/gpl-2.0.html
    Text Domain: MerckMap
*/


/**
 *  Añade un shortcode 
 */
require_once(plugin_dir_path(__FILE__)) . 'include/shortcode.php';



/**
 *  Regenera las reglas de las url al activar
 *  Activa la funcion: 'quizbook_rewrite_flush'
 */
//register_activation_hook(__FILE__, 'merckMap_rewrite_flush');




/*
*   Añade hojas de estilos y archovos JS
*/
require_once(plugin_dir_path(__FILE__)) . 'include/scripts.php';
