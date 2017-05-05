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

function defaultFor(element,defecto){
  return ((element==undefined) ? defecto:element);
}

function request(url,type,args){
  type=defaultFor(type,'POST');
  args=defaultFor(args,[]);
  var form_str="<form id='myForm' action='"+_base_url+"/guarderia/"+url+"' method='"+type+"'>"
  if(args.length){
    args.forEach(function(currentValue, index, arr){
      value=currentValue;
      $form+="<input id='"+value["name"]+"' type='text' value="+value["value"]+"/>";
    });
  }
  $("body").append(form_str);
  var form = document.getElementById("myForm");
  $(form).submit();
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
