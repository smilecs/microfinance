<?php
include_once('../conf/db_connect.php');
connect();
$id = $_POST['acct'];
$result = query("SELECT * FROM percent WHERE id='4'");
$row = mysql_fetch_array($result);
$val = $row['value'];
$date = date("Y-m-d");
query("INSERT INTO charge(emp_no, amount, type, date) VALUES('$id', '$val', '2', '$date')");
echo "<strong><i></i>New Balance</strong>
<p class=text-success><b>$bal</b></p>";
?>
