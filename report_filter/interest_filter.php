<?php
include('../conf/db_connect.php');
connect();
$arr = [0,0,0,0];
$result = query("SELECT * FROM income_type LEFT JOIN income ON income.income_type = income_type.id");
$body = '';
$i = 0;
$start = $_POST['start_date'];
$start = strtotime($start);
$end = $_POST['end_date'];
$end = strtotime($end);
$loan_amount = 0;
$withdraw = 0;
while($row = mysql_fetch_array($result)){
    $date = $row['date'];
  $time = strtotime($date);
  if(($time >= $start) && ($time <= $end)){
        $type = $row['name'];
        if($type == "loan"){
        $loan_amount +=  $row['amount'];
      }else{
        $withdraw += $row['amount'];
      }

  ++$i;
  $amount1 = $row['amount'];
    //    $amount += $row['amount'];
    $body .= "<tr>
    <td>$i</td>
    <td> $type</td>
    <td>$amount1</td>
    <td>$date</td>
    </tr>";
  }
}
  $table_top = "
  <div class=box>
  <div class=box-body no-padding>
  <table class=table id=tableentry>
  <thead>
    <tr>
      <th>S/N</th>
      <th>INTEREST TYPE</th>
      <th>AMOUNT</th>
      <th>DATE</th>
    </tr>
  </thead>
  <tbody>";

$top ="

<div class=box>
<div class=box-body no-padding>
<table class=table>
  <thead>
  <tr>
    <td>
      <strong><h4>INTEREST MONTHLY REPORT</h4></strong>
    </td>
  </tr>
  </thead>
  <tr>
    <th>
      Total Interest Recovered on Loan
    </th>
    <td>  </td>
  </tr>
  <tr>
    <th>
      Total Interest on Withdrawal
    </th>
    <td> </td>
  </tr>


</table>
</div>
</div>
";
$top .= $table_top;
  $end = "</tbody></table></div></div>";
  $htm =  $top . $body . $end;
  echo $htm;

 ?>
