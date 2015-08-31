<?php
//session_start();
include('conf/db_connect.php');
connect();
$f_name = $_POST['name'];
$s_name = $_POST['sname'];
$m_name = $_POST['mname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$sex = $_POST['sex'];
$faculty = $_POST['faculty'];
$dept = $_POST['dept'];
$nok = $_POST['nok'];
$n_phone = $_POST['n_phone'];
$user_type = $_POST['user_type'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$date = date('y-m-d');
$state = $_POST['state'];
$lga = $_POST['lga'];


query("INSERT INTO customer(state, lga, middle_name, surname, reg_date, firstname, uname, email, address, sex, faculty, dept, nok_name, n_phone, priviledge, phone, dob, pwd) VALUES('$state', '$lga', '$m_name', '$s_name', '$date', '$f_name', '$uname', '$email', '$address', '$sex', '$faculty', '$dept', '$nok', '$n_phone', '$user_type', '$phone', '$dob', '12345')");
$rs = query("SELECT * FROM customer WHERE uname='$uname'");
$row = mysql_fetch_array($rs);
$id = $row['id'];
redirect("index.php?page=../confirmation&id=$id");
?>
