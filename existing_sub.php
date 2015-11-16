<?php
session_start();
$id = $_SESSION['id'];
$priv = $_SESSION['priv'];
include_once('conf/db_connect.php');
include_once('conf/misc.php');
connect();
$p = 1;
$emp_id = $_POST['emp_id'];
$amt = $_POST['amt'];
$duration = $_POST['duration'];
$interest = $_POST['interest'];
$paid = $_POST['paid'];
$amort = $_POST['amort'];
$date = $_POST['date'];
$bal = $_POST['balance'];
$amt_total = $amt + $interest;

query("INSERT INTO loan(balance, p_no, duration, interest_amount, emp_no, date_incured, amount, amort, interest, total, paid) VALUES('', '$p', '$duration', '$interest', '$emp_id', '$date', '$amt', '$amort', '10', '$amt_total', '$paid')");
folders($priv, "page=../success");

 ?>
