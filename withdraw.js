$(document).ready(function(){
$('#amount').keyup(function(){
var amount = $('#amount').val();
var acct_no = $('#acct_no').val();
$.post('../withdraw_final.php', {
  amount: amount,
  acct_no: acct_no
}, function(data){
  $('#content').html(data);
});
});


$('#acct_no').keyup(function(){
var acct = $('#acct_no').val();
$.post('../conf.php', {
  acct_no: acct
}, function(data){
$('#act').html(data);
});
});

});
