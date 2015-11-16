<?php
include_once('../conf/db_connect.php');
connect();
$acct_no = $_POST['acct_no'];
$amount  = $_POST['amount'];
query("UPDATE account SET amount='$amount' WHERE acct_no='$acct_no'");
if(mysql_affected_rows() > 0){
  echo "<h3>Update Successful</h3>";
}else{
  echo "<h3>Invalid Account Number Confirm Number And try Again</h3>";
}

 ?>
