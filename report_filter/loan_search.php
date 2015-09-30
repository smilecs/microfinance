<?php
include_once('../conf/db_connect.php');
connect();
$employee_no = $_POST['no'];
$body = '';
$result = query("SELECT * FROM customer LEFT JOIN loan  ON loan.emp_no=customer.id WHERE employee_no='$employee_no'");
$i = 0;
$sum = 0;
while($row = mysql_fetch_array($result)){
  $date1 = $row['date_incured'];
//  $date = strtotime($date1);

$id = $row['emp_no'];
$fullname = $row['firstname'] . "  " . $row['surname'];
$amount = $row['amort'];
$no = $row['employee_no'];
$paid = $row['paid'];
$total = $row['total'];
$bal = $total - $paid;
$bal -= $amount;
$sum += $amount;
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

$end =
"</tbody>
</table>
</div>
</div>";
$table_head = "<div class=box>
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
";
$htm = $table_head . $body . $end;
echo $htm;
?>
