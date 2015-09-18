<?php
include('conf/db_connect.php');
connect();
$loan_id = $_POST['loan'];
$result = query("SELECT * FROM loan WHERE emp_no = '$loan_id'");
if(mysql_num_rows($result) > 0){
  $row = mysql_fetch_array($result);
  $amort = $row['amort'];
  echo "<label for=amort>Amortisation</label><input type=Number name=amort class=form-control id=amort value=$amort readonly><br>";
}else{
  echo "<h3>No OutStanding Balance.</h3>";
}
 ?>
