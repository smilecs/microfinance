<?php
include('../conf/db_connect.php');
connect();
$acct_no = $_POST['acct_no'];
$rs = query("SELECT * FROM account WHERE acct_no='$acct_no'");
$row = mysql_fetch_array($rs);
$amount = $row['save_amt'];
if(mysql_num_rows($rs) < 1){
  echo "<h3>This Account No does not belong to this depositor.</h3><br> login to your profile and confirm";
}else{
    echo "<input type=Number  name=amt class=form-control value=$amount >";
  }


?>
