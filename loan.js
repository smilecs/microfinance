$(document).ready(function(){

  $('#loa').click(function(){
  var amort = $('#amort').val();
    var loan_id = $('#loan').val();
    $.post('../pay_loan.php', {
      loan_id:loan_id,
      amort:amort
    }, function(data){
      $('#result').html(data);
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
});
