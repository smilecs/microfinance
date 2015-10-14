<?php
session_start();
include('conf/db_connect.php');
include('conf/misc.php');
connect();
$teller = $_SESSION['id'];
$priv = $_SESSION['priv'];
$acct_no = $_POST['acct'];
$new_amt = $_POST['bal'];
$amount = $_POST['amount'];
$rs = query("SELECT * FROM percent WHERE id='1'");
$row = mysql_fetch_array($rs);
$perc = $row['value'];
$new_amt1 = ($perc/100) * $amount;
$rss = query("SELECT * FROM account WHERE acct_no='$acct_no'");
$row = mysql_fetch_array($rss);
$tmp = $row['balance'];
$emp_id = $row['emp_id'];
 $date = date('Y-m-d');
 $new_tmp_amt = $tmp - $new_amt;
 query("INSERT INTO withdraw (interest_amount, emp_id, balance, acct_no, amount, total_deduction, date, teller_id) VALUES('$new_amt1', '$emp_id', '$new_tmp_amt', '$acct_no', '$amount', '$new_amt', '$date', '$teller')");
 query("UPDATE account SET balance='$new_tmp_amt' WHERE acct_no='$acct_no'");
 $rs = query("SELECT * FROM transaction WHERE date='$date' AND acct_no='$acct_no'");
 /*if(mysql_num_rows($rs) > 0){
   query("UPDATE transaction SET balance='$new_tmp_amt', debit='$new_amt', interest_amount='$new_amt1'");
 }else{*/
 query("INSERT INTO transaction (description, interest_amount, emp_id, balance, acct_no, amount, debit, date) VALUES('withdrawal', '$new_amt1', '$emp_id', '$new_tmp_amt', '$acct_no', '$amount', '$new_amt', '$date')");
//}
 $rs = query("SELECT * FROM ad_income");
 $row = mysql_fetch_array($rs);
 $bal = $row['balance'];
 $int1 = $bal - $amount;
 $int1 += $new_amt1;
 query("INSERT INTO income(income_type, amount, balance, date) VALUES('2', '$new_amt1', '$int1', $date)");
 query("UPDATE ad_income SET balance='$int1'");

echo "<strong id=result><i></i>New Balance</strong>
<p class=text-muted>$new_amt $tmp $new_tmp_amt</p>";
?>
