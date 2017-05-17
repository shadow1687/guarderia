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
        //alert( 'You clicked on '+data[0]+'\'s row' );
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
  }
}

function initWizard(){
  initTable();
}

function initTable(){
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
          ],
          "paging":   true,
          "ordering": [[2,'asc']],
          "bFilter":true,
          "initComplete": function( settings ) {
             bindEvents("tbl_alumno");
         }
      }
      $("#tbl_alumno").DataTable(data_table_object);
}
