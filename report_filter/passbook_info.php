<?php
include_once('../conf/db_connect.php');
connect();
$acct_no = $_POST['acct_no'];
$rs = query("SELECT * FROM account WHERE acct_no='$acct_no'");
$row = mysql_fetch_array($rs);
$bal = $row['balance'];
echo "<strong><i></i>Available Balance</strong>
<p class=text-success><b>$bal</b></p><hr>
<div id=new_bal>
</div>";
?>
