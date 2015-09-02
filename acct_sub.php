<?php
session_start();
$priv = $_SESSION['priv'];
include_once('conf/db_connect.php');
include_once('conf/misc.php');
connect();
$acct_name = $_POST['acct_name'];
$emp_id = $_POST['emp_id'];
$save = $_POST['save_amt'];
$acct_type = $_POST['acct_type'];
$prefix = "TSA";
$duration = '';
if($acct_type == 1){
  $result = query("SELECT value from percent WHERE p_name='duration'");
  $row = mysql_fetch_array($result);
  $duration = $row['value'];
}else{
$duration = $_POST['duration'];
$prefix = "SSA";
}
//$prefix = str_split($acct_type, 3);
$k = $prefix;
for($i=0; $i<7; $i++){
  $k .= rand(0, 9);
}
$date = date('Y-m-d');

$end = date('Y-m-d', strtotime('+'.$duration .'years'));
query("INSERT INTO account(save_amt, duration, acct_name, emp_id, acct_type, d_opened, acct_no) VALUES('$save', '$end', '$acct_name', '$emp_id', '$acct_type', '$date', '$k')");
folders($priv, "page=../acct_suc&no=$k&type=$acct_type");
?>
