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
function acct_check($acct_no){
  $rs = query("SELECT duration FROM account WHERE acct_no='$acct_no'");
  $row = mysql_fetch_array($rs);
  $expiry_date = $row['duration'];
  $current_date = date('Y-m-d');
  if(strtotime($expiry_date) <= strtotime($current_date)){
    redirect("index.php?page=../bad_account");
  }


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
