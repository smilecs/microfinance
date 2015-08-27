<?php
$link = '';
function connect(){
$link = mysql_connect("localhost", "root", "me")
or die(mysql_error());
mysql_select_db("microfinance")
or die(mysql_error());
}
function query($string){
$rs = mysql_query($string) or die(mysql_error());
return $rs;
}
function return_connection(){
  return $link;
}
function redirect($string){
header("Location:$string");

}
function db_pic($id){
$query ="SELECT * FROM images WHERE image_id ='$id'";
$row = mysql_query($query)
or die(mysql_error());
$row_d = mysql_fetch_array($row);
extract($row_d);
$new_id = $image_id;
return $new_id;
}
?>
