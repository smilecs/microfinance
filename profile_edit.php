<?php
$id = '1';
$result = query("SELECT * FROM customer WHERE id='$id'");
$row = mysql_fetch_array($result);
$email = $row['email'];
$phone = $row['phone'];
$address = $row['address'];
$faculty = $row['faculty'];
$dept = $row['dept'];
$nok_name = $row['nok_name'];
$n_phone = $row['n_phone'];
$pwd = $row['pwd'];
?>
<form method="post" action="save.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email; ?>">
  <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>"/>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" id="address" name="address" class="form-control" value="<?php echo $address; ?>"/>
</div>

  <div class="form-group">
    <label for="faculty">Faculty</label>
    <input type="text" name="faculty" class="form-control" id="faculty" value="<?php echo $faculty; ?>">
    <label for="dept">Department</label>
    <input type="text" id="dept" name="dept" value="<?php echo $dept; ?>"/>
  </div>


  <div class="form-group">
    <label for="nok">Next of Kin Name</label>
    <input type="text" name="nok" class="form-control" id="nok" value="<?php echo $nok_name; ?>">
    <label for="n_phone">Next of Kin Phone no</label>
    <input type="text" id="n_phone" name="n_phone" value="<?php echo $n_phone; ?>"/>
  </div>


    <div class="form-group">
      <label for="nok">Image Upload</label>
      <input type="file" name="propic" class="form-control" id="nok">
    </div>

      <div class="form-group">
        <label for="n">Password</label>
        <input type="password" name="pwd" class="form-control" id="n" value="<?php echo $pwd; ?>">
        <label for="no">Re-type Password</label>
        <input type="password" name="pwwd" class="form-control" id="no" value="<?php echo $pwd; ?>" REQUIRED>
      <div id="msg">

      </div>
      </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
