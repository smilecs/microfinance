$(document).ready(function(){
$('#acct_type').change(function (){
  console.log("test");
  var tmp = $('#acct_type').val();
  if(tmp == 2){
    $('#new_elem').html('<label for=dr>Duration</label><input type=Number name=duration class=form-control id=dr placeholder=Duration in years/>');
  }
});
});
