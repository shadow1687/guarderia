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
        ],
        "paging":   true,
        "ordering": [[2,'asc']],
        "bFilter":true
    }
    $("#tbl_alumno").DataTable(data_table_object);
}


function registrar_alumnos(){
  $.ajax({
              type: "POST",
              url: baseUrl + "api/categories",
              data: {
                  "name": name,
                  "description": description
              },
              dataType: 'json',
              contentType: 'application/json',
              success: function(res) {
                  alert(res)
              }
          });
}
