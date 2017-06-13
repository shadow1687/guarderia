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

/*
              $.ajax({
                          type: "POST",
                          url: _base_url + "/guarderia/maestro/Maestro_ajax/get_acciones_2",
                          data: {},
                          dataType: 'json',
                          success: function(response) {
                            var respuesta=response.res;
                            alert(response.res);
                            setMessage("success",_MSG_INFO);
                          }
                      });

             $('#acciones').append("<div><i class=\"fa fa-apple fa-5x\"></i></div>");
             $('#acciones').append("<div><i class=\"fa fa-home fa-5x\"></i></div>");
             $('#acciones').append("<div><i class=\"fa fa-bus fa-5x\"></i></div>");
             $('#acciones').append("<div><i class=\"fa fa-camera fa-5x\"></i></div>");
             $('#acciones').append("<div><i class=\"fa fa-cutlery fa-5x\"></i></div>");
             $('#acciones').append("<div><i class=\"fa fa-camera fa-5x\"></i></div>");
             $('#acciones').append("<div><i class=\"fa fa-cutlery fa-5x\"></i></div>");


              $('.your-class').slick({
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
              */
            }
