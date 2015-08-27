<?php
include('../conf/db_connect.php');
connect();
$uname = $_POST['username'];
$rs = query("SELECT * FROM customer WHERE uname='$uname'");
if(mysql_num_rows($rs) > 0){
  echo "<h3>username taken choose another!</h3>";
}else{
  echo "username available";
}
 ?>
