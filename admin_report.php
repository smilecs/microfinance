<div class="box box-primary">
<div class="box-body">
<table class="table" id="tableentry">
<thead>
  <tr>
    <th>S/N</th>
    <th>Amount</th>
    <th>Description</th>
    <th>Date</th>
  </tr>
</thead>
<tbody>
<?php
$i = 0;
$total = 0;
$result = query("SELECT * FROM admin");
while($row = mysql_fetch_array($result)){
$date = $row['date'];
$amount = $row['amount'];
$total += $amount;
//$acct_type = $row['acct_type'];
$desc = $row['desc'];
?>
<tr>
  <td>
<?php echo ++$i; ?>
</td>
  <td><?php echo $amount;?></td>
  <td><?php echo $desc;?></td>
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
</div>
</div>
