$(document).ready(function(){
$('#acct').keyup(function(){
  var acct = $('#acct').val();
  $.post("no_id_confirm.php", {
  acct_no: acct
  }, function(data) {
  $("#msg").html(data); // Append returned message to message paragraph.
  });
  
});
});
