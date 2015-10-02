<?php
$result = query("SELECT * FROM loan");
$count = 0;
$total_amount = 0;
while($row= mysql_fetch_array($result)){
  $total_amount += $row['total'];
  ++$count;
}
 ?>

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
   <button class="form-control" id="xy">generate</button>
 </div>
 <div class="form-group">
   <label for="search_loan"></label><br>
<input type="text" class="form-group col-xs-3" id="search_loan" placeholder="Employee No Here">
 </div>
  </div></div></div></div>

<div id="content">
 <div class="box">
   <div class="box-body">
<table class="table">
  <tr>
    <th>Total Count:</th>
    <th><?php echo $count; ?></th>
  </tr>
  <tr>
    <th>Total Amount:</th>
    <th><?php echo $total_amount; ?></th>
  </tr>

</table>
</div>
</div>

<div class="box">
  <div class="box-body">
<table class="table">
<thead>
  <tr>
    <th>S/N</th>
    <th>Employee No</th>
    <th>FullName</th>
      <th>Total Loan</th>
    <th>Monthly Amount</th>
    <th>Balance to Pay</th>
    <th>Date</th>
  </tr>
</thead>
<tbody>
<?php
$result = query("SELECT * FROM loan LEFT JOIN customer ON loan.emp_no=customer.id");
$i = 0;
$sum = 0;
while($row = mysql_fetch_array($result)){
$id = $row['emp_no'];
$fullname = $row['firstname'] . $row['surname'];
$amount = $row['amort'];
$no = $row['employee_no'];
$paid = $row['paid'];
$total = $row['total'];
$date = $row['date_incured'];
$bal = $total - $paid;
$bal = $row['balance'];
$sum += $amount;
?>
<tr>
  <td><?php echo ++$i;?></td>
    <td><?php echo $no; ?></td>
  <td><?php echo $fullname;?></td>
  <td><?php echo $total;?></td>
  <td><?php echo $amount;?></td>
  <td><?php echo $bal;?></td>
    <td><?php echo $date;?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>
</div>
