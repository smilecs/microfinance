$(document).ready(function(){

  $('#loa').click(function(){
  var amort = $('#amort').val();
    var loan_id = $('#loan').val();
    $.post('../pay_loan.php', {
      loan_id:loan_id,
      amort:amort
    }, function(data){
      //$('#result').html(data);
      alert("Amount Paid");
    });
  });

$('#emp_id').keyup(function(){
  var id = $('#emp_id').val();
  $.post('../get_maximum.php', {
    id: id
  }, function(data){
    //console.log(data);
    //alert(data);
    $('#loan').html(data);
  });
});

  $('#loan').keyup(function(){
    var loan_id = $('#loan').val();
    $.post('../populate_loan_form.php', {
      id: loan_id
    }, function(data){
      $('#new_table').html(data);
    });

    $.post('../loan_js.php', {
      loan: loan_id
    }, function(data){
      $("#con").html(data);

    });
  });

  $('#loans').keyup(function(){
    var loan_id = $('#loans').val();
    $.post('../pay_icas.php', {
      id: loan_id
    }, function(data){
      $('#new_table').html(data);
    });

    $.post('../icas_js.php', {
      loan: loan_id
    }, function(data){
      $("#con").html(data);

    });
  });

  $('#loas').click(function(){
  var amort = $('#amount').val();
    var loan_id = $('#loan').val();
    $.post('../icas_payment.php', {
      loan_id:loan_id,
      amount:amort
    }, function(data){
      $('#result').html(data);
    });
  });



});
