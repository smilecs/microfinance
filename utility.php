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
?>
