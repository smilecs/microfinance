$(document).ready(function(){
  $('#acct').keyup(function(){
    var acct = $('#acct').val();
    $.post("../get_save.php", {
      acct: acct
    }, function(data){
      $("#dep").html(data);
    });
  });

});
