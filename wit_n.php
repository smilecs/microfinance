<?php
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
$id = $_GET['id'];
$result = query("SELECT * FROM withdraw WHERE acct_no='$id'");
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
<td>$acct_no</td>
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
