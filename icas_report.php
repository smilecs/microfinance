<?php
$top = "<div class=box>
<div class=box-body no-padding>
<table class=table id=tableentry>
<thead>
  <tr>
    <th>S/N</th>
    <th>NAME</th>
    <th>AMOUNT</th>
    <th>PAID</th>
    <th>INTEREST</th>
    <th>DATE</th>
  </tr>
</thead>
<tbody>";
$body = ' ';
$sum = 0;
$date = date("Y-m-d");
$date =split('-', $date);
$date = $date[0] . "-" . $date['1'];
$result = query("SELECT * FROM icas WHERE date LIKE '$date-%' ORDER BY date");
 $i = 0;
 while($row = mysql_fetch_array($result)){
   ++$i;
   $amount = $row['amount'];
   $sum += $amount;
   $id = $row['emp_no'];
   $name = get_teller_name($id);
   $date1 = $row['date'];
   $paid = $row['paid'];
   $interest = $row['interest'];
  //$amt =$row['amort'];
$body .= "<tr>
<td>$i</td>
<td>$name</td>
<td>$amount</td>
<td>$paid</td>
<td>$interest</td>
<td>$date1</td>
</tr>";

}
$pre = "<div class=box>
<div class=box-body no-padding>
<table class=table>
  <thead>
  <tr>
    <td>
      <strong><h4>ICAS MONTHLY REPORT</h4></strong>
    </td>
  </tr>
</thead>
  <tr>
    <th>
      Total Special Loan Give:
    </th>
    <td>$i</td>
    </tr>
    <tr>
    <th>
    Total Amount:
    </th>
    <td>
    $sum
    </td>
    </tr>
    </table>
    </div>
    </div>
";
$end = "</tbody></table>";
$htm = $pre . $top . $body . $end;
echo $htm;
 ?>
</div>
