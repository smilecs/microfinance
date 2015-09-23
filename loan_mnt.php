<div class="row">
<div class="col-md-12">
<div class="box box-primary">
<div class="box-body">
<div class="form-group col-xs-3">
  <label for="start_date">Start Date</label>
  <input type="date" class="form-control" id="start_date">
</div>

<div class="form-group col-xs-3">
  <label for="end_date">End Date</label>
  <input type="date" class="form-control" id="end_date">
</div>

<div class="form-group col-xs-2">
  <label for="en"></label>
  <button class="form-control" id="gene">Generate</button>
</div>
 </div></div></div></div>
<div id="content">
<div class="box">
<div class="box-body no-padding">
<table class="table">
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
      <?php echo loan_report_mnt()[0]; ?>
    </td>
  </tr>
  <tr>
    <th>
      Total Interest Recieved
    </th>
    <td>
      <?php echo loan_report_mnt()[1]; ?>
    </td>
  </tr>
  <tr>
    <th>
      Overall Loan Recovered
    </th>
    <td>
      <?php echo loan_report()[0]; ?>
    </td>
  </tr>
</table>
</div>
</div>
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
$result = query("SELECT * FROM loan WHERE date_incured LIKE '$date-%' ORDER BY date_incured");
 $i = 0;
 while($row = mysql_fetch_array($result)){
   ++$i;
   $amount = $row['amount'];
   $id = $row['emp_no'];
   $name = get_teller_name($id);
   $date1 = $row['date_incured'];
   $paid = $row['paid'];
   $interest = $row['interest_amount'];
  $amt =$row['amort'];
$body .= "<tr>
<td>$i</td>
<td>$name</td>
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
