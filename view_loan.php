<?php
$top = "<div class=box>
<div class=box-body no-padding>
<label>LOAN TABLE</label>
<table class=table id=tableentry>
<thead>
  <tr>
    <th>S/N</th>
    <th>NAME</th>
    <th>AMOUNT</th>
    <th>PAID</th>
    <th>AMT_MNT</th>
    <th>INTEREST</th>
    <th>DATE</th>
  </tr>
</thead>
<tbody>";
$body = ' ';
$date = date("Y-m-d");
$date =split('-', $date);
$date = $date[0] . "-" . $date['1'];
$result = query("SELECT * FROM loan ORDER BY date_incured");
 $i = 0;
 while($row = mysql_fetch_array($result)){
   ++$i;
   $amount = $row['amount'];
   $no=$row['id'];
   $id = $row['emp_no'];
   $name = get_teller_name($id);
   $date1 = $row['date_incured'];
   $paid = $row['paid'];
   $interest = $row['interest_amount'];
  $amt =$row['amort'];
$body .= "<tr>
<td>$i</td>
<td><a href=index.php?page=../view_detail_loan&id=$no>$name</a></td>
<td>$amount</td>
<td>$paid</td>
<td>$amt</td>
<td>$interest</td>
<td>$date1</td>
</tr>";

}
$end = "</tbody></table>";
$htm = $top . $body . $end;
echo $htm;
 ?>
</div>
</div>
