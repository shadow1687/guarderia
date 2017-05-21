_MSG_INFO='#59c2cc';
_MSG_WARNING='#f0da4c';
_MSG_ERROR='#dd3d3d';



function setMessage(msg,type,time){
  $("body").append("<div class='notification' style='background:"+type+"'>"+msg+"</div>");
  $('.notification').slideDown('fast');
  if(time!=undefined){
      window.setTimeout(closeNotification,time);
  }
  $(".notification").off().click(function(e){
    e.preventDefault();
    e.stopPropagation();
    closeNotification();
  });
}

function closeNotification() {
  $('.notification').slideUp('fast');
}
