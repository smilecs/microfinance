$(document).ready(function(){
var start = '';
var end = '';
$('#withdraw').click(function(){
  start = $('#start_date').val();
  end = $('#end_date').val();
  if(start === ''){
    $.post('../w_report_n.php', {
      start_date: start,
      end_date: end
    }, function(data){
      $('#table_entry').html(data);

    });
  }else{
    $.post('../w_report.php', {
      start_date: start,
      end_date: end
    }, function(data){
      $('#table_entry').html(data);

    });
  }

});

$('#deposit').click(function(){
  start = $('#start_date').val();
  end = $('#end_date').val();
  if(start === ''){
    $.post('../d_report_n.php', {
      start_date: start,
      end_date: end
    }, function(data){
      $('#table_entry').html(data);

    });
  }else{
    $.post('../d_report.php', {
      start_date: start,
      end_date: end
    }, function(data){
      $('#table_entry').html(data);

    });
  }

});

$('#loan').click(function(){
  start = $('#start_date').val();
  end = $('#end_date').val();
  if(start === ''){
    $.post('../l_report_n.php', {
      start_date: start,
      end_date: end
    }, function(data){
      $('#table_entry').html(data);

    });

  }else{
    $.post('../l_report.php', {
      start_date: start,
      end_date: end
    }, function(data){
      $('#table_entry').html(data);

    });
  }

});

});
