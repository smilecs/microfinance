$(document).ready(function(){
  $('#sub').click(function(){
    var acct = $('#acct').val();
    var amt = $('#amt').val();
    $.post('../deposit.php', {
      acct_no: acct,
      amt: amt
    }, function(data){
        $('#result').html(data);
        alert("Account Deposit Successful");
    });
  });
  $('#acct').keyup(function(){
    var acct = $('#acct').val();
    $.post("../get_save.php", {
      acct: acct
    }, function(data){
      $("#dep").html(data);
      $.post("get_details.php", {
        acct_no: acct
      }, function(data){
        $('#new_table').html(data);
      });
    });
  });

});
