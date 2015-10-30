$(document).ready(function(){
$('#pay').click(function(){
  var acct_no = $('#acct').val();
  //var voucher = $('#voucher').val();
  var amt = $('#amont').val();
  var amount = $('#amount').val();
  $.post('../update_withdraw.php', {
    acct:acct_no,
    bal:amt,
    amount:amount
  }, function(data){
    $('#new_bal').html(data);
    $.post('../payment_voucher.php', {
      acct_no:acct_no
    }, function(data){
      $('#content').html(data);
    });


  });

});


$('#pa').click(function(){
  var amt = $('#amount').val();
  var desc = $('#desc').val();
  $.post('../admin_withdraw.php', {
    amt:amt,
    desc:desc
  }, function(data){
    $('#new').html(data);
    $.post('../payment_voucher.php', {
      acct_no:"admin"
    }, function(data){
      $('#content').html(data);
    });

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

$('#passbook').keyup(function(){
var acct = $('#passbook').val();
$.post('../report_filter/passbook_info.php', {
  acct_no: acct
}, function(data){
$('#content').html(data);
});
});
$('#purchase').click(function(){
  var acct = $('#passbook').val();
$.post('../report_filter/purchase.php',{
  acct: acct
}, function(data){
  $('#new_bal').html(data);

});
});
});
