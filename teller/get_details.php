<?php
include('../conf/db_connect.php');
connect();
$acct_no = $_POST['acct_no'];
$result = query("SELECT * FROM account WHERE acct_no='$acct_no'");
$row = mysql_fetch_array($result);
$emp_id = $row['emp_id'];
$name = get_teller_name($emp_id);
$acct_type = $row['acct_type'];
if($acct_type == 1){
  $acct_type = "Thrift";
}else{
  $acct_type = "Special";
}
$balance =$row['balance'];
 $body = "
<div class=box box-primary>
<div class=box-body>
<strong><i class=fa fa-book margin-r-5></i>Name</strong>
<p class=text-muted>$name</p>
<hr><strong><i></i>Account Type</strong>
<p class=text-muted>$acct_type</p>
<hr>
<strong><i></i>Balance</strong>
<p class=text-muted>$balance</p>
<hr>
<div id=result>

</div>
</div></div>";
echo $body;
 ?>
