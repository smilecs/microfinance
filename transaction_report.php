<?php
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
    <th>DESCRIPTION</th>
    <th>DATE</th>
  </tr>
</thead>
<tbody>";
$body = ' ';
$type = '';
$id = $_GET['id'];
$result = query("SELECT * FROM transaction WHERE acct_no='$id'");
$i = 0;
while($row = mysql_fetch_array($result)){
  ++$i;
  $date1 = $row['date'];
  $debit = $row['debit'];
  $credit = $row['credit'];
  $bal = $row['balance'];
  $amount = $row['amount'];
  $desc = $row['description'];
  $interest = $row['interest_amount'];
  $body .= "<tr>
  <td>$i</td>
  <td>$debit</td>
  <td>$credit</td>
  <td>$interest</td>
  <td>$amount</td>
  <td>$bal</td>
  <td>$desc</td>
  <td>$date1</td>
  </tr>";

  }
  $end = "</tbody></table><input type=text id=hid value=$id hidden/>";
  $htm = $top . $body . $end;
   echo $htm;
   ?>
