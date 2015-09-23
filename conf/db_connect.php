<?php
$link = '';
function connect(){
$link = mysql_connect("localhost", "root", "me")
or die(mysql_error());
mysql_select_db("microfinance")
or die(mysql_error());
}
function query($string){
$rs = mysql_query($string) or die(mysql_error());
return $rs;
}

function get_teller_name($id){
  $result = query("SELECT * FROM customer WHERE id='$id'");
  $row = mysql_fetch_array($result);
  $fname = $row['firstname'];
  $sname = $row['surname'];
  return $sname . " " . $fname;
}


function return_connection(){
  return $link;
}
function redirect($string){
header("Location:$string");

}
function acct_check($acct_no){
  $rs = query("SELECT duration FROM account WHERE acct_no='$acct_no'");
  $row = mysql_fetch_array($rs);
  $expiry_date = $row['duration'];
  $current_date = date('Y-m-d');
  if(strtotime($expiry_date) <= strtotime($current_date)){
    redirect("../bad_account.php");
  }


}

function db_pic($id){

  $result = query("SELECT img_url FROM customer WHERE id='$id'");
  $row = mysql_fetch_array($result);
  $img = $row['img_url'];
  if(empty($img)){
  $img = "avatar.png";
  }
  return $img;

}
function name($id){
  $result = query("SELECT * FROM customer WHERE id='$id'");
  $row = mysql_fetch_array($result);
  $name = $row['surname'] ." " . $row['firstname'];
  return $name;
}

function update_loan($emp_id){
  $arr = [0,0,0];
  $result = query("SELECT * FROM loan WHERE emp_no = '$emp_id'");
  if(mysql_num_rows($result) > 0){
    $row = mysql_fetch_array($result);
    $amt = $row['total'] - $row['paid'];
    $duration = $row['duration'];
    $arr = [$amt, $duration, 1];
    return $arr;
  }
  return $arr;
}

function thrift_special($type){
  $arr = [0,0,0,0];
  $result = query("SELECT * FROM deposit WHERE acct_type='$type'");
  $count = 0;
  $amount = 0;
  while($row = mysql_fetch_array($result)){
    $count += 1;
    $amount += $row['amount'];
    }
    $arr[0] = $count;
    $arr[1] = $amount;
    $amount = 0;
    $result = query("SELECT * FROM account WHERE acct_type='$type'");
    while($row = mysql_fetch_array($result)){
      $count += 1;
      $amount += $row['save_amt'];
    }
    $arr[2] = $count;
    $arr[3] = $amount;
    return $arr;
}

function thrift_special_mnt($type){
  $date = date("Y-m-d");
  $date =split('-', $date);
  $date = $date[0] . "-" . $date['1'];
  $arr = [0,0,0,0];
  $result = query("SELECT * FROM deposit WHERE acct_type='$type' AND date LIKE '$date-%'");
  $count = 0;
  $amount = 0;
  while($row = mysql_fetch_array($result)){
    $count += 1;
    $amount += $row['amount'];
    }
    $arr[0] = $count;
    $arr[1] = $amount;
    $count = 0;
    $amount = 0;
    $rs = query("SELECT * FROM account WHERE acct_type='$type' AND d_opened LIKE '$date-%'");
    while($row = mysql_fetch_array($rs)){
      $count += 1;
      $amount += $row['save_amt'];
    }
    $arr[2] = $count;
    $arr[3] = $amount;
    return $arr;
}


function loan_report(){
  $arr = [0,0,0];
  $total_loan_recovered = 0;
  $total_interest = 0;
  $expected_loan = 0;
  $result = query("SELECT * FROM payment");
  while($row = mysql_fetch_array($result)){
  $total_loan_recovered += $row['amount_pay'];
  $total_interest += $row['amort_interest'];
  }
  $result = query("SELECT * FROM loan");
  while($row = mysql_fetch_array($result)){
    $expected_loan += $row['amort'];
  }
  $arr = [$total_loan_recovered, $total_interest, $expected_loan];
  return $arr;

}

function loan_report_mnt(){
  $date = date("Y-m-d");
  $date =split('-', $date);
  $date = $date[0] . "-" . $date['1'];
  $arr = [0,0,0];
  $total_loan_recovered = 0;
  $total_interest = 0;
  $expected_loan = 0;
  $result = query("SELECT * FROM payment WHERE date LIKE '$date-%'");
  while($row = mysql_fetch_array($result)){
  $total_loan_recovered += $row['amount_pay'];
  $total_interest += $row['amort_interest'];
  }
  $result = query("SELECT * FROM loan WHERE date_incured LIKE '$date-%'");
  while($row = mysql_fetch_array($result)){
    $expected_loan += $row['amort'];
  }
  $arr = [$total_loan_recovered, $total_interest, $expected_loan];
  return $arr;

}


function withdraw_report(){
  $arr = [0, 0, 0];
  $count = 0;
  $amount = 0;
  $interest = 0;
  $result = query("SELECT * FROM withdraw");
  while($row = mysql_fetch_array($result)){
    $count +=1;
    $amount += $row['amount'];
    $interest += $row['interest_amount'];
  }
  $arr = [$count, $amount, $interest];
  return $arr;
}
function revenue_type($type){
  $date = date("Y-m-d");
  $date =split('-', $date);
  $date = $date[0] . "-" . $date['1'];
  $arr = '';
  $amount = 0;
  $result = query("SELECT * FROM income WHERE income_type = '$type' AND date LIKE '$date-%'");
  while($row = mysql_fetch_array($result)){
        $amount += $row['amount'];
  }
  $arr = $amount;
  return $arr;
}
function revenue(){
  $arr = [0,0];
  $amount = 0;
  $result = query("SELECT * FROM income");
  while($row = mysql_fetch_array($result)){
    $income_type = $row['income_type'];
    if($income_type != 3){
      $amount += $row['amount'];
    }
  }
  $result = query("SELECT * FROM ad_income");
  $row = mysql_fetch_array($result);
  $bal = $row['balance'];
  $arr = [$bal, $amount];
  return $arr;
}
function member(){
  $date = date("Y-m-d");
  $date =split('-', $date);
  $date = $date[0] . "-" . $date['1'];
  $arr = [0,0,0,0];
  $count = 0;
  $result = query("SELECT * FROM customer WHERE reg_date LIKE '$date-%'");
  while($row = mysql_fetch_array($result)){
    ++$count;
  }
  $arr[0] = $count;
  $count = 0;
  $rs= query("SELECT * FROM customer");
  while($row = mysql_fetch_array($rs)){
++$count;
  }
  $arr[1] = $count;
  return $arr;
}
?>
