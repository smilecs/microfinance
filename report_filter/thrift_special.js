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

  $('#sum').click(function(){
    start = $('#start_date').val();
    end = $('#end_date').val();
    if((start === '') || (end === '')){
      alert("Both End & Start Date Fields Must Have Values");
    }else{
      $.post('../grand_report_mnt.php', {
        start_date: start,
        end_date: end
      }, function(data){
        $('#content').html(data);
      });
    }
  });



  $('#xy').click(function(){
    start = $('#start_date').val();
    end = $('#end_date').val();
    if((start === '') || (end === '')){
      alert("Both End & Start Date Fields Must Have Values");
    }else{
      $.post('../loan_allocated_n.php', {
        start_date: start,
        end_date: end
      }, function(data){
        $('#content').html(data);
      });
    }
  });


$('#loangens').click(function(){
  start = $('#start_date').val();
  end = $('#end_date').val();
  if((start === '') || (end === '')){
    alert("Both End & Start Date Fields Must Have Values");
  }else{
    $.post('../report_filter/interest_filter.php', {
      start_date: start,
      end_date: end
    }, function(data){
      $('#content').html(data);
    });
  }
});

$('#accgens').click(function(){
  start = $('#start_date').val();
  end = $('#end_date').val();
  if((start === '') || (end === '')){
    alert("Both End & Start Date Fields Must Have Values");
  }else{
    $.post('../report_filter/account_filter.php', {
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

$('#search_loan').keyup(function(){
  var loan_val = $('#search_loan').val();
  $.post('../report_filter/loan_search.php', {
    no: loan_val
  }, function(data){
    $('#content').html(data);
  });
});


});
