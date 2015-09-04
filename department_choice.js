$(document).ready(function(){
  $('#facul').change(function(){
var faculty = $('#facul').val();
$.post("../get_department.php", {
  faculty : faculty
},
function(data){
  $('#dept').html(data);
});
  });
});
