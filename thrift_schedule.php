<?php
$type = $_GET['type'];
$tp = '';
$msg = '';
switch ($type) {
  case 'special':
    $tp = '2';
    $msg = "Special Account Schedule";
    break;

  default:
    $tp = '1';
    $msg = "Thrift Account Schedule";
    break;
}
 ?>
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title"><?php echo $msg;?></h3>
  </div>
   <div class="box-body">
<?php
$rss = query("SELECT * FROM faculty");
while($row = mysql_fetch_array($rss)){
  $faculty = $row['id'];
  $name1 =$row['name'];

     $rs = query("SELECT * FROM department WHERE faculty='$faculty'");
     while($row = mysql_fetch_array($rs)){
       $idd = $row['id'];
       $name = $row['dep_name'];
       $result = query("SELECT * FROM customer LEFT JOIN account ON customer.id=account.emp_id WHERE acct_type='$tp' AND department='$idd'");
       if(mysql_num_rows($result) < 1){


       }else{
?>
<table class="table">
<thead>

  <tr>
    <th>
      Faculty of   <?php echo $name1; ?>
    </th>

    <th><h3>Department of    <?php echo $name?></h3></th>
  </tr>
  <tr>
    <th>s/n</th>
    <th>UserId</th>
        <th>Employee No</th>
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
$emp = $row['employee_no'];
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
  <td><?php echo $emp;?></td>
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
}}
}
 ?>
</div>
</div>
<a href="../print_account.php?type=<?php echo $type;?>" class="btn btn-primary">Print</a>
