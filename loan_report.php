<?php
$id = $_GET['id'];
 ?>
<input type="text" id="hid" value="<?php echo $id; ?>" hidden/>
<div class="row">
<div class="col-md-12">
<div class="box box-primary">
<div class="box-body">
<div class="form-group col-xs-3">
  <label for="start_date">Start Date</label>
  <input type="date" class="form-control" id="start_date">
</div>

<div class="form-group col-xs-3">
  <label for="end_date">End Date</label>
  <input type="date" class="form-control" id="end_date">
</div>

<div class="form-group col-xs-2">
  <label for="withdraw"></label>
  <button class="form-control" id="calc">generate</button>
</div>
 </div></div></div></div>

<table class="table" id="tableentry">
<thead>
  <tr>
    <th>S/N</th>
    <th>UserId</th>
    <th>Amount</th>
    <th>Balance</th>
    <th>Date</th>
  </tr>
</thead>
<tbody>
<?php
$i = 0;
$total = 0;
$id = $_GET['id'];
$result = query("SELECT * FROM payment LEFT JOIN customer ON customer.id=payment.emp_id WHERE emp_id = $id");
while($row = mysql_fetch_array($result)){
$id = $row['emp_id'];
$date = $row['date'];
$amount = $row['amount_pay'];
$total += $amount;
//$acct_type = $row['acct_type'];
$bal = $row['balance'];
?>
<tr>
  <td>
<?php echo ++$i; ?>
</td>
  <td><?php echo $id;?></td>
  <td><?php echo $amount;?></td>
  <td><?php echo $bal;?></td>
  <td><?php echo $date;?></td>
</tr>
<?php
}
?>
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
