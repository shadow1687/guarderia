$(function(){
  loadChilds();
});

function loadChilds(){
  $.ajax({
              type: "POST",
              url: _base_url + "/guarderia/tutor/Tutor_ajax/get_childs",
              data: {},
              dataType: 'json',
              success: function(response) {
                  if(response.valid==0){
                    setMessage("Ocurrio un error al buscar hijos: ["+response.res+"]",_MSG_ERROR);
                  }
                  else {
                    var respuesta=response.res;
                    for (var i = 0; i < respuesta.length; i++) {
                        var imagen='<img src="http://127.0.0.1/guarderia/images/'+(i+1)+'.jpg" class="img-circle child_img">';
                        var nombre='<span class="text-140 text-bold">'+cd respuesta[i]['nombre']+'</span>';
                        $('#tabs ul').append('<li><a href="#tabs-'+(i+1)+'" >'+imagen+"&nbsp;"+nombre+'</a></li>');
                        $('#tabs').append('<div id="tabs-'+(i+1)+'"><h1>TABLA DE EVENTOS</h1></div>');
                    }
                    $("#tabs").tabs();
                  }
              }
          });
}
