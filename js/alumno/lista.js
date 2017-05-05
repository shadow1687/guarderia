$(function(){
  initTable();
  bindEvents();
});

function bindEvents(source){
  switch (source) {
    case 'user':


      break;
    default:
      $("#crear").off().click(function(e){
        e.preventDefault();
        e.stopPropagation();
        request("alumno/Alumno/crear_alumno");
      });
  }
}

function initTable(){
  var url='../../alumno/Alumno_ajax/get_alumnos';
  data_table_object= {
        "processing": true,
        "serverSide": true,
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
            { "data": "",'className':'text-center',
              render: function ( data, type, row ) {
                  return moment(row.nacimiento).format("DD/MM/YYYY");
               }
            },
            { "data": "tutores" },
            { "data": "maestros" },
        ]
    }
    $("#tbl_alumno").DataTable(data_table_object);
}
