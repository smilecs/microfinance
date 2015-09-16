$(document).ready(function(){
$('#pay').click(function(){
  var acct_no = $('#acct').val();
  var amt = $('#amont').val();
  var amount = $('#amount').val();
  $.post('../update_withdraw.php', {
    acct:acct_no,
    bal:amt,
    amount:amount
  }, function(data){
    $('#new_bal').html(data);

  });

});

$('#amount').keyup(function(){
var amount = $('#amount').val();
var acct_no = $('#acct').val();
$.post('../withdraw_final.php', {
  amount: amount,
  acct_no: acct_no
}, function(data){
  $('#result').html(data);
});
});


$('#acct').keyup(function(){
var acct = $('#acct').val();
$.post('../conf.php', {
  acct_no: acct
}, function(data){
$('#act').html(data);
});
});

});
