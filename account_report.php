<div class="box">
  <div class="box-body">
    <div class="box-header with-border">
      <h3 class="box-title">Account Summary</h3>
    </div>
<table class="table">
  <thead>
    <tr>
      <th>S/N</th>
      <th>MEMBER NAME</th>
      <th>ACCT NO</th>
      <th>ACCT TYPE</th>
      <th>MNTLY SAVINGS</th>
      <th>AMT TODATE</th>
      <th>BALANCE</th>
      <th>DATE OPENED</th>
    </tr>
    </thead>
<?php
$result = query("SELECT * FROM account LEFT JOIN acct_type ON account.acct_type = acct_type.id ");
$i = 0;
while($row = mysql_fetch_array($result)){
  ++$i;
  $member_id = $row['emp_id'];
  $name = get_teller_name($member_id);
  $acct_no = $row['acct_no'];
  $acct_type = $row['name'];
  $monthly = $row['save_amt'];
  $amt_todate = $row['amt_todate'];
  $date = $row['d_opened'];
  $balance = $row['balance'];
?>
  <tbody>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $name; ?></td>
      <td><a href="index.php?page=../dep_witd&id=<?php echo $acct_no; ?>"><?php echo $acct_no; ?></a></td>
      <td><?php echo $acct_type; ?></td>
      <td><?php echo $monthly; ?></td>
      <td><?php echo $amt_todate; ?></td>
      <td><?php echo $balance; ?></td>
      <td><?php echo $date; ?></td>
    </tr>
  </tbody>
<?php
}
 ?>
 </table>
