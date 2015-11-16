<?php
include_once('conf/db_connect.php');
connect();
$acct = $_POST['acct'];
$result = query("SELECT * FROM account WHERE acct_no='$acct'");
 if(!empty($result)){
   $row = mysql_fetch_array($result);
   $count = $row['number'];
   $ac = $row['save_amt'];
   if($count < 5){
  echo "<label>Shares Amount:     #3000 Pay Shares <input type=radio value=shares id=shares /></label><br><label>Bank Teller(optional)</label><input type='text' class=form-control id=bank_teller name='bank_teller'/><label for=amt>Deposit Amount</label><input type=Number name=amt class=form-control id=amt value=$ac >";
   }else{
   echo "<label>Bank Teller(optional)</label><input type='text' class=form-control id=bank_teller name='bank_teller'/><label for=amt>Deposit Amount</label><input type=Number name=amt class=form-control id=amt value=$ac >";
 }
 }else{
   echo "<h3>Invalid Account Number</h3>";
 }
 ?>
