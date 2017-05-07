$(function(){
  initTable();
  bindEvents();
});

function bindEvents(source){
  switch (source) {
    default:
      $("#crear").off().click(function(e){
        e.preventDefault();
        e.stopPropagation();
        request("tutor/Tutor/crear_tutor");
      });
  }
}

function initTable(){
  var url='../../tutor/Tutor_ajax/get_tutores';
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
