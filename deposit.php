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

query("INSERT INTO deposit (teller_id, acct_no, amount, date) VALUES('$teller_id', '$acct_no', '$amt', '$date')");
//$t_id = mysql_insert_id();
$result = query("SELECT * FROM account WHERE acct_no='$acct_no'");
$row = mysql_fetch_array($result);
$balance = $row['balance'];
$amt_todate = $row['amt_todate'];
$amt_todate += $amt;
$amt += $balance;
query("UPDATE account SET balance='$amt', amt_todate='$amt_todate' WHERE acct_no='$acct_no'");
$res = "<strong id=result><i></i>New Balance</strong>
<p class=text-muted>$amt</p>";
echo $res;
?>
