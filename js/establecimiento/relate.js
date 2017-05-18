$(function(){
  initWizard();
  bindEvents();
});

function bindEvents(source){
  switch (source) {
    case 'tbl_alumno':{
      var table = $('#tbl_alumno').DataTable();

      $('#tbl_alumno tbody').on('click', 'td', function (e) {
          e.stopPropagation();
          e.preventDefault();
          var data = table.row( this ).data();
          var row= $(this).parent();
          var h=$(row).hasClass("tr_selected");
          if($(row).hasClass("tr_selected")){
            $(row).removeClass("tr_selected");
          }
          else{
            $(row).addClass("tr_selected");
          }
      } );
    };break;
    case 'tbl_maestro':{
      var table = $('#tbl_maestro').DataTable();

      $('#tbl_maestro tbody').on('click', 'td', function (e) {
          e.stopPropagation();
          e.preventDefault();

          //quito el seleccionado anterior
          $('#tbl_maestro tbody').find(".tr_selected").removeClass("tr_selected");
          //selecciono la nueva fila
          var data = table.row( this ).data();
          var row= $(this).parent();
          var h=$(row).hasClass("tr_selected");
          $(row).addClass("tr_selected");

      } );
    };break;
    default:
      $("#crear").off().click(function(e){
        e.preventDefault();
        e.stopPropagation();
        request("maestro/Maestro/crear_maestro");
      });
  }
}

function initWizard(){
  initTableAlumnos();
  initTableMaestros();
}

function initTableAlumnos(){
    var url=_base_url+'/guarderia/alumno/Alumno_ajax/get_alumnos';
    data_table_object= {
          "ajax": {
            'url':url,
            'data':{  },
            "type": "POST",
            'dataSrc':"res",
            "rowId":'dni',
          },
          "columns": [
              { "data": "",
                render: function ( data, type, row ) {
                    return row.apellido+", "+row.nombre;
                 }
              },
              { "data": "",'className':'text-center txt_nowrap',
                render: function ( data, type, row ) {
                    return moment(row.nacimiento).format("DD/MM/YYYY");
                 }
              },
          ],
          "paging":   true,
          "ordering": [[2,'asc']],
          "bFilter":true,
          "rowCallback": function( row, data, index ) {
            $(row).addClass("hand");
          },
          "initComplete": function( settings ) {
             bindEvents("tbl_alumno");
         }
      }
      $("#tbl_alumno").DataTable(data_table_object);
}

function initTableMaestros(){
    var url=_base_url+'/guarderia/maestro/Maestro_ajax/get_maestros';
    data_table_object= {
          "ajax": {
            'url':url,
            'data':{  },
            "type": "POST",
            'dataSrc':"res",
            "rowId":'dni',
          },
          "columns": [
              { "data": "","className":"txt_nowrap",
                render: function ( data, type, row ) {
                    return row.apellido+", "+row.nombre;
                 }
              },
          ],
          "paging":   true,
          "ordering": [[2,'asc']],
          "bFilter":true,
          "rowCallback": function( row, data, index ) {
            $(row).addClass("hand");
          },
          "initComplete": function( settings ) {
             bindEvents("tbl_maestro");
         }
      }
      $("#tbl_maestro").DataTable(data_table_object);
}

function get_selected(id_table){
  var array=[];
  $("#"+id_table+" tbody").find(".tr_selected").each(function(){
     var row=this;
     array.push(row.attr("id"));
   });
  return array;
}
