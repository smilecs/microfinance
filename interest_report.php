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
  <label for="withdraw"></label>
  <button class="form-control" id="loangens">Generate</button>
</div>
 </div></div></div></div>

<div id="content">

<div class="box">
<div class="box-body no-padding">
<table class="table">
  <thead>
  <tr>

    <td>
      <strong><h4>INTEREST MONTHLY REPORT</h4></strong>
    </td>
  </tr>
  </thead>
  <tr>
    <th>
      Total Interest Recovered on Loan
    </th>
    <td><?php echo revenue_type(1); ?></td>
  </tr>
  <tr>
    <th>
      Total Interest on Withdrawal
    </th>
    <td><?php echo revenue_type(2); ?></td>
  </tr>
  <tr>
    <th>
      Total Interest on Withdrawal
    </th>
    <td><?php echo revenue_type(2)+revenue_type(1); ?></td>
  </tr>


</table>
</div>
</div>

<?php
$date = date("Y-m-d");
$date =split('-', $date);
$date = $date[0] . "-" . $date['1'];
$arr = [0,0,0,0];
$result = query("SELECT * FROM income_type LEFT JOIN income ON income.income_type = income_type.id WHERE date LIKE '$date-%'");
$body = '';
$i = 0;
while($row = mysql_fetch_array($result)){
  $date = $row['date'];
  $type = $row['name'];
  ++$i;
  $amount1 = $row['amount'];
    //    $amount += $row['amount'];
    $body .= "<tr>
    <td>$i</td>
    <td> $type</td>
    <td>$amount1</td>
    <td>$date</td>
    </tr>";
  }
  $table_top = "
  <div class=box>
  <div class=box-body no-padding>
  <table class=table>
  <thead>
    <tr>
      <th>S/N</th>
      <th>INTEREST TYPE</th>
      <th>AMOUNT</th>
      <th>DATE</th>
    </tr>
  </thead>
  <tbody>";
  $end = "</tbody></table></div></div></div>";
  $htm = $table_top . $body . $end;
  echo $htm;

 ?>
