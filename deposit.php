<?php
include('conf/db_connect.php');
connect();
session_start();
$priv = $_SESSION['priv'];
$teller_id = $_SESSION['id'];
$dep_id = $_POST['dep_id'];
$acct_no = $_POST['acct_no'];
$amt = $_POST['amt'];
$date = date('y-m-d');
acct_check($acct_no);
query("INSERT INTO deposit (dep_id, teller_id, acct_no, amount, date) VALUES('$dep_id', '$teller_id', '$acct_no', '$amt', '$date')");
if($priv = 0){
  redirect("teller/index.php");
}
redirect("admin/index.php");
?>
