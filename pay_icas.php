<?php
include('conf/db_connect.php');
connect();
$id = $_POST['id'];
$result = query("SELECT * FROM icas WHERE emp_no='$id'");
$row = mysql_fetch_array($result);
$total = $row['total'];
$name = get_teller_name($id);
$amount = $row['amount'];
$interest = $row['interest'];
  $body = "
  <div class=box box-primary>
  <div class=box-body>
  <strong><i class=fa fa-book margin-r-5></i>Name</strong>
  <p class=text-muted>$name</p>
  <hr><strong><i></i>Amount</strong>
  <p class=text-muted>$amount</p>
  <hr>
  <strong><i></i>Interest</strong>
  <p class=text-muted>$interest</p>
    <hr>
  <strong><i></i>Total</strong>
  <p class=text-muted>$total</p>
  <hr>
  <div id=result>

  </div>
  </div></div>";

echo $body;

 ?>
