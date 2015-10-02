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


$('#calc').click(function(){
  start = $('#start_date').val();
  end = $('#end_date').val();

  if((start === '') || (end === '')){
    alert("required fields");
  }else{
  start = $('#start_date').val();
  end = $('#end_date').val();
  var hid = $('#hid').val();
    $.post('../loan_report_js.php', {
      start_date: start,
      end_date: end,
      id:hid
    }, function(data){
      $('#tableentry').html(data);

    });
  }

});


$('#genes').click(function(){
  start = $('#start_date').val();
  end = $('#end_date').val();
  if((start === '') || (end === '')){
    alert(start);
  }else{
  start = $('#start_date').val();
  end = $('#end_date').val();
  var hid = $('#hid').val();
    $.post('../transaction_filter.php', {
      start_date: start,
      end_date: end,
      id:hid
    }, function(data){
      $('#tableentry').html(data);

    });
  }

});

});
