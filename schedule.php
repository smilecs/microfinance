<table class="table">
<thead>
  <tr>
    <th>Id</th>
    <th>FullName</th>
    <th>Amount</th>
    <th>Balance</th>
  </tr>
</thead>
<tbody>
<?php
$result = query("SELECT emp_no, surname, firstname, amount, paid, total FROM customer LEFT JOIN loan ON customer.id=loan.emp_no");
while($row = mysql_fetch_array($result)){
$id = $row['emp_no'];
$fullname = $row['firstname'] . $row['surname'];
$amount = $row['amount'];
$paid = $row['paid'];
$total = $row['total'];
$bal = $total - $paid;
?>
<tr>
  <td><?php echo $id;?></td>
  <td><?php echo $fullname;?></td>
  <td><?php echo $amount;?></td>
  <td><?php echo $bal;?></td>
</tr>
<?php
}
?>
</tbody>
</table>
