<?php
$type = $_GET['type'];
 ?>
<div class="box">
   <div class="box-body">
<table class="table">
<thead>
  <tr>
    <th>S/N</th>
    <th>UserId</th>
    <th>Amount</th>
    <th>Account No</th>
    <th>Date</th>
  </tr>
</thead>
<tbody>
<?php
$month = $_POST['month'];
$year = $_POST['year'];
$date = $year . "-" . $month;
$i= 0;
$total = 0;
$count_t = 0;
$count_s = 0;
$total_t = 0;
$total_s = 0;
$result = query("SELECT * FROM withdraw LEFT JOIN account ON withdraw.emp_id=account.emp_id WHERE date LIKE '$date-%'");
while($row = mysql_fetch_array($result)){
$id = $row['dep_id'];
$date = $row['date'];
$amount = $row['amount'];
$total += $amount;
$acct_type = $row['acct_type'];
$acct_no = $row['acct_no'];
if($acct_type == 1){
  $count_t++;
  $total_t += $amount;
}else{
  $count_s++;
  $total_s += $amount;
}
?>
<tr>
  <td>
<?php echo ++$i; ?>
</td>
  <td><?php echo $id;?></td>
  <td><?php echo $amount;?></td>
  <td><?php echo $acct_no;?></td>
  <td><?php echo $date;?></td>
</tr>
<?php
}
?>
<tr>
  <th>
    Total
  </th>
</tr>
<tr>
  <th>
    Thrift Total Deposit
  </th>
  <td></td>
  <td></td>
  <td></td>
  <th><?php echo $total_t; ?></th>
</tr>
<tr>
  <th>
    Special Total Deposit
  </th>
  <td></td>
  <td></td>
  <td></td>
  <th><?php echo $total_s; ?></th>
</tr>
<tr>
  <th>
    Sum Total
  </th>
  <td></td>
  <td></td>
  <td></td>
  <th><?php echo $total; ?></th>
</tr>
</tbody>
</table>
</div>
</div>
<a href="../w_report_print.php" class="btn btn-primary">Print</a>
