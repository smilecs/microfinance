$(document).ready(function(){
  var emp_id = '';
  var amount = '';
  var duration = '';
  $('#calcs').click(function(){
    emp_id = $('#emp_id').val();
    amount = $('#amt').val();
    duration = $('#duration').val();
    $.post('../loan_calc.php', {
      emp_id: emp_id,
      amt: amount,
      duration: duration
    }, function(data){
      $('#new_content').html(data);
    });
  });

  $('#calc').click(function(){
    emp_id = $('#emp_id').val();
    amount = $('#amt').val();
    duration = 1;
    var icas = 1;
    $.post('../loan_calc.php', {
      emp_id: emp_id,
      amt: amount,
      icas: icas,
      duration: duration
    }, function(data){
      $('#new_content').html(data);
    });
  });
});
