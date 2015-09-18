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
$faculty = $_POST['faculty'];
$dept = $_POST['dept'];
$nok = $_POST['nok'];
$n_phone = $_POST['n_phone'];
$user_type = 2;
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$date = date('y-m-d');
$state = $_POST['state'];
$lga = $_POST['lga'];
$title = $_POST['title'];
$emp_no = $_POST['emp_no'];


query("INSERT INTO customer(title, employee_no, state, lga, middle_name, surname, reg_date, firstname, uname, email, address, sex, faculty, dept, nok_name, n_phone, priviledge, phone, dob, pwd) VALUES('$title', '$emp_no', '$state', '$lga', '$m_name', '$s_name', '$date', '$f_name', '$uname', '$email', '$address', '$sex', '$faculty', '$dept', '$nok', '$n_phone', '$user_type', '$phone', '$dob', '12345')");
$rs = query("SELECT * FROM customer WHERE uname='$uname'");
$row = mysql_fetch_array($rs);
$id = $row['id'];
folders($priv, "page=../confirmation&id=$id");

?>
