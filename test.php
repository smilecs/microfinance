<?php
include('conf/db_connect.php');
connect();
$date = date("Y-m-d");
echo $date . "<br>";
$date =split('-', $date);
$date = $date[0] . "-" . $date['1'];
echo $date;
$rs = query("SELECT * FROM account WHERE acct_type='1' AND d_opened LIKE '$date-%'");
while($row = mysql_fetch_array($rs)){
  $id = $row['id'];
  echo $id;
}
 ?>
