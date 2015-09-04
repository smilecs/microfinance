<?php
if(isset($_POST['faculty'])){
  $faculty = $_POST['faculty'];
query("INSERT INTO faculty (name) VALUES('$faculty')");
}
 ?>
 <div class="row">
             <!-- left column -->
             <div class="col-md-10">
               <!-- general form elements -->
               <div class="box box-primary">

<form method="post" action="index.php?page=../create_faculty">
<div class="box-body">
  <div class="form-group">
<label for="dept">Faculty</label>
<input type="text" name="faculty" class="form-control" id="dept">
</div>
<div class="form-group">
  <input type="submit" value="create" class="btn btn-primary">
</div>
</div>
</form>
</div>
</div>
</div>
