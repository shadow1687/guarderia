$(function(){
});

function loadChilds(){
  $.ajax({
              type: "POST",
              url: _base_url + "/guarderia/tutor/Tutor_ajax/get_childs",
              data: {},
              dataType: 'json',
              success: function(response) {
                  var respuesta=response.res;
                  for (var i = 1; i < respuesta.length+1; i++) {
                      $('#tabs ul').append('<li><a href="#tabs-'+i+'">'+respuesta['nombre']+'</a></li>');
                      $('#tabs').append('<div id="tabs-'+i+'"></div>');
                  }
                  $("#tabs").tabs();
              }
          });
}
