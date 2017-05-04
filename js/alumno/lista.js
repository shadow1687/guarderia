$(function(){
  initTable();
  bindEvents();
});

function bindEvents(source){
  switch (source) {
    case 'user':


      break;
    default:
      $("#user_settings").off().click(function(e){
        e.preventDefault();
        e.stopPropagation();
        window.location.href = _base_url+"/sist_riego/index.php/Main_controller/user_settings";
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
            { "data": "",
              render: function ( data, type, row ) {
                  return row.apellido+", "+row.nombre;
               }
            },
            { "data": "nombre" },
            { "data": "nombre" },
            { "data": "nombre" },
            { "data": "nombre" },
        ]
    }
    $("#tbl_alumno").DataTable(data_table_object);
}
