<?php
include('conf/db_connect.php');
connect();
$faculty = $_POST['faculty'];
$html = '<option></option>';
$result = query("SELECT * FROM department WHERE faculty='$faculty'");
while($row=mysql_fetch_array($result)){
  $value = $row['id'];
  $name = $row['dep_name'];

$html .=  "<option value=$value >$name </option>";
  }
  echo $html;
 ?>
