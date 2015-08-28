<?php
session_start();
$no = $_SESSION['priv'];
include('conf/db_connect.php');
include('conf/misc.php');
connect();
$id1 = $_POST['1'];
$id2 = $_POST['2'];
$id3 = $_POST['3'];
  query("UPDATE percent SET value='$id1' WHERE id='1'");
  query("UPDATE percent SET value='$id2' WHERE id='2'");
  query("UPDATE percent SET value='$id3' WHERE id='3'");
 folder($no);
 ?>
