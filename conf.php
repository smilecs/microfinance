<?php
include('conf/db_connect.php');
connect();
$acct_no = $_POST['acct_no'];
//$row = mysql_fetch_array($result);

$rs = query("SELECT * FROM account WHERE acct_no='$acct_no'");
if(mysql_num_rows($rs) < 1){
  echo "<h3>Account not available</h3>";
}else{
$row = mysql_fetch_array($rs);
$exp = $row['duration'];
$acct_type = $row['acct_type'];
$expiry_date = $row['duration'];
$current_date = date('Y-m-d');
if(strtotime($expiry_date) <= strtotime($current_date)){
  echo "<h3>Account expiration reached Renew Account</h3>";
} else{
  echo "<h3>Account Valid</h3>";
}
}
 ?>
