<?php
$id =$_SESSION['id'];
$result = query("SELECT * FROM account LEFT JOIN acct_type ON account.acct_type=acct_type.id WHERE emp_id='$id'");
if(mysql_num_rows($result) < 1){
echo "<h2>Account information unavailable</h2>";
}
else{
while ($row = mysql_fetch_array($result)) {
$acct_type = $row['name'];
$acct_no = $row['acct_no'];
$balance = $row['balance'];
$d_opened = $row['d_opened'];
$duration = $row['duration'];
?>
<div class="box">
  <div class="box-header">
  </div><!-- /.box-header -->
  <div class="box-body no-padding">
    <table class="table table-condensed">
      <tr>
        <th>Account Type</th>
        <td><?php echo $acct_type;?></td>
      </tr>
      <tr>
        <th>Account No</th>
        <td><a href="index.php?page=dep_witd&id=<?php echo $acct_no; ?>"><?php echo $acct_no; ?></a></td>
       </tr>
      <tr>
        <th>Balance</th>
        <td><?php echo $balance; ?></td>
      </tr>
      <tr>

        <th>Created</th>
        <td>
          <?php echo $d_opened; ?>
        </td>

        <th>valid till</th>
        <td>
          <?php echo $duration; ?>
        </td>

      </tr>
    </table>
  </div><!-- /.box-body -->
</div>
<?php
}
}
 ?>
