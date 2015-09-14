<?php
include('conf/db_connect');
connect();
$start = $_POST['start_date'];
$start = strtotime($start);
$end = $_POST['end_date'];
$end = strtotime($end);
$top = "
<table class=table id=tableentry>
<thead>
  <tr>
    <th>S/N</th>
    <th>ACCT NO</th>
    <th>TELLER</th>
    <th>ACCT TYPE</th>
    <th>AMOUNT</th>
    <th>TOTAL DEDUCTION</th>
    <th>BALANCE</th>
    <th>DATE</th>
  </tr>
</thead>
<tbody>";
$body = ' ';
$type = '';
$result = query("SELECT * FROM withdraw LEFT JOIN account ON withdraw.emp_id=account.emp_id");
 $i = 0;
 while($row = mysql_fetch_array($result)){
   $t_id = $row['teller_id'];
   $name = get_teller_name($t_id);
   $date1 = $row['date'];
   $acct_type = $row['acct_type'];
   if($acct_type == 1){
     $type = "thrift";
   }else{
     $type = "special";
   }
   $date = strtotime($date1);
   $acct_no = $row['acct_no'];
   $bal = $row['balance'];
   $amount = $row['amount'];
   $total_d = $row['total_deduction'];
   if(($date >= $start) && ($date <= $end)){
$body .= "<tr>
<td>++$i</td>
<td>$acct_no</td>
<td>$name</td>
<td>$type</td>
<td>$type</td>
<td>$amount</td>
<td>$total_d</td>
<td>$balance</td>
<td>$date1</td>
</tr>";
   }
}
$end = "</tbody></table>";
$htm = $top . $body . $end;
 echo $htm;
 ?>
