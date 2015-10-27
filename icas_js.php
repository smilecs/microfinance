<?php
include('conf/db_connect.php');
connect();
$loan_id = $_POST['loan'];
$result = query("SELECT * FROM icas WHERE emp_no = '$loan_id'");
  $row = mysql_fetch_array($result);
  $amort = $row['total'] + $row['charge'];
  $amount = $row['total'];

  echo "<label for=amount>Amount</label><input type=Number name=amount class=form-control id=amount value=$amount hidden=true /><input type=Number name=amount class=form-control id=amounts value=$amort readonly/><br>";

 ?>
