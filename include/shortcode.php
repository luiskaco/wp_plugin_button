<?php 

// Eviita que puedan acceder al archivo
if(! defined ('ABSPATH')) exit;

/**
 *  Crea un shortcode, uso: [merckMap]
 */

function merck_shortcode( $atts ){

    
    ?>  
            <div class="merck__container">
                <div class="merck__content">   
     
                    <div>
                        <h3>
                        Encuentra al <span>médico especialista</span> mas cercano a tu 
domicilio, distrito, ciudad o región ingresando a:
                        </h3>
                    </div>
                    <div class="merck__input_content">

                        <select class="merck__input input_select">
                            <option value="0">
                                Selecionar
                            </option>  
                            <option value="Endocrinologo">
                                Endocrinólogo
                            </option>   
                        </select>

                        <div class="merck__input merck__input_button">
                            <button type="button"> Buscar  <img src="https://i.postimg.cc/GpMcQvrQ/lupa.png" 
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

