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
function folders($priv, $url){

switch ($priv) {
  case '1':
    redirect("teller/index.php?" . $url);
    break;
  case '0':
  redirect("admin/index.php?" . $url);
    break;
  default:
  redirect("index.php");
    break;
}

  }
function simple_interest($p, $r, $t){
  $r = $r/100;
  $i = $p*($r/12)*$t;
  return $i;
}

?>
