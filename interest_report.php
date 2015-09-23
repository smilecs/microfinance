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
    <td><?php echo thrift_special_mnt(1)[0]; ?></td>
  </tr>
  <tr>
    <th>
      Total Interest on Withdrawal
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
$result = query("SELECT * FROM income");
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
