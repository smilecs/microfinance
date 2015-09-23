<?php
include('../conf/db_connect.php');
connect();
$start = $_POST['start_date'];
$start = strtotime($start);
$end = $_POST['end_date'];
$end = strtotime($end);
$top1 = '';
$top = "
<div class=box>
<div class=box-body no-padding>
<table class=table id=tableentry>
<thead>
  <tr>
    <th>S/N</th>
    <th>NAME</th>
    <th>AMOUNT</th>
    <th>AMT_MNT</th>
    <th>DATE</th>
  </tr>
</thead>
<tbody>";
$body = '';
$result = query("SELECT * FROM payment");
 $i = 0;
 while($row = mysql_fetch_array($result)){
   ++$i;
   $amount = $row['amount_pay'];
   $id = $row['emp_no'];
   $name = get_teller_name($id);
   $date1 = $row['date'];
   $date = strtotime($date1);
  $amt =$row['amort_loan'] + $row['amort_interest'];
   if(($date >= $start) && ($date <= $end)){
     $total_loan_recovered += $row['amount_pay'];
     $total_interest += $row['amort_interest'];
     $top1 = "<div class=box>
     <div class=box-body no-padding>
     <table class=table>
       <thead>
       <tr>
         <td>
           <strong><h4>LOAN RECOVERY MONTHLY REPORT</h4></strong>
         </td>
       </tr>
     </thead>
       <tr>
         <th>
           Total Loan Recovered:
         </th>
         <td>
           $total_loan_recovered
         </td>
       </tr>
       <tr>
         <th>
           Total Interest Recieved
         </th>
         <td>
           $total_interest_recieved
         </td>
       </tr>
     </table>
     </div>
     </div>";
     $top1 .= $top;
$body .= "<tr>
<td>$i</td>
<td>$name</td>
<td>$amount</td>
<td>$amt</td>
<td>$date1</td>
</tr>";
   }
}
$end = "</tbody></table></div></div>";
$htm = $top1 . $body . $end;
 echo $htm;
 ?>
