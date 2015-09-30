<?php
include_once('../conf/db_connect.php');
connect();
$acct = $_POST['acct'];
$result = query("SELECT * FROM percent WHERE id='4'");
$row = mysql_fetch_array($result);
$val = $row['value'];
$result = query("SELECT  * FROM account WHERE acct_no='$acct'");
$row = mysql_fetch_array($result);
$balance = $row['balance'];
$bal =  $balance - $val;
$id = $row['emp_id'];
$date = date("Y-m-d");
query("UPDATE account SET balance='$bal' WHERE emp_id='$id'");
query("INSERT INTO transaction (description, emp_id, balance, acct_no, amount, debit, date) VALUES('passbook', '$id', '$bal', '$acct', '$val', '$val', '$date')");
query("INSERT INTO charge(emp_no, amount, type, date) VALUES('$id', '$val', '2', '$date')");
echo "<strong><i></i>New Balance</strong>
<p class=text-success><b>$bal</b></p>";


?>
