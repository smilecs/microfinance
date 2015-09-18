<?php
include('conf/db_connect.php');
connect();
$amount = $_POST['amount'];
$acct_no = $_POST['acct_no'];
$result = query("SELECT * FROM percent WHERE id='1'");
$row = mysql_fetch_array($result);
$perc = $row['value'];
$new_amt = $amount;
$new_amt += ($perc/100) * $amount;
$int = ($perc/100) * $amount;

$rs = query("SELECT * FROM account WHERE acct_no='$acct_no'");
$row = mysql_fetch_array($rs);
$bal = $row['balance'];
$acct_type = $row['acct_type'];
$val = revenue()[0];
if($new_amt > $bal){
  echo "
  <strong><i></i>Total Available funds</strong>
  <p class=text-muted>$val</p>
  <strong><i></i>Interest on Withdrawal</strong>
  <p class=text-muted>$int</p>
  <strong><i></i>Total Withdrawal Amount</strong>
  <p class=text-danger><b>$new_amt</b></p>";

}else{
echo "<strong><i></i>Interest on Withdrawal</strong>
<p class=text-muted>$int</p>
<strong><i></i>Total Withdrawal Amount</strong>
<p class=text-success><b>$new_amt</b></p>
<input type=text id=amont value=$new_amt readonly>
<div id=new_bal>

</div>
</div>
";
}
?>
