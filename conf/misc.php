<?php
function classUpdate($string){
$class = " ";
    if(isset($_GET['page'])){
    $page =  $_GET['page'];
if($string == $page){
        $class = "active";
    }
    return $class;
}
   return $class;
}
function folder($priv){
  if($priv = 1){
    redirect("teller/index.php");
  }if($priv = 0){
  redirect("admin/index.php");
}
redirect("index.php");
}

?>
