<?php
session_start();
include('conf/db_connect.php');
include('conf/misc.php');
connect();
$id = $_SESSION['id'];
$priv = $_SESSION['priv'];
$loaner_id = $_POST['loan_id'];
$amort = $_POST['amort'];
$result = query("SELECT * FROM loan WHERE emp_no='$loaner_id'");
$row= mysql_fetch_array($result);
$total = $row['total'];
$paid = $row['paid'];
$date = date("y-m-d");
$total_paid = $amort + $paid;
query("UPDATE loan SET paid='$total_paid' WHERE emp_no='$loaner_id'");
$bal = $total - $total_paid;
query("INSERT INTO payment(l_id, balance, emp_id, amount_pay, date) VALUES('$id', '$bal', '$loaner_id', '$amort', '$date')");
$result = query("SELECT * FROM loan");
while($row = mysql_fetch_array($result)){
  $id = $row['id'];
  $amount = $row['total'];
  $paid = $row['paid'];
  if($paid >= $amount){
    query("DELETE FROM loan WHERE id='$id'");
  }
}

folders($priv, "page=../pay_loan_form");
?>
