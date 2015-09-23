<?php
include_once('../utility.php');
 ?>
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
  <button class="form-control" id="accgens">Generate</button>
</div>
 </div></div></div></div>
<div id="content">

<div class="box">
<div class="box-body no-padding">
<table class="table">
  <thead>
  <tr>

    <td>
      <strong><h4>ACCOUNT MONTHLY REPORT</h4></strong>
    </td>
  </tr>
  </thead>
  <tr>
    <th>
      Total Number Thrift
    </th>
    <td><?php echo no_accounts()[1];?></td>
  </tr>
  <tr>
    <th>
      Total Number Special
    </th>
    <td><?php echo no_accounts()[2];?></td>
  </tr>
  <tr>
    <th>
      Total Number of Accounts Opened
    </th>
    <td><?php echo thrift_special_mnt(2)[2] + thrift_special_mnt(1)[2]; ?></td>
  </tr>


</table>
</div>
</div>
</div>

<div class="box">
  <div class="box-body">
    <div class="box-header with-border">
      <h3 class="box-title">Account Summary</h3>
    </div>
<table class="table">
  <thead>
    <tr>
      <th>S/N</th>
      <th>ACCT NO</th>
      <th>ACCT TYPE</th>
      <th>DATE OPENED</th>
    </tr>
    </thead>
<?php
$date = date("Y-m-d");
$date =split('-', $date);
$date = $date[0] . "-" . $date['1'];
$result = query("SELECT * FROM account LEFT JOIN acct_type ON account.acct_type = acct_type.id WHERE d_opened LIKE '$date-%'");
$i = 0;
while($row = mysql_fetch_array($result)){
  ++$i;
  $acct_no = $row['acct_no'];
  $acct_type = $row['name'];
  $date = $row['d_opened'];
?>
  <tbody>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $acct_no; ?></td>
      <td><?php echo $acct_type; ?></td>
      <td><?php echo $date; ?></td>
    </tr>
  </tbody>
<?php
}
 ?>
 </table>
