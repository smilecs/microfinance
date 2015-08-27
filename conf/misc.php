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
?>