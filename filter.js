$(document).ready(function(){
  var faculty = "";
  var dept = "";
  var sex = "";
  $('#print').click(function(){
var dat = $('#tableentry').val();
$('#list_data').val(dat);
$('#myform').submit();
  });

  $('#facul').change(function(){
    faculty = $('#facul').val();
  });

  $('#dept').change(function(){
    dept = $('#dept').val();
  });

  $('#sex').change(function(){
    sex = $('#sex').val();
  });

$('#generate').click(function(){
  $.post('../filter.php', {
  faculty: faculty,
  dept: dept,
  sex: sex
}, function(data){
  $('#table_entry').html(data);
});

});

});
