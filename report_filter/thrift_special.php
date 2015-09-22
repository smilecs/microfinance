<?php
include('../conf/db_connect.php');
connect();
$body = '';
$start = $_POST['start_date'];
$start = strtotime($start);
$end = $_POST['end_date'];
$end = strtotime($end);
$type = $_GET['type'];
//  $arr = [0,0,0,0];
  $result = query("SELECT * FROM deposit WHERE acct_type='$type'");
  $count = 0;
  $amount = 0;
  $i = 0;
  $body = '';
  while($row = mysql_fetch_array($result)){
    $date = $row['date'];
    $acct_no = $row['acct_no'];
    $time = strtotime($date);
    if(($time >= $start) && ($time <= $end)){
      ++$i;
      $amount1 = $row['amount'];
      $count += 1;
      $amount += $row['amount'];
      $body .= "<tr>
      <td>$i</td>
      <td><a href=index.php?page=../dep_witd&id=$acct_no> $acct_no</a></td>
      <td>$amount1</td>
      <td>$date</td>
      </tr>";

    }

    }
    //$arr[0] = $count;
    //$arr[1] = $amount;

$t_n_d = $count;
$t_n_d_a = $amount;
//$body = duration_filter(1, $start, $end)[2];
$overall = thrift_special(1)[1];
$top = "<div class=box>
<div class=box-body no-padding>
<table class=table>
  <thead>
  <tr>

    <td>
      <strong><h4>THRIFT SAVINGS REPORT</h4></strong>
    </td>
  </tr>
  </thead>
  <tr>
    <th>
      Total Number Deposits
    </th>
    <td>$t_n_d</td>
  </tr>
  <tr>
    <th>
      Total Amount Deposited
    </th>
    <td>$t_n_d_a</td>
  </tr>
    <tr>
    <th>
      Overall Deposit Amount
    </th>
    <td> $overall</td>
  </tr>

</table>
</div>
</div>
";

$table_top = "
<div class=box>
<div class=box-body no-padding>
<table class=table id=tableentry>
<thead>
  <tr>
    <th>S/N</th>
    <th>ACCT NO</th>
    <th>AMOUNT</th>
    <th>DATE</th>
  </tr>
</thead>
<tbody>";
$end = "</tbody></table></div></div>";
$top .= $table_top;
$htm = $top . $body . $end;
echo $htm;
?>
