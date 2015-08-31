<?php
session_start();
$id = $_SESSION['id'];
include('conf/db_connect.php');
include('conf/misc.php');
$priv = $_SESSION['priv'];
connect();
$email = $_POST['email'];
$address = $_POST['address'];
$faculty = $_POST['faculty'];
$dept = $_POST['dept'];
$pwd = $_POST['pwd'];
$nok = $_POST['nok'];
$n_phone = $_POST['n_phone'];
$user_type = $_POST['user_type'];
$phone = $_POST['phone'];

$image_tempname = $_FILES['propic']['name'];
$ImageDir ="dist/img/";
$ImageName = $ImageDir . $image_tempname;
if(move_uploaded_file($_FILES['image']['tmp_name'],
        $ImageName)){
$new = $id .".jpg";
query("UPDATE customer SET img_url='$new', email='$email', faculty='$faculty', dept='$dept', address='$address', phone='$phone', nok_name='$nok', n_phone='$n_phone', pwd='$pwd' WHERE id='$id'");
$newfilename = $ImageDir . $new . ".jpg";
$animage = imagecreatefromjpeg ($ImageName);
$ox = imagesx($animage);
$oy = imagesy($animage);
$nx = 100;
$ny = floor($oy * (100 / $ox) );
$nm = imagecreatetruecolor( $nx, $ny);
imagecopyresized($nm, $animage, 0, 0, 0, 0, $nx, $ny, $ox, $oy );
imagejpeg($nm, $newfilename);
imagedestroy($animage);
imagedestroy($nm);
folder($priv);
  }else{
    echo "file upload unsuccessful image should be less than 2mb";
  }
?>
