<?php
$id = $_SESSION['id'];
$priv = $_SESSION['priv'];
include('conf/db_connect.php');
include('conf/misc.php');
connect();
$p1 = $_POST['amount'];
$duration = $_POST['duration'];
$emp_id = $_POST['emp_id'];
$rs = query("SELECT * FROM percent WHERE id='$id'");
$row = mysql_fetch_array($rs);
$tmp = $row['value'];
$sm_amt = simple_interest($p1, $tmp, $duration)
$p = $sm_amt + $p1;
$i = $tmp /100;
$d = 12 * $duration;
$j = $i/12;
$num = (1+$j);
$s = pow($num, $d);
$new_ans = $j/(1-$s);
$loan_amount = $new_ans * $p;
$date = date('Y-m-d');
query("INSERT INTO loan(emp_no, date_incured, amount, amort, interest, total) VALUES('$emp_id', '$date', '$p1', '$loan_amount', '$tmp', '$p')");
folders($priv, "page=../view_amort&amort=$loan_amount");

 ?>
