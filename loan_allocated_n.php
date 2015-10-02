<?php
include('conf/db_connect.php');
connect();

$start = $_POST['start_date'];
$start = strtotime($start);
$end = $_POST['end_date'];
$end = strtotime($end);

$result = query("SELECT * FROM loan");
$count = 0;
$total_amount = 0;
while($row= mysql_fetch_array($result)){
  $date1 = $row['date_incured'];
  $date = strtotime($date1);

  if(($date >= $start) && ($date <= $end)){
  $total_amount += $row['total'];
  ++$count;
}
}

 $top = "
 <div class=box>
   <div class=box-body>
<table class=table>
  <tr>
    <th>Total Number of Loan Allocated For The Period:</th>
    <th>$count</th>
  </tr>
  <tr>
    <th>Total Amount For The Period:</th>
    <th>$total_amount</th>
  </tr>

</table>
</div>
</div>

<div class=box>
  <div class=box-body>
<table class=table>
<thead>
  <tr>
    <th>S/N</th>
    <th>Employee No</th>
    <th>FullName</th>
    <th>Loan</th>
    <th>Monthly Amount</th>
    <th>Balance to Pay</th>
    <th>Date</th>


  </tr>
</thead>
<tbody>";
$body = '';
$result = query("SELECT * FROM loan LEFT JOIN customer ON loan.emp_no=customer.id");
$i = 0;
$sum = 0;
while($row = mysql_fetch_array($result)){
  $date1 = $row['date_incured'];
  $date = strtotime($date1);

$id = $row['emp_no'];
$fullname = $row['firstname'] . "  " . $row['surname'];
$amount = $row['amort'];
$no = $row['employee_no'];
$paid = $row['paid'];
$total = $row['total'];
$bal = $total - $paid;
$bal = $row['balance'];
$sum += $amount;
if(($date >= $start) && ($date <= $end)){
++$i;
$body .="
<tr>
  <td>$i</td>
    <td>$no</td>
  <td>$fullname</td>
  <td>$total</td>
  <td>$amount</td>
  <td>$bal</td>
  <td>$date1</td>

</tr>";
}
}

$end =
"</tbody>
</table>
</div>
</div>";
$htm = $top . $body . $end;
echo $htm;
?>
