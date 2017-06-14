$(function(){
  get_acciones();
  bindEvents();
});

function bindEvents(source){
  switch (source) {
    default:
      $("#crear").off().click(function(e){
        e.preventDefault();
        e.stopPropagation();
        request("maestro/Maestro/crear_maestro");
      });
  }
}


function get_acciones(){



          //  $(document).ready(function(){


              $.ajax({
                          type: "POST",
                          url: _base_url + "/guarderia/maestro/Maestro_ajax/get_acciones_2",
                          data: {},
                          dataType: 'json',
                          success: function(response) {
                            var respuesta=response.res;
                            respuesta.forEach(function(e, i, a){
                              $('#acciones').append("<div>"+e.descripcion+"</div>");
                            });
                          }
                      });

              $('.slider').slick({
                 centerMode: true,
                 centerPadding: '100px',
                 slidesToShow: 5,
                 dots: true,
                 responsive: [
                   {
                     breakpoint: 768,
                     settings: {
                       arrows: false,
                       centerMode: true,
                       centerPadding: '40px',
                       slidesToShow: 3
                     }
                   },
                   {
                     breakpoint: 480,
                     settings: {
                       arrows: false,
                       centerMode: true,
                       centerPadding: '40px',
                       slidesToShow: 1
                     }
                   }
                 ]
              });

            }
