window.setInterval(ut, 1000);

function ut() {
  var d = new Date();
  document.getElementById("time").innerHTML = d.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'});

}

$(document).ready(function (){
  $('#clockIn').click(function(){
    var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'});
    $('#clockOut').attr("disabled",true);

  });
  $('#clockOut').click(function(){
    var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'});
    $('#clockIn').attr("disabled",true);

  })

})
