<?php
include('conf/db_connect.php');
connect();
session_start();
if(isset($_POST['shares'])){
  $shares = $_POST['shares'];
}
$priv = $_SESSION['priv'];
$teller_id = $_SESSION['id'];
$acct_no = $_POST['acct_no'];
acct_check($acct_no);
$amt = $_POST['amt'];
$bank_teller = "default";
if(isset($_POST['bank_teller'])){
  $bank_teller = $_POST['bank_teller'];
}

$date = date('y-m-d');
$result = query("SELECT * FROM account WHERE acct_no='$acct_no'");
$row = mysql_fetch_array($result);
$balance = $row['balance'] + $amt;
//$share = $row['shares'];
$no = $row['number'];
$type = $row['acct_type'];
/*if($shares == "shares"){
  $share += $share;
  $no += 1;

query("UPDATE account SET shares='$share', number='$no' WHERE acct_no='$acct_no'");

}*/
query("INSERT INTO deposit (bank_teller, acct_type, teller_id, acct_no, amount, date, balance) VALUES('$bank_teller', '$type', '$teller_id', '$acct_no', '$amt', '$date', '$balance')");
/*$rs = query("SELECT * FROM transaction WHERE date='$date' AND acct_no='$acct_no'");
if(mysql_num_rows($result) > 0) {
  query("UPDATE transaction SET credit='$amt', balance='$balance'");
}else{*/
query("INSERT INTO transaction (bank_teller, description, acct_no, credit, date, balance) VALUES('$bank_teller', 'deposit', '$acct_no', '$amt', '$date', '$balance')");
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
