$(document).ready(function(){
$('#username').keyup(function(){
  var uname = $("#username").val();
  if(uname === ""){
  $("#msg").html(" ");
}else{
  $.post("username.php", {
  username: uname

  }, function(data) {
  $("#msg").html(data); // Append returned message to message paragraph.

});}
});

});
