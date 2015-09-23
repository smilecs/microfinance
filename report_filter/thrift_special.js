$(document).ready(function(){
  var start = '';
  var end = '';

  $('#gene').click(function(){
    start = $('#start_date').val();
    end = $('#end_date').val();
    if((start === '') || (end === '')){
      alert("Both End & Start Date Fields Must Have Values");
    }else{
      $.post('../report_filter/loan.php', {
        start_date: start,
        end_date: end
      }, function(data){
        $('#content').html(data);
      });
    }
  });


  $('#gen').click(function(){
    start = $('#start_date').val();
    end = $('#end_date').val();
    if((start === '') || (end === '')){
      alert("Both End & Start Date Fields Must Have Values");
    }else{
      $.post('../report_filter/thrift_special.php?type=1', {
        start_date: start,
        end_date: end
      }, function(data){
        $('#content').html(data);
      });
    }
  });

  $('#gens').click(function(){
    start = $('#start_date').val();
    end = $('#end_date').val();
    if((start === '') || (end === '')){
      alert("Both End & Start Date Fields Must Have Values");
    }else{
      $.post('../report_filter/thrift_special.php?type=2', {
        start_date: start,
        end_date: end
      }, function(data){
        $('#content').html(data);
      });
    }
  });



});
