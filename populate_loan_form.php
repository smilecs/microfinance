<?php
include('conf/db_connect.php');
connect();
$id = $_POST['id'];
$result = query("SELECT * FROM loan WHERE emp_no='$id'");
$row = mysql_fetch_array($result);
$loan_amount = $row['total'];
$name = get_teller_name($id);
$total_amount_paid = $row['paid'];
$balance = $loan_amount - $total_amount_paid;
$charge = $row['admin_charge'];
$pay_no = $row['p_no'];
if($pay_no < 1){
  //$charge = (1/100) * $total;
  $body = "
  <div class=box box-primary>
  <div class=box-body>
  <strong><i class=fa fa-book margin-r-5></i>Name</strong>
  <p class=text-muted>$name</p>
  <hr><strong><i></i>Loan Amount</strong>
  <p class=text-muted>$loan_amount</p>
  <hr>
  <strong><i></i>Total Amount Paid</strong>
  <p class=text-muted>$total_amount_paid</p>
  <hr>
  <strong><i></i>Admin Charge</strong>
  <p class=text-muted>$charge</p>
  <hr>
  <strong><i></i>Balance</strong>
  <p class=text-muted>$balance</p>
  <hr>
  <div id=result>

  </div>
  </div></div>";

}else{
  $body = "
  <div class=box box-primary>
  <div class=box-body>
  <strong><i class=fa fa-book margin-r-5></i>Name</strong>
  <p class=text-muted>$name</p>
  <hr><strong><i></i>Loan Amount</strong>
  <p class=text-muted>$loan_amount</p>
  <hr>
  <strong><i></i>Total Amount Paid</strong>
  <p class=text-muted>$total_amount_paid</p>
    <hr>
  <strong><i></i>Balance</strong>
  <p class=text-muted>$balance</p>
  <hr>
  <div id=result>

  </div>
  </div></div>";
}

echo $body;

 ?>
