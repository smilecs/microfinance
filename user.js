$(document).ready(function(){
$('#username').keyup(function(){
  var uname = $("#username").val();
  $.post("username.php", {
  username: uname

  }, function(data) {
  $("#msg").html(data); // Append returned message to message paragraph.

  });
});

});
