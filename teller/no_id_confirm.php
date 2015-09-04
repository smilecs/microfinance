<?php
include('../conf/db_connect.php');
connect();
$dep_id = $_POST['dep_id'];
$acct_no = $_POST['acct_no'];
$rs = query("SELECT * FROM account WHERE emp_id='$dep_id' AND acct_no='$acct_no'");
if(mysql_num_rows($rs) < 1){
  echo "<h3>This Account No does not belong to this depositor.</h3><br> login to your profile and confirm";
}else{
    echo "<input type=Number  name=amt class=form-control required placeholder=amount />";
  }

?>
