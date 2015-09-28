<?php
include('conf/db_connect.php');
connect();
$id = $_POST['id'];
$top = "
<table class=table id=tableentry>
<thead>
  <tr>
    <th>S/N</th>
    <th>UserId</th>
    <th>Amount</th>
    <th>Balance</th>
    <th>Date</th>
  </tr>
</thead>
<tbody>";
$body = '';
$result = query("SELECT * FROM payment WHERE id='$id'");
 $i = 0;
 while($row = mysql_fetch_array($result)){
   ++$i;
   $bal = $row['balance'];
   $id = $row['emp_id'];
  $date1 = $row['date'];
   $date = strtotime($date1);
   $amount = $row['amount_pay'];
   if(($date >= $start) && ($date <= $end)){
$body .= "<tr>
<td>$i</td>
<td><$id</td>
<td>$amount</td>
<td>$bal</td>
<td>$date</td>

</tr>";
   }
}
$end = "</tbody></table>";
$htm = $top . $body . $end;
 echo $htm;
 ?>
