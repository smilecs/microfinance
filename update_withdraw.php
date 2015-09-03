<?php
include('conf/db_connect.php');
include('conf/misc.php');
connect();
$teller = $_SESSION['id'];
$priv = $_SESSION['priv'];
$acct_no = $_GET['acct'];
$new_amt = $_GET['bal'];
$amount = $_GET['amount'];
//$new_amt = ($perc/100) * $amount;
$rss = query("SELECT * FROM account WHERE acct_no='$acct_no'");
$row = mysql_fetch_array($rss);
$tmp = $row['amount'];
$emp_id = $row['emp_id'];
 $date = date('y-m-d');
 $new_tmp_amt = $tmp - $new_amt;
 query("INSERT INTO withdraw (emp_id, balance, acct_no, amount, total_deduction, date, teller_id) VALUES('$emp_id', '$new_tmp_amt', '$acct_no', '$amount', '$new_amt', '$date', '$teller')");
 query("UPDATE account SET balance='$new_tmp_amt' WHERE acct_no='$acct_no'");
folder($priv);
?>
