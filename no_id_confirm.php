<?php
include('../conf/db_connect.php');
connect();
$dep_id = $_POST['dep_id'];
$acct_no = $_POST['acct_no'];
$rs = query("SELECT * FROM account WHERE emp_id='$dep_id'");
if(mysql_num_rows($rs) < 1){
  echo "<h3>This Depositer ID does not exist please check and try again</h3>"
}else{
  $row = mysql_fetch_array($rs);
  $tmp_acct = $row['acct_no'];
  if($acct_no != $tmp_acct){
    echo "<h3>This Account No does not belong to this depositor.</h3><br> login to your profile and confirm"
  }
}

?>
