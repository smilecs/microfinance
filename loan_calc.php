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
$p = floor($p);
}else{
$sm_amt = simple_interest($p1, $tmp, $duration);
$p = $sm_amt + $p1;
//$p = floor($p);
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
//$loan_amount1 = $new_ans * $p1;
//$loan_amount2 = $new_ans * $sm_amt;
$loan_amount = $loan_amount1 + $loan_amount2;
$loan_amount1 = round($loan_amount1,2);
$loan_amount2 = round($loan_amount2,2);
//$loan_amount = floor($loan_amount);
$loan_amount = round($loan_amount, 2);
if($digit[2] != 0){
echo "<strong><i></i>Total Duration </strong>
<p class=text-muted>$duration  Months</p>
<hr>
<strong><i></i>Previous amount </strong>
<p class=text-muted>$digit[0]</p>
<hr><strong><i></i>Interest </strong>
<p class=text-muted>$sm_amt</p>
<hr>
<strong><i></i>Amort </strong>
<p class=text-muted>$loan_amount </p>
<hr>
<strong><i></i>Total </strong>
<p class=text-muted>$p</p>
<hr>";
}else {
  echo "<strong><i></i>Total Duration </strong>
  <p class=text-muted>$duration  Months</p>
  <hr>
  <strong><i></i>Previous amount </strong>
  <p class=text-muted>0</p>
  <hr><strong><i></i>Interest </strong>
  <p class=text-muted>$sm_amt</p>
  <hr>
  <strong><i></i>Amort </strong>
  <p class=text-muted>$loan_amount</p>
  <hr>
  <strong><i></i>Total </strong>
  <p class=text-muted>$p</p>
  <hr>";
}
