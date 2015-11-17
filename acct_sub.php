<?php
session_start();
$priv = $_SESSION['priv'];
include_once('conf/db_connect.php');
include_once('conf/misc.php');
connect();
function acct($prefix){
  for($i=0; $i<7; $i++){
    $prefix .= rand(0, 9);
  }
  $result = query("SELECT * FROM account WHERE acct_no='$prefix'");
  if(mysql_num_rows($result) > 0){
    acct($prefix);
  }else{
    return $prefix;
  }
}
$bal = $_POST['bal'];
$share = $_POST['share'];
$value = $_POST['value'];
$emp_id = $_POST['emp_id'];
$acct_name = get_teller_name($emp_id);
$save = $_POST['save_amt'];
$acct_type = $_POST['acct_type'];
$prefix = "TSA";
$duration = '';
$rs = query("SELECT * FROM customer WHERE id = '$emp_id'");
$row = mysql_fetch_array($rs);
$dept = $row['dept'];
if($acct_type == 1){
  $result = query("SELECT value from percent WHERE p_name='duration'");
  $row = mysql_fetch_array($result);
  $duration = $row['value'];
}else{
$duration = $_POST['duration'];
$prefix = "SSA";
}
//$prefix = str_split($acct_type, 3);

$k = acct($prefix);

$date = date('Y-m-d');
$end = date('Y-m-d', strtotime('+'.$duration .'years'));
query("INSERT INTO account(department, shares, balance, number, save_amt, duration, acct_name, emp_id, acct_type, d_opened, acct_no) VALUES('$dept', '$value', '$bal', '$share', '$save', '$end', '$acct_name', '$emp_id', '$acct_type', '$date', '$k')");
folders($priv, "page=../acct_suc&no=$k&type=$acct_type");

?>
