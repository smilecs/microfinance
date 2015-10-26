<?php
session_start();
include('conf/db_connect.php');
include('conf/misc.php');
connect();
$id = $_SESSION['id'];
$priv = $_SESSION['priv'];
$loaner_id = $_POST['loan_id'];
$amort = $_POST['amount'];
$charge = '';
$result = query("SELECT * FROM icas WHERE emp_no='$loaner_id'");
$row= mysql_fetch_array($result);
//$rs= query("SELECT * FROM payment WHERE emp_id='$loaner_id'");

  $charge = $row['charge'];
  $date = date("y-m-d");
  query("INSERT INTO charge(emp_no, amount, type, date) VALUES('$loaner_id', '$charge', '1', '$date')");
//  query("UPDATE loan SET p_no='1' WHERE emp_no='$loaner_id'");



//$amort -= $charge;
$total = $row['total'];
$paid = $row['paid'];
$date = date("y-m-d");
$int = $row['interest'];
$loan = $row['amount'];

$total_paid = $amort + $paid;
query("UPDATE icas SET paid='$total_paid' WHERE emp_no='$loaner_id'");
$bal = $total - $total_paid;
$b4 = $bal;
//query("UPDATE loan SET balance='$bal' WHERE emp_no='$loaner_id'");

query("INSERT INTO payment(amort_loan, amort_interest, l_id, balance, emp_id, amount_pay, date) VALUES('$loan', '$int', '$id', '$bal', '$loaner_id', '$amort', '$date')");
$result = query("SELECT * FROM loan");
while($row = mysql_fetch_array($result)){
  $id = $row['id'];
  $amount = $row['total'];
  $paid = $row['paid'];
  if($paid >= $amount){
    query("DELETE FROM icas WHERE id='$id'");
  }

 $rs = query("SELECT * FROM ad_income");
 $row = mysql_fetch_array($rs);
 $bal = $row['balance'];
 $int1 = $bal + $loan;
 query("INSERT INTO income(income_type, amount, balance) VALUES('3', '$loan', '$int1')");
 query("UPDATE ad_income SET balance='$int1'");
 $int1 += $int;
 query("INSERT INTO income(income_type, amount, balance) VALUES('1', '$int', '$int1')");
 query("UPDATE ad_income SET balance='$int1'");
$result = query("SELECT * FROM sub_income");
$row = mysql_fetch_array($result);
$ad_bal = $row['balance'] + $total_paid;
 query("UPDATE sub_income SET balance='$ad_bal'");

}
$res = "<strong><i></i>New Balance</strong>
<p class=text-muted>$b4</p>";
echo $res;


?>
