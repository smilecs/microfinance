<?php
include_once('conf/db_connect.php');
connect();
$id = $_POST['id'];
$result = query("SELECT * FROM account WHERE emp_id='$id' AND acct_type='1'");
$row = mysql_fetch_array($result);
$amt = $row['amt_todate'] *3;
echo $amt;
 ?>
