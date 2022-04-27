jQuery( document ).ready( function() {
   jQuery(document).on('click', '#merck_map_button_id' ,() => {
                const merck_map_selectID = jQuery("#merck_map_select_id").val();
                const merck_map_text = `“En estos momentos usted está abandonando el sitio web de Merck. Por favor tenga en cuenta que el sitio web hacia donde se dirige puede que no sea propiedad ni esté controlado por Merck y por lo tanto no estar sujeto a nuestras políticas”.`
                const merck_map_query = `https://www.google.com/maps/search/?api=1&query=${merck_map_selectID}`

                if(merck_map_selectID == ""){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Debe selecionar un elemento a buscar!',
                        confirmButtonColor: '#6f27a2',
                      })
                    return;
                }
                 
                Swal.fire({
                    text: merck_map_text,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#6f27a2',
                    cancelButtonColor: '#d65695',
                    confirmButtonText: 'De acuerdo',
                    cancelButtonText: 'Desacuerdo',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.replace(merck_map_query)
                    }
                })

   });

});