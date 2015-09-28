<?php
include('conf/db_connect.php');
connect();
$start = $_POST['start_date'];
$start = strtotime($start);
$end = $_POST['end_date'];
$end = strtotime($end);
$top = "
<table class=table id=tableentry>
<thead>
  <tr>
    <th>S/N</th>
    <th>NAME</th>
    <th>TOTAL PAID</th>
    <th>AMT_MNT</th>
    <th>AMORT_INTEREST</th>
    <th>BALANCE</th>
    <th>DATE</th>
  </tr>
</thead>
<tbody>";
$body = ' ';
$result = query("SELECT * FROM payment");
 $i = 0;
 while($row = mysql_fetch_array($result)){
   ++$i;
   $amount = $row['balance'];
   $id = $row['emp_id'];
   $name = get_teller_name($id);
   $date1 = $row['date'];
   $date = strtotime($date1);
   $paid = $row['amount_pay'];
   $interest = $row['amort_interest'];
  $amt =$row['amort_loan'];
   if(($date >= $start) && ($date <= $end)){
$body .= "<tr>
<td>$i</td>
<td>$name</td>
<td>$paid</td>
<td>$amt</td>
<td>$interest</td>
<td>$amount</td>
<td>$date1</td>
</tr>";
   }
}
$end = "</tbody></table>";
$htm = $top . $body . $end;
 echo $htm;
 ?>
