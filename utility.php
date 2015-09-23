<?php
function date_splitter(){
  $date = date('Y-m-d');
  $tmp_date = split("-", $date);
  $tmp_date = $tmp_date[0] . "-" . $tmp_date[1];
  return $tmp_date;
}

function total_withdrawn(){
  $tmp_date = date_splitter();
  $result = query("SELECT * FROM withdraw WHERE date LIKE '$tmp_date-%'");
  $total = 0;
  $count = 0;
  while($row=mysql_fetch_array($result)){
    $amount = $row['total_deduction'];
    $total += $amount;
    $count += 1;
  }
  $tm = [$count, $total];
  return $tm;
}

function total_deposit(){
$tmp_date = date_splitter();
$result = query("SELECT * FROM deposit WHERE date LIKE '$tmp_date-%'");
$total = 0;
$count = 0;
while($row=mysql_fetch_array($result)){
  $amount = $row['amount'];
  $total += $amount;
  $count += 1;
}
$tm = [$count, $total];
return $tm;
}
function total_no_users(){
  $result = query("SELECT * FROM customer WHERE priviledge ='2'");
  $count = mysql_num_rows($result);
  return $count;
}
function no_faculty(){
  $result = query("SELECT * FROM faculty");
  $count = mysql_num_rows($result);
  return $count;
}

function no_dept(){
  $result = query("SELECT * FROM department");
  $count = mysql_num_rows($result);
  return $count;
}

function no_accounts(){
$tmp_date = date_splitter();
$result = query("SELECT * FROM account");
$thrift_total = 0;
$special_total = 0;
$count = 0;
while($row=mysql_fetch_array($result)){
  $type = $row['acct_type'];
  if($type == 1){
    $thrift_total += 1;
  }
  else{
    $special_total += 1;
  }

  $count += 1;
}
$tm = [$count, $thrift_total, $special_total];
return $tm;
}
function ts_calc($i){
  $date = date("y-m-d");
  $date =split('-', $date);
  $date = $date[0] . "-" . $date['1'];
  $count = 0;
  $result = query("SELECT * FROM account WHERE d_opened LIKE '$date-%' AND acct_type = '$i'");
  while($row = mysql_fetch_array($result)){
    ++$count;
  }
  $rss = query("SELECT * FROM account WHERE acct_type = '$i'");
while($row= mysql_fetch_array($rss)){
  ++$count;
}

}
function expected(){
  $arr = [0,0];
  $loan_int = 0;
  $loan_rec = 0;
  $rs = query("SELECT * FROM loan");
  while($row = mysql_fetch_array($rs)){
    $loan_int += $row['amort_interest'];
    $loan_rec += $row['amort_loan'];
  }
  $arr = [$loan_int, $loan_rec];
  return $arr;
}
?>
