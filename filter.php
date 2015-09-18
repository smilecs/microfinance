<?php
include('conf/db_connect.php');
connect();
$faculty = $_POST['faculty'];
$dept = $_POST['dept'];
$sex = $_POST['sex'];
function fac($faculty){
  if(!empty($faculty)){
    $msg = "customer.faculty = '$faculty' AND ";
  return $msg;
  }

}

function dept($dept){
  if(!empty($dept)){
    $msg = "dept = '$dept' AND ";
  return $msg;
  }
}

function sex($sex){
  if(!empty($sex)){
    $msg = "sex = '$sex' ";
  return $msg;
  }
}
$top = "
<table class=table id=tableentry>
<thead>
  <tr>
    <th>S/N</th>
    <th>EMP NO</th>
    <th>TITLE</th>
    <th>FULLNAME</th>
    <th>STATE</th>
    <th>LGA</th>
    <th>ADDRESS</th>
    <th>PHONE</th>
    <th>DEPARTMENT</th>
    <th>SEX</th>
    <th>EMAIL</th>
  </tr>
</thead>
<tbody>";

$fac = fac($faculty);
if(empty($dept) && empty($sex)){
  $fac = "customer.faculty = '$faculty' ";
}

$dep = dept($dept);
if(empty($sex) && !empty($dept)){
  $dep = "dept = '$dept' ";
}


$sex = sex($sex);
$query = $fac . $dep . $sex;
$result = query("SELECT priviledge, employee_no, title, surname, firstname, dep_name, lga, state, customer.id, phone, address, email, sex FROM customer LEFT JOIN department ON customer.dept=department.id WHERE $query");
$i=0;
$body = '';
while($row = mysql_fetch_array($result)){
  ++$i;
  $emp_no = $row['employee_no'];
  $title = $row['title'];
  $name = $row['surname'] . " " . $row['firstname'];
  $state = $row['state'];
  $lga = $row['lga'];
  $dept = $row['dep_name'];
  $addr = $row['address'];
  $phone = $row['phone'];
  $sex = $row['sex'];
  $email = $row['email'];
  $id = $row['id'];
  $prv = $row['priviledge'];
  if($prv == 2){
$body .= "<tr>
  <td>
    $i
  </td>
<td><a href=index.php?page=../profile_search&id=$id>$emp_no</a></td>
<td>$title</td>
<td>$name</td>
<td>$state</td>
<td>$lga</td>
<td>$addr</td>
<td>$phone</td>
<td>$dept</td>
<td>$sex</td>
<td>$email</td>
</tr>";
}
}
$body .= "</tbody></table>";
$tab = $top . $body;
echo $tab;
?>
