<?php
include('conf/db_connect.php');
connect();
session_start();
$priv = $_SESSION['priv'];
$teller_id = $_SESSION['id'];
$acct_no = $_POST['acct_no'];
acct_check($acct_no);
$amt = $_POST['amt'];
$date = date('y-m-d');
$result = query("SELECT * FROM account WHERE acct_no='$acct_no'");
$row = mysql_fetch_array($result);
$balance = $row['balance'] + $amt;
$type = $row['acct_type'];
query("INSERT INTO deposit (acct_type, teller_id, acct_no, amount, date, balance) VALUES('$type', '$teller_id', '$acct_no', '$amt', '$date', '$balance')");
/*$rs = query("SELECT * FROM transaction WHERE date='$date' AND acct_no='$acct_no'");
if(mysql_num_rows($result) > 0) {
  query("UPDATE transaction SET credit='$amt', balance='$balance'");
}else{*/
query("INSERT INTO transaction (description, acct_no, credit, date, balance) VALUES('deposit', '$acct_no', '$amt', '$date', '$balance')");
//}$t_id = mysql_insert_id();
$result = query("SELECT * FROM account WHERE acct_no='$acct_no'");
$row = mysql_fetch_array($result);
$balance = $row['balance'];
$amt_todate = $row['amt_todate'];
$amt_todate += $amt;
$amt += $balance;
query("UPDATE account SET balance='$amt', amt_todate='$amt_todate' WHERE acct_no='$acct_no'");

$rs = query("SELECT * FROM ad_income");
$row = mysql_fetch_array($rs);
$bal = $row['balance'];
$int1 = $bal + $amt;

query("INSERT INTO income(date, income_type, amount, balance) VALUES('$date', '3', '$amt', '$int1')");
query("UPDATE ad_income SET balance='$int1'");

$res = "<strong id=result><i></i>New Balance</strong>
<p class=text-muted>$amt</p>";
echo $res;
?>
