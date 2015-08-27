<?php
include_once('conf/db_connect.php');
connect();
$acct_name = $_POST['acct_name'];
$emp_id = $_POST['emp_id'];
$acct_type = $_POST['acct_type'];
$prefix = "TSA";
if($acct_type == '2'){
  $prefix = "SSA";
}
//$prefix = str_split($acct_type, 3);
$k = $prefix;
for($i=0; $i<7; $i++){
  $k .= rand(0, 9);
}
$date = date('y-m-d');
query("INSERT INTO account(acct_name, emp_id, acct_type, d_opened, acct_no) VALUES('$acct_name', '$emp_id', '$acct_type', '$date', '$k')")
redirect(index.php?page=acct_suc&no=$k&type=$acct_type);
?>
