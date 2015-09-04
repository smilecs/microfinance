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
    redirect("../bad_account.php");
  }


}

function db_pic($id){

  $result = query("SELECT img_url FROM customer WHERE id='$id'");
  $row = mysql_fetch_array($result);
  $img = $row['img_url'];
  if(empty($img)){
  $img = "avatar.png";
  }
  return $img;

}
function name($id){
  $result = query("SELECT * FROM customer WHERE id='$id'");
  $row = mysql_fetch_array($result);
  $name = $row['surname'] ." " . $row['firstname'];
  return $name;
}

?>
