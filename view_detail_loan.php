<?php
$id = $_GET['id'];
$result = query("SELECT * FROM loan WHERE id='$id'");
$row = mysql_fetch_array($result);
$amount = $row['total'];
$id = $row['emp_no'];
$name = get_teller_name($id);
$date = $row['date_incured'];
$interest = $row['interest'];
$sure1 = $row['suretie1'];
$sure2 = $row['suretie2'];
$balance = $row['balance'];
$duration = $row['duration'];
$rs = query("SELECT * FROM customer WHERE employee_no='$sure1'");
$row = mysql_fetch_array($rs);
$s_name1 = $row['surname'] . " " . $row['firstname'];
$phone = $row['phone'];

$rs = query("SELECT * FROM customer WHERE employee_no='$sure2'");
$row = mysql_fetch_array($rs);
$s_name2 = $row['surname'] . " " . $row['firstname'];
$phone2 = $row['phone'];
?>
<div class="box">
<div class="box-body no-padding">
<table class="table">
  <tbody>
    <tr>
    <th>Name</th>
    <td><?php echo $name; ?></td>
    <th>Date Incured</th>
    <td><?php echo $date;?></td>
    </tr>
    <tr>
    <th>Loan Collected</th>
    <td><?php echo $amount; ?></td>
    <th>Interest</th>
    <td><?php echo $interest; ?></td>
    </tr>

    <tr>
    <th>Balance</th>
    <td><?php echo $balance; ?></td>
    </tr>
    <tr>
    <th>Duration</th>
    <td><?php echo $duration; ?></td>
    </tr>
    
    <tr>
    <th>Suretie Name(1st)</th>
    <td><?php echo $s_name1; ?></td>
    <td><?php echo $phone; ?></td>
    </tr>
    <tr>
    <th>Suretie Name(2nd)</th>
    <td><?php echo $s_name2; ?></td>
    <td><?php echo $phone2; ?></td>
    </tr>
  </tbody>
</table>
</div>
</div>
