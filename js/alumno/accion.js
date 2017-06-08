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

function initTable(){
  var url='../../maestro/Maestro_ajax/get_maestros';
  data_table_object= {
        "ajax": {
          'url':url,
          'data':{  },
          "type": "POST",
          'dataSrc':"res"
        },
        "columns": [
            { "data": "dni",'className':'text-right' },
            { "data": "",
              render: function ( data, type, row ) {
                  return row.apellido+", "+row.nombre;
               }
            },
            { "data": "",'className':'texts-center',
              render: function ( data, type, row ) {
                  return moment(row.nacimiento).format("DD/MM/YYYY");
               }
            },
            { "data": "edad",'className':'text-right' },
            { "data": "email",'className':'text-right' },
            { "data": "",
              render: function ( data, type, row ) {
                  return row.direccion+((row.ciudad!="")? " ( "+row.ciudad+" )":"");
               }
            },
        ],
        "paging":   true,
        "ordering": [[2,'asc']],
        "bFilter":true
    }
    $("#tbl_alumno").DataTable(data_table_object);
}

function get_acciones(){
    $.ajax({
                type: "POST",
                url: _base_url + "/guarderia/maestro/Maestro_ajax/get_acciones_2",
                data: {},
                dataType: 'json',
                success: function(response) {
                  var respuesta=response.res;
                  setMessage("success",_MSG_INFO);
                }
            });
}
