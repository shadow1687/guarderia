

$(function(){
  get_acciones();
  initTableAlumnos();
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

    case 'selectable':{
      $('#selectable').on('click', 'div', function (e) {
          e.stopPropagation();
          e.preventDefault();
          var row= $(this).parent();
          var h=$(row).hasClass("div_selected");
          if($(row).hasClass("div_selected")){
            $(row).removeClass("div_selected");
          }
          else{
            $(row).addClass("div_selected");
          }
      } );
    };break;

    default:
      $("#registrar").off().click(function(e){
        e.preventDefault();
        e.stopPropagation();
        var evento=$('.your-class .slick-current div');
        var data={'alumnos':get_selected("tbl_alumno"),'evento':evento[0].id};-
        registrar_evento(data);
      });

  }
}



function get_acciones(){
    $.ajax({
                type: "POST",
                url: _base_url + "/guarderia/maestro/Maestro_ajax/get_acciones_2",
                data: {},
                dataType: 'json',
                success: function(response) {
                  var respuesta=response.res;
                  respuesta.forEach(function(e, i, a){
                    var icon=e.tipo+"<h1 class='text-center'><i class='fa fa-"+e.icon+" text-140 '></i></h1>";
                    $('.your-class').append("<center><div id='"+e.id+"'>"+icon+"</div></center>");
                  });
                  $('.your-class').slick({
                          centerMode: true,
                          centerPadding: '60px',
                          slidesToShow: 5,
                          //autoplay:true,
                          dots:true,

                          responsive: [
                            {
                              breakpoint: 768,
                              settings: {
                                arrows: true,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 3
                              }
                            },
                            {
                              breakpoint: 480,
                              settings: {
                                arrows: true,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 1
                              }
                            }
                          ]
                        });
                }
            });
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
            $(row).attr("id",data.id_persona);
          },
          "initComplete": function( settings ) {
             bindEvents("tbl_alumno");
         }
      }
      $("#tbl_alumno").DataTable(data_table_object);
}



function registrar_evento(data){
    $.ajax({
                type: "POST",
                url: _base_url + "/guarderia/maestro/Maestro_ajax/registrar_evento",
                data: data,
                dataType: 'json',
                success: function(response) {
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


function get_div_selected(id_div){

}
