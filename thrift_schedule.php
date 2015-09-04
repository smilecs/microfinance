<?php
$type = $_GET['type'];
$tp = '';
switch ($type) {
  case 'special':
    $tp = '2';
    break;

  default:
    $tp = '1';
    break;
}
 ?>
<div class="box">
   <div class="box-body">
<?php
     $rs = query("SELECT * FROM department");
     while($row = mysql_fetch_array($rs)){
       $idd = $row['id'];
       $name = $row['dep_name'];
?>
<table class="table">
<thead>
  <tr>
    <th><h3>Department:    <?php echo $name?></h3></th>
  </tr>
  <tr>
    <th>s/n</th>
    <th>UserId</th>
    <th>FullName</th>
    <th>Monthly Amt</th>
    <th>Amount Todate</th>
    <th>Balance</th>
  </tr>
</thead>
<tbody>
<?php
$i= 0;
$amt_total = 0;
$bal_total = 0;
$total = 0;

$result = query("SELECT * FROM customer LEFT JOIN account ON customer.id=account.emp_id WHERE acct_type='$tp' AND department='$idd'");
while($row = mysql_fetch_array($result)){
$id = $row['emp_id'];
$fullname = $row['firstname'] . " " . $row['surname'];
$amount = $row['save_amt'];
$total += $amount;
$amt_todate = $row['amt_todate'];
$amt_total += $amt_todate;
$balance = $row['balance'];
$bal_total += $balance;
?>
<tr>
  <td>
<?php echo ++$i; ?>
</td>
  <td><?php echo $id;?></td>
  <td><?php echo $fullname;?></td>
  <td><?php echo $amount;?></td>
  <td><?php echo $amt_todate;?></td>
  <td><?php echo $balance;?></td>
</tr>
<?php
}

?>
<tr>

</tr>
<tr>
  <th>
    Total
  </th>
  <td></td>
    <td></td>
  <th>
    <?php echo $total?>
  </th>
  <th>
    <?php echo $amt_total; ?>
  </th>
  <th>
    <?php echo $bal_total; ?>
  </th>
</tr>
</tbody>
</table>
<?php
}
 ?>
</div>
</div>
<a href="../print_account.php?type=<?php echo $type;?>" class="btn btn-primary">Print</a>
