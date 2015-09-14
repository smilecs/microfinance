<?php
include('conf/db_connect.php');
connect();
$top = "
<table class=table id=tableentry>
<thead>
  <tr>
    <th>S/N</th>
    <th>MEMBER ID</th>
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
   $paid = $row['paid'];
   $interest = $row['interest_amount'];
  $amt =$row['amort'];
$body .= "<tr>
<td>$i</td>
<td>$id</td>
<td>$name</td>
<td>$amount</td>
<td>$paid</td>
<td>$amt</td>
<td>$interest</td>
<td>$date1</td>
</tr>";

}
$end = "</tbody></table>";
$htm = $top . $body . $end;
 echo $htm;
 ?>
