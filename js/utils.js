//constantes
var _base_url = window.location.origin;

$(function(){
  initialize();
});

function initialize()
{
  $(".datepicker").datepicker();
  $(".datepicker").mask("00/00/0000", {placeholder: "__/__/____"});

  $(".integer_positive").mask("00000000");
}
// $.ajax({
//             type: "POST",
//             url: baseUrl + "api/categories",
//             headers: {
//                 "Authorization": auth
//             },
//             data: {
//                 "name": name,
//                 "description": description
//             },
//             dataType: 'json',
//             contentType: 'application/json',
//             error: function(jqXHR, exception) {
//                         alert(msg);
//             },
//             success: function() {
//                 table.draw();
//             }
//         });
//     });
