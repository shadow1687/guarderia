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
  $('#relate_wizard').smartWizard({
    // Properties
      onLeaveStep:function(obj,context){
        if(context.toStep==3){
          var maestro=get_selected("tbl_maestro");
          if(maestro.length){
            reloadTable("tbl_aula",initTableAulas,maestro[0]);
            return true;
          }
          else{
            alert("debe seleccionar un maestro");
            return false;
          }
        }
        else{
          return true;
        }
      }
      // onShowStep: function(obj,context){
      //   if(context.fromStep==2){
      //     //busco las aulas del maestro seleccionado
      //     var maestro=get_selected("tbl_maestro");
      //     reloadTable("tbl_aula",initTableAulas,maestro[0]);
      //   }
      // },
  });
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
              { "data": "",'className':'text-center text_nowrap',
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
          },
          "columns": [
              { "data": "","className":"text_nowrap",
                render: function ( data, type, row ) {
                    return row.apellido+", "+row.nombre;
                 }
              },
          ],
          "paging":   false,
          "ordering": [[2,'asc']],
          "filter":false,
          "info": false,
          "rowCallback": function( row, data, index ) {
            $(row).addClass("hand");
            $(row).attr("id",data.dni);
          },
          "initComplete": function( settings ) {
             bindEvents("tbl_maestro");
         }
      }
      $("#tbl_maestro").DataTable(data_table_object);
}

function initTableAulas(maestro){
    var url=_base_url+'/guarderia/establecimiento/Establecimiento_ajax/get_aulas';
    data_table_object= {
          "ajax": {
            'url':url,
            'data':{ "maestro": maestro },
            "type": "POST",
            'dataSrc':"res",
            "rowId":'id',
          },
          "columns": [
              { "data": "nombre",'className':'text-center text_nowrap'},
              { "data": "turno",'className':'text-center text_nowrap'},
              { "data": "capacidad",'className':'text-right text_nowrap'},
          ],
          "paging":   false,
          "ordering": [[2,'asc']],
          "filter":false,
          "info": false,
          "rowCallback": function( row, data, index ) {
            $(row).addClass("hand");
          },
          "initComplete": function( settings ) {
             bindEvents("tbl_aula");
         }
      }
      $("#tbl_aula").DataTable(data_table_object);
}

function get_selected(id_table){
  var array=[];
  $("#"+id_table+" tbody").find(".tr_selected").each(function(){
     var row=$(this);
     var id=$(row).attr("id")
     array.push(id);
   });
  return array;
}
