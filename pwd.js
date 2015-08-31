$(document).ready(function(){
  $('#no').keyup(function(){
    var original_password = $('#n').val();
    var new_password = $('#no').val();
    if(original_password != new_password){
      $('#msg').html("<h2>Passwords do not match</h2>");
    }else {
      $('#msg').html("");
    }
  });
});
