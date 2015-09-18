<?php
session_start();
$priv = $_SESSION['priv'];
include('conf/db_connect.php');
include('conf/misc.php');
connect();
$f_name = $_POST['name'];
$s_name = $_POST['sname'];
$m_name = $_POST['mname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$sex = $_POST['sex'];
$user_type = 1;
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$date = date('y-m-d');


query("INSERT INTO customer(middle_name, surname, reg_date, firstname, uname, email, address, sex, priviledge, phone, dob, pwd) VALUES('$m_name', '$s_name', '$date', '$f_name', '$uname', '$email', '$address', '$sex', '$user_type', '$phone', '$dob', '12345')");
$rs = query("SELECT * FROM customer WHERE uname='$uname'");
$row = mysql_fetch_array($rs);
$id = $row['id'];
folders($priv, "page=../confirmation&id=$id");

?>
