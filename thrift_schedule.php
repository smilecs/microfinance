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
<table class="table">
<thead>
  <tr>
    <th>s/n</th>
    <th>UserId</th>
    <th>FullName</th>
    <th>Amount Saved</th>
    <th>Account No</th>
  </tr>
</thead>
<tbody>
<?php
$i= 0;
$total = 0;
$result = query("SELECT emp_id, surname, firstname, save_amt, acct_no FROM customer LEFT JOIN account ON customer.id=account.emp_id WHERE acct_type='$tp'");
while($row = mysql_fetch_array($result)){
$id = $row['emp_id'];
$fullname = $row['firstname'] . " " . $row['surname'];
$amount = $row['save_amt'];
$total += $amount;
$acct_no = $row['acct_no'];
?>
<tr>
  <td>
<?php echo ++$i; ?>
</td>
  <td><?php echo $id;?></td>
  <td><?php echo $fullname;?></td>
  <td><?php echo $amount;?></td>
  <td><?php echo $acct_no;?></td>
</tr>
<?php
}
?>
<tr>
  <th>
    Total
  </th>
  <td></td>
    <td></td>
      <td></td>
  <th>
    <?php echo $total?>
  </th>
</tr>
</tbody>
</table>
</div>
</div>
<a href="../print_account.php?type=<?php echo $type;?>" class="btn btn-primary">Print</a>
