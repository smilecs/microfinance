<?php
include_once('conf/db_connect.php');
session_start();
$_SESSION = array();
session_destroy();
redirect('login.php');
?>
