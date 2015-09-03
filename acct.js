$(document).ready(function(){
$('#acct').keyup(function(){
  var dep = $('#dep').val();
  var acct = $('#acct').val();
  $.post("../no_id_confirm.php", {
  dep_id: dep,
  acct_no: acct

  }, function(data) {
  $("#msg").html(data); // Append returned message to message paragraph.

  });
});

});
