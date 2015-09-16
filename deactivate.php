<?php
session_start();
$priv = $_SESSION['priv'];
include('conf/db_connect.php');
include('conf/misc.php');
connect();
$id = $_GET['id'];
query("DELETE FROM account WHERE acct_no='$id'");
folder($priv);
?>
