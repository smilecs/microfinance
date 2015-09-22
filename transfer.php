<?php
include('conf/db_connect.php');
connect();

$result = query("SELECT * FROM withdraw");
 while($row = mysql_fetch_array($result)){
   $acct_no = $row['acct_no'];
   $amount = $row['amount'];
   $total_deduction = $row['total_deduction'];
   $date = $row['date'];
   $balance = $row['balance'];
   $interest_amount = $row['interest_amount'];
   $emp_id = $row['emp_id'];
   query("INSERT INTO transaction (debit, acct_no, amount, total_deduction, date, balance, interest_amount, emp_id) VALUES('$total_deduction', '$acct_no', '$amount', '$total_deduction', '$date', '$balance', '$interest_amount', '$emp_id')");
 }
 $rs = query("SELECT * FROM deposit");
while($row = mysql_fetch_array($rs)){
  $type = $row['acct_type'];
  $teller_id = ['teller_id'];
  $acct_no = $row['acct_no'];
  $amt = $row['amount'];
  $date = $row['date'];
  $balance = $row['balance'];
query("INSERT INTO transaction (credit, acct_no, amount, date, balance) VALUES('$amt', '$acct_no', '$amt', '$date', '$balance')");
}
echo "finish";
?>
