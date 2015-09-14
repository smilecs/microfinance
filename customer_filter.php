<div class="row">
<div class="col-md-13">
<div class="box box-primary">
<div class="box-body">
  <h3>Filter Controls</h3>
<div class="form-group col-xs-3">
  <label for="facul">Faculty</label>
  <select name="faculty" class="form-control" id="facul">
  <option></option>
  <?php
  $result = query("SELECT * FROM faculty");
  while($row=mysql_fetch_array($result)){
    $value = $row['id'];
    $name = $row['name'];
    ?>
    <option value="<?php echo $value; ?>"><?php echo $name;?></option>
    <?php
}
   ?>
  </select>
</div>

<div class="form-group col-xs-3">
  <label for="dept">Department</label>
<select class="form-control" id="dept" name="dept">

</select>
</div>

<div class="form-group col-xs-2">
  <label for="sex">Sex</label>
  <select name="sex" id="sex" name="sex" class="form-control">
  <option></option>
  <option value="male"> Male</option>
  <option value="female"> Female</option>
  </select>
</div>
<br>

<div class="form-group col-xs-2">
  <button class="form-control btn btn-primary" id="generate">generate</button>
</div>
<div class="form-group col-xs-2">
  <button  class="form-control btn btn-primary" id="print">print</button>
</div>

</div>
</div>
</div>
</div>
<div class="box">
   <div class="box-body" id="table_entry">
<table class="table" id="tableentry">
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
<tbody>
<?php
$result = query("SELECT employee_no, title, surname, firstname, dep_name, lga, state, customer.id, phone, address, email, sex FROM customer LEFT JOIN department ON customer.dept=department.id");
$i = 0;
while ($row = mysql_fetch_array($result)) {
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
?>
<tr>
  <td>
    <?php echo $i;?>
  </td>
<td><a href="index.php?page=../profile_search&id=<?php echo $id; ?>"><?php echo $emp_no;?></a></td>
<td><?php echo $title;?></td>
<td><?php echo $name;?></td>
<td><?php echo $state;?></td>
<td><?php echo $lga;?></td>
<td><?php echo $addr;?></td>
<td><?php echo $phone;?></td>
<td><?php echo $dept;?></td>
<td><?php echo $sex;?></td>
<td><?php echo $email;?></td>
</tr>
<?php
}
 ?>
</tbody>
</table>
