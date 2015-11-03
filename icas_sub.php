<?php
session_start();
$id = $_SESSION['id'];
$priv = $_SESSION['priv'];
include('conf/db_connect.php');
include('conf/misc.php');
connect();
$new_ans = '';
//$result = query("SELECT * FROM customer WHERE")
$p1 = $_POST['amt'];
$duration = 1;
$sm_amt = '';
$p = '';
$emp_id = $_POST['emp_id'];
$tk_home = $_POST['take_home'];
$r = 7 / 100;
$sm_amt = $p1 * ($r / 12) * 1;
$loan_amount1 = ($p1/1);
$loan_amount2 = ($sm_amt/$duration);
//$loan_amount1 = $new_ans * $p1;
//$loan_amount2 = $new_ans * $sm_amt;
$loan_amount = $loan_amount1 + $loan_amount2;
//$loan_amount1 = round($loan_amount1,2);
//$loan_amount2 = round($loan_amount2,2);
//$loan_amount = floor($loan_amount);
$loan_amount = round($loan_amount, 2);




$date = date('Y-m-d');
$charge = (1/100) * $loan_amount;

query("INSERT INTO icas(emp_no, charge, amount, interest, total, date, take_home) VALUES('$emp_id', '$charge', '$loan_amount1', '$loan_amount2', '$loan_amount', '$date', '$tk_home')");
$insert_id = mysql_insert_id();

$rs = query("SELECT * FROM ad_income");
$row = mysql_fetch_array($rs);
$bal = $row['balance'];
$int1 = $bal - $p1;
query("INSERT INTO income(income_type, amount, balance) VALUES('4', '$new_amt1', '$int1')");
query("UPDATE ad_income SET balance='$int1'");


folders($priv, "page=../view_amort&amort=$loan_amount&insert_id=$insert_id&type=icas");

 ?>
