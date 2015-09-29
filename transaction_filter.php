<?php
include('conf/db_connect.php');
connect();
$id = $_POST['id'];
$start = $_POST['start_date'];
$start = strtotime($start);
$end = $_POST['end_date'];
$end = strtotime($end);

$top = "
<table class=table id=tableentry>
<thead>
  <tr>
    <th>S/N</th>
    <th>DEBIT</th>
    <th>CREDIT</th>
    <th>INTEREST</th>
    <th>AMOUNT</th>
    <th>BALANCE</th>
    <th>DATE</th>
  </tr>
</thead>
<tbody>";
$body = ' ';
$type = '';

$result = query("SELECT * FROM transaction WHERE acct_no='$id'");
$i = 0;
while($row = mysql_fetch_array($result)){
  ++$i;
  $date1 = $row['date'];
  $debit = $row['debit'];
  $credit = $row['credit'];
  $bal = $row['balance'];
  $amount = $row['amount'];
  $interest = $row['interest_amount'];
  $date = strtotime($date1);
  if(($date >= $start) && ($date <= $end)){
  $body .= "<tr>
  <td>$i</td>
  <td>$debit</td>
  <td>$credit</td>
  <td>$interest</td>
  <td>$amount</td>
  <td>$bal</td>
  <td>$date1</td>
  </tr>";
}
  }
  $end = "</tbody></table>";
  $htm = $top . $body . $end;
   echo $htm;
   ?>
