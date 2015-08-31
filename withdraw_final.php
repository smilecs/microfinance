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

$rs = query("SELECT * FROM account WHERE acct_no='$acct_no'");
$row = mysql_fetch_array($rs);
$bal = $row['balance'];
$acct_type['acct_type'];
if($new_amt > $bal){
echo "<div class=table-responsive>
  <table class=table>
  <tr>
  <th>
  Account Balance
  </th>
  <td>
  <h3>$bal</h3>
  </td>
  </tr>
  <tr>
  <th>
  Account Type
  </th>
  <td>
  $acct_type
  </td>
  </tr>
  <tr>
  <th>
  Expiry Date
  </th>
  <td>
  $exp
  </td>
  </tr>
  </table>
  </div>
  <div>
  <h3>Insufficient Funds withdrawal percent and personl amount cannot be reconciled</h3>
  </div>
  ";
}else{
echo "<div class=table-responsive>
<table class=table>
<tr>
<th>
Account Balance
</th>
<td>
<h3>$bal</h3>
</td>
</tr>
<tr>
<th>
Account Type
</th>
<td>
$acct_type
</td>
</tr>
<tr>
<th>
Expiry Date
</th>
<td>
$exp
</td>
</tr>
</table>
</div>
<div>
<form action=../update_withdraw.php?acct=$acct_no&bal=$new_amt&amount=$amount method=post>
<input type=submit class=btn primary/>
</form>
</div>
";
}
?>
