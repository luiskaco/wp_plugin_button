<?php 

// Eviita que puedan acceder al archivo
if(! defined ('ABSPATH')) exit;

/**
 *  Crea un shortcode, uso: [shortcode_merckMap]
 */

function merck_shortcode( $atts ){

    
    ?>  
            <div class="merck__container" id="merck_container_plugin_id">
                <div class="merck__content">   
     
                    <div class="container-description-select">
                        <h3>
                        Encuentra al <span>médico especialista</span> mas cercano a tu 
domicilio, distrito, ciudad o región ingresando a:
                        </h3>
                    </div>
                    <div class="merck__input_content">
                        <div class="bg-select">
                            <select class="merck__input input_select" id="merck_map_select_id">
                                <option class="option" selected hidden disabled value="">
                                    <span> Selecionar</span>
                                </option>  
                                <option class="option" value="Endocrinólogo">
                                    <span >Endocrinólogo</span>
                                </option>   
                            </select>
                           
                        </div>

                        <div class="merck__input merck__input_button">
                            <button type="button" id="merck_map_button_id"> Buscar  <img src="https://i.postimg.cc/HnGZFLXQ/icono-lupa-16x16.png" 
                            alt=""></button>
                        </div>
                    </div> 
                         
                </div>
                <div class="merck__content_img">
                    <img src="https://i.postimg.cc/L8x0W51v/Geolocalizacio-n-Merck-3-img.jpg" alt="imagen de endocrinologos">
                   
                </div>
            </div>

       
    <?php
    
}

add_shortcode('shortcode_merckMap', 'merck_shortcode');

