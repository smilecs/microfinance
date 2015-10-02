<?php
include('conf/db_connect.php');
connect();
$acct = $_POST['acct'];
$result = query("SELECT * FROM account WHERE acct_no='$acct'");
 if(!empty($result)){
   $row = mysql_fetch_array($result);
   $ac = $row['save_amt'];
   echo "<label for=amt>Deposit Amount</label><input type=Number name=amt class=form-control id=amt value=$ac >";
 }
 ?>
