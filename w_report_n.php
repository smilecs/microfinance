<?php
include('conf/db_connect.php');
connect();
$top = "
<table class=table id=tableentry>
<thead>
  <tr>
    <th>S/N</th>
    <th>ACCT NO</th>
    <th>TELLER</th>

    <th>AMOUNT</th>
    <th>TOTAL DEDUCTION</th>
    <th>BALANCE</th>
    <th>DATE</th>
  </tr>
</thead>
<tbody>";
$body = ' ';
$type = '';
$result = query("SELECT * FROM withdraw");
 $i = 0;
 while($row = mysql_fetch_array($result)){
   ++$i;
   $t_id = $row['teller_id'];
   $name = get_teller_name($t_id);
   $date1 = $row['date'];

   $acct_no = $row['acct_no'];
   $bal = $row['balance'];
   $amount = $row['amount'];
   $total_d = $row['total_deduction'];
$body .= "<tr>
<td>$i</td>
<td><a href=index.php?page=../dep_witd&id=$acct_no>$acct_no</a></td>
<td>$name</td>

<td>$amount</td>
<td>$total_d</td>
<td>$bal</td>
<td>$date1</td>
</tr>";

}
$end = "</tbody></table>";
$htm = $top . $body . $end;
 echo $htm;
 ?>
