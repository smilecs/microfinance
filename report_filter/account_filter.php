<?php
include_once('../conf/db_connect.php');
include_once('../conf/misc.php');
connect();
function no_accounts($start, $end){
//$tmp_date = date_splitter();
$result = query("SELECT * FROM account");
$thrift_total = 0;
$special_total = 0;
$count = 0;

while($row=mysql_fetch_array($result)){
  $date = $row['d_opened'];
  $time = strtotime($date);
  if(($time >= $start) && ($time <= $end)){
  $type = $row['acct_type'];
  if($type == 1){
    $thrift_total += 1;
  }
  else{
    $special_total += 1;
  }

  $count += 1;
}
}
$tm = [$count, $thrift_total, $special_total];
return $tm;
}
$body = '';
$start = $_POST['start_date'];
$start = strtotime($start);
$end = $_POST['end_date'];
$end = strtotime($end);

 $result = query("SELECT * FROM account LEFT JOIN acct_type ON account.acct_type = acct_type.id");
 $i = 0;
 while($row = mysql_fetch_array($result)){
   $date = $row['d_opened'];
 $time = strtotime($date);
   if(($time >= $start) && ($time <= $end)){
   ++$i;
   $member_id = $row['emp_id'];
   $name = get_teller_name($member_id);
   $acct_no = $row['acct_no'];
   $acct_type = $row['name'];
   $monthly = $row['save_amt'];
   $amt_todate = $row['amt_todate'];
   $date = $row['d_opened'];
   $balance = $row['balance'];
  $body .= "<tbody>
     <tr>
     <td>$i;</td>
     <td>$name;</td>
     <td><a href=index.php?page=../dep_witd&id=$acct_no>$acct_no</a></td>
     <td>$acct_type</td>
     <td>$monthly</td>
     <td>$amt_todate</td>
     <td>$balance</td>
     <td>$date</td>

     </tr>
   </tbody>";
 }
 }
  $thrift = no_accounts($start, $end)[1];
  $special = no_accounts($start, $end)[2];
  $total = $thrift + $special;

$top = "<div id=content>
<div class=box>
<div class=box-body no-padding>
<table class=table>
  <thead>
  <tr>

    <td>
      <strong><h4>ACCOUNT MONTHLY REPORT</h4></strong>
    </td>
  </tr>
  </thead>
  <tr>
    <th>
      Total Number Thrift
    </th>
    <td>$thrift</td>
  </tr>
  <tr>
    <th>
      Total Number Special
    </th>
    <td>$special</td>
  </tr>
  <tr>
    <th>
      Total Number of Accounts Opened
    </th>
    <td>$total</td>
  </tr>
</table>
</div>
</div>
</div>
<div class=box>
  <div class=box-body>
    <div class=box-header with-border>
      <h3 class=box-title>Account Summary</h3>
    </div>
<table class=table>
  <thead>
    <tr>
    <th>S/N</th>
    <th>MEMBER NAME</th>
    <th>ACCT NO</th>
    <th>ACCT TYPE</th>
    <th>MNTLY SAVINGS</th>
    <th>AMT TODATE</th>
    <th>BALANCE</th>
    <th>DATE OPENED</th>
    </tr>
    </thead>
";
 $end = "</tbody></table></div></div>";
 $htm =  $top . $body . $end;
 echo $htm;
?>
