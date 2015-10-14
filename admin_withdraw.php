<?php
include_once("../conf/db_connect.php");
connect();
$date = date('Y-m-d');
$amt = $_POST['amt'];
$desc = $_POST['desc'];
$rs = query("SELECT * FROM ad_income");
$row = mysql_fetch_array($rs);
$bal = $row['balance'];
$int1 = $bal - $amt;
//$int1 += $new_amt1;
//query("INSERT INTO income(income_type, amount, balance, date) VALUES('2', '$new_amt1', '$int1', $date)");
query("UPDATE ad_income SET balance='$int1'");
query("INSERT INTO admin(date, desc, amount) VALUES('$date', '$desc', '$amt')");

echo "<strong><i></i>New Balance</strong>
<p class=text-muted>$int1</p>
";
?>
