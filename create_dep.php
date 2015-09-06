<?php
if(isset($_POST['dept'])){
  $dept_name = $_POST['dept'];
  $faculty = $_POST['faculty'];
query("INSERT INTO department (dep_name, faculty) VALUES('$dept_name', '$faculty')");
}
 ?>
 <div class="row">
             <!-- left column -->
             <div class="col-md-10">
               <!-- general form elements -->
               <div class="box box-primary">

<form method="post" action="index.php?page=../create_dep">
<div class="box-body">
  <div class="form-group">
    <label for="faculty">Faculty</label>
    <select name="faculty" id="faculty" class="form-control"><?php
    $result = query("SELECT * FROM faculty");
    while($row = mysql_fetch_array($result)){
      $id = $row['id'];
      $name = $row['name'];
  ?>
  <option value="<?php echo $id; ?>"><?php echo $name;?></option>
<?php
    }
    ?></select>
  </div>
  <div class="form-group">
<label for="dept">Department</label>
<input type="text" name="dept" class="form-control" id="dept">
</div>
<div class="form-group">
  <input type="submit" value="create" class="btn btn-primary">
</div>
</div>
</form>
</div>
</div>
</div>
