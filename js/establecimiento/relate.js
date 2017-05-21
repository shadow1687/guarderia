relate_object={'alumnos':[],'maestro':'','aulas':[]};

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
    case 'tbl_aula':{
      var table = $('#tbl_aula').DataTable();

      $('#tbl_aula tbody').on('click', 'td', function (e) {
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
    default:
      $("#crear").off().click(function(e){
        e.preventDefault();
        e.stopPropagation();
        request("maestro/Maestro/crear_maestro");
      });
      $("#save").off().click(function(e){
        e.preventDefault();
        e.stopPropagation();
        relate_object.aulas=get_selected("tbl_aula");
        saveAsignacion();
      });
  }
}

function initWizard(){
  $('#relate_wizard').smartWizard({
    // Properties
      labelNext:'Siguiente',
      labelPrevious:'Volver',
      labelFinish:'',
      enableFinishButton:false,
      transitionEffect: 'slide',
      onLeaveStep:function(obj,context){
        switch (context.toStep) {
          case 2:{
            var alumnos=get_selected("tbl_alumno");
            if(alumnos.length){
              relate_object.alumnos=alumnos;
              return true;
            }
            else{
              setMessage("debe seleccionar por lo menos un alumno.",_MSG_ERROR);
              return false;
            }
          }break;
          case 3:{
            var maestro=get_selected("tbl_maestro");
            if(maestro.length){
              relate_object.maestro=maestro[0];
              reloadTable("tbl_aula",initTableAulas,maestro[0]);
              return true;
            }
            else{
              setMessage("debe seleccionar un maestro.",_MSG_ERROR);
              return false;
            }
          }break;
          default:
            return true;
        }
        if(context.toStep==3){

        }
        else{
          return true;
        }
      }
  });
  $('.buttonNext').addClass('btn btn-info');
  $('.buttonPrevious').addClass('btn btn-primary');
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
            $(row).attr("id",data.dni);
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
            $(row).attr("id",data.id);
          },
          "initComplete": function( settings ) {
             bindEvents("tbl_aula");
         }
      }
      $("#tbl_aula").DataTable(data_table_object);
}


function saveAsignacion(){
    $.ajax({
                type: "POST",
                url: _base_url + "/guarderia/establecimiento/Establecimiento_ajax/asignar_alumnos",
                data: JSON.stringify({
                    "alumnos": relate_object.alumnos,
                    "maestro": relate_object.maestro,
                    "aulas"  : relate_object.aula
                }),
                dataType: 'json',
                contentType: 'application/json',
                success: function(res) {
                  setMessage("success",_MSG_INFO);
                }
            });
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
