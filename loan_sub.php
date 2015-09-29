<?php
session_start();
$id = $_SESSION['id'];
$priv = $_SESSION['priv'];
include('conf/db_connect.php');
include('conf/misc.php');
connect();
$new_ans = '';
$p1 = $_POST['amt'];
$duration = $_POST['duration'];
$sm_amt = '';
$p = '';
$emp_id = $_POST['emp_id'];
$digit = update_loan($emp_id);
$rs = query("SELECT * FROM percent WHERE id='2'");
$row = mysql_fetch_array($rs);
$tmp = $row['value'];
if($digit[2] != 0){
$duration += $digit[1];
$sm_amt = simple_interest($p1, $tmp, $duration);
$p = $sm_amt + $p1 + $digit[0];
}else{
$sm_amt = simple_interest($p1, $tmp, $duration);
$p = $sm_amt + $p1;
}
/*$i = $tmp /100;
$d = $duration;
$j = $i/12;
$num = (1+$j);
$s = pow($num, $d);
$new_ans = $j/($s - 1);
if(1 >$s){
$new_ans = $j/(1-$s);
}
*/
$loan_amount1 = $p1/$duration;
$loan_amount2 = $sm_amt/$duration;

$loan_amount1 = round($loan_amount1,2);
$loan_amount2 = round($loan_amount2,2);
$loan_amount = $loan_amount1 + $loan_amount2;
$date = date('Y-m-d');
if($digit[2] != 0){
  query("UPDATE loan SET duration='$duration', amort_loan='$loan_amount1', amort_interest='$loan_amount2', interest_amount='$sm_amt', date_incured='$date', amount='$p1', amort='$loan_amount', interest='$tmp', total='$p' WHERE emp_no='$emp_id'");
}else{
query("INSERT INTO loan(duration, amort_loan, amort_interest, interest_amount, emp_no, date_incured, amount, amort, interest, total) VALUES('$duration', '$loan_amount1', '$loan_amount2', '$sm_amt', '$emp_id', '$date', '$p1', '$loan_amount', '$tmp', '$p')");
}

$rs = query("SELECT * FROM ad_income");
$row = mysql_fetch_array($rs);
$bal = $row['balance'];
$int1 = $bal - $p1;
query("INSERT INTO income(income_type, amount, balance) VALUES('4', '$new_amt1', '$int1')");
query("UPDATE ad_income SET balance='$int1'");


folders($priv, "page=../view_amort&amort=$loan_amount");

 ?>
