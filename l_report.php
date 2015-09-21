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
    <th>AMOUNT</th>
    <th>PAID</th>
    <th>AMT_MNT</th>
    <th>INTEREST</th>
    <th>DATE</th>
  </tr>
</thead>
<tbody>";
$body = ' ';
$result = query("SELECT * FROM loan");
 $i = 0;
 while($row = mysql_fetch_array($result)){
   ++$i;
   $amount = $row['amount'];
   $id = $row['emp_no'];
   $name = get_teller_name($id);
   $date1 = $row['date_incured'];
   $date = strtotime($date1);
   $paid = $row['paid'];
   $interest = $row['interest_amount'];
  $amt =$row['amort'];
   if(($date >= $start) && ($date <= $end)){
$body .= "<tr>
<td>$i</td>
<td>$name</td>
<td>$amount</td>
<td>$paid</td>
<td>$amt</td>
<td>$interest</td>
<td>$date1</td>
</tr>";
   }
}
$end = "</tbody></table>";
$htm = $top . $body . $end;
 echo $htm;
 ?>
