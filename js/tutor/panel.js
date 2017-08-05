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
                        var nombre='<span class="text-140 text-bold">'+respuesta[i]['nombre']+'</span>';
                        var tabla_evento="<center><table class='tbl_evt' id='tbl_"+respuesta[i].id+"'></table></center>";
                        $('#tabs ul').append('<li><a href="#tabs-'+(i+1)+'" >'+imagen+"&nbsp;"+nombre+'</a></li>');
                        $('#tabs').append('<div id="tabs-'+(i+1)+'">'+tabla_evento+'</div>');
                    }
                    $("#tabs").tabs();
                  }
                  if(respuesta.length){
                    $(".tbl_evt").each(function(){
                      var id=$(this).attr('id');
                      applyDataTable(id.replace("tbl_",""));
                    });
                  }
              }
          });
}


function applyDataTable(id_persona){
      var url=_base_url+'/guarderia/alumno/Alumno_ajax/get_evento';
      data_table_object= {
            "ajax": {
              'url':url,
              'data':{ 'id_persona':id_persona },
              "type": "POST",
              'dataSrc':"res",
            },
            "columns": [
                {
                  "title":'Icono',
                  "data": "",'className':'text-center text_nowrap',
                  render: function ( data, type, row ) {
                      return "<i class='fa fa-"+row.icon+" text-140' ></i>";
                   }
                },
                {
                  "title":'Evento',
                  "data": "evento",'className':'text-left text_nowrap',
                },
                { "title":'Horario',
                  "data": "",'className':'text-center text_nowrap',
                  render: function ( data, type, row ) {
                      return moment(row.ts).format("DD/MM/YYYY, h:mm:ss a");
                   }
                },
            ],
            "paging":   true,
            "ordering": [[2,'asc']],
            "bFilter":true,
            "rowCallback": function( row, data, index ) {
              //$(row).addClass("hand");
              //$(row).attr("id",data.dni);
            },
            "initComplete": function( settings ) {
               //bindEvents("tbl_"+id_persona);
           }
        }
        $("#tbl_"+id_persona).DataTable(data_table_object);
  }
