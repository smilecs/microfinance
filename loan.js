$(document).ready(function(){
  $('#loan').keyup(function(){
    var loan_id = $('#loan').val();
    $.post('../loan_js.php', {
      loan: loan_id
    }, function(data){
      $("#con").html(data);
    });
  });
});
