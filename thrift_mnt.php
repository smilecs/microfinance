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
  <button class="form-control" id="gen">Generate</button>
</div>
 </div></div></div></div>
<div id="content">

<div class="box">
<div class="box-body no-padding">
<table class="table">
  <thead>
  <tr>

    <td>
      <strong><h4>THRIFT SAVINGS MONTHLY REPORT</h4></strong>
    </td>
  </tr>
  </thead>
  <tr>
    <th>
      Total Number Deposits
    </th>
    <td><?php echo thrift_special_mnt(1)[0]; ?></td>
  </tr>
  <tr>
    <th>
      Total Amount Deposited
    </th>
    <td><?php echo thrift_special_mnt(1)[1]; ?></td>
  </tr>


</table>
</div>
</div>
</div>
<?php
$date = date("Y-m-d");
$date =split('-', $date);
$date = $date[0] . "-" . $date['1'];
$arr = [0,0,0,0];
$result = query("SELECT * FROM deposit WHERE acct_type='1' AND date LIKE '$date-%' ORDER BY date");
$body = '';
$i = 0;
while($row = mysql_fetch_array($result)){
  $date = $row['date'];
  $acct_no = $row['acct_no'];
    ++$i;
    $bal = $row['balance'];
    $amount1 = $row['amount'];
    //    $amount += $row['amount'];
    $body .= "<tr>
    <td>$i</td>
    <td><a href=index.php?page=../dep_witd&id=$acct_no> $acct_no</a></td>
    <td>$amount1</td>
    <td>$date</td>
    </tr>";
  }
  $table_top = "
  <div class=box>
  <div class=box-body no-padding>
  <table class=table id=tableentry>
  <thead>
    <tr>
      <th>S/N</th>
      <th>ACCT NO</th>
      <th>AMOUNT</th>
      <th>DATE</th>
    </tr>
  </thead>
  <tbody>";
  $end = "</tbody></table></div></div>";
  $htm = $table_top . $body . $end;
  echo $htm;

 ?>
