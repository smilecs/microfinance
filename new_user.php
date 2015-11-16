<div class="row">
            <!-- left column -->
            <div class="col-md-10">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">New Member Form</h3>
                </div>
<form method="post" action="../new_user_sub.php">
   <div class="box-body">

     <div class="form-group">
         <label for="title">Tite</label>
         <select name="title" class="form-control" id="title"><option></option>
         <option value="Miss">
           Miss
         </option>
         <option value="Mr">
           Mr
         </option>
         <option value="Mrs">
           Mrs
         </option>
         <option value="Dr">
           Dr
         </option>
         <option value="Prof">
           Prof
         </option>
         </select>
       </div>

  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" name="name" class="form-control" id="fullname" placeholder="First Name" REQUIRED>
    <input type="text" name="mname" class="form-control" placeholder="Middle Name" REQUIRED>
    <input type="text" name="sname" class="form-control"  placeholder="SurName" REQUIRED>
</div>

<div class="form-group">
    <label for="em">Employee ID</label>
    <input type="text" name="emp_no" class="form-control" id="em" placeholder="employee no" REQUIRED>
  </div>

<div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="username" REQUIRED>
  <div id="msg">
  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Info</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" REQUIRED>
  <input type="text" name="phone" class="form-control" placeholder="phone" REQUIRED/>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" id="address" name="address" class="form-control" placeholder="address" REQUIRED/>
<select name="state" class="form-control" id="day"><option value="">--select State--</option>
       <option value="Abia">Abia</option>
 <option value="Adamawa">Adamawa</option>
       <option value="Akwa Ibom">Akwa Ibom</option>
 <option value="Anambra">Anambra</option>
       <option value="Bauchi">Bauchi</option>
 <option value="Bayelsa">Bayelsa</option>
       <option value="Benue">Benue</option>
 <option value="Borno">Borno</option>
       <option value="Cross River">Cross River</option>
 <option value="Delta">Delta</option>
       <option value="Ebonyi">Ebonyi</option>
       <option value="Edo">Edo</option>
       <option value="Ekiti">Ekiti</option>
       <option value="Enugu">Enugu</option>
       <option value="Gombe">Gombe</option>
 <option value="Imo">Imo</option>
       <option value="Jigawa">Jigawa</option>
       <option value="Kaduna">Kaduna</option>
       <option value="Kano">Kano</option>
       <option value="Katsina">Katsina</option>
       <option value="Kebbi">Kebbi</option>
 <option value="Kogi">Kogi</option>
       <option value="Kwara">Kwara</option>
       <option value="Lagos">Lagos</option>
       <option value="Nasarawa">Nasarawa</option>
       <option value="Niger">Niger</option>
       <option value="Ogun">Ogun</option>
 <option value="Ondo">Ondo</option>
       <option value="Osun">Osun</option>
       <option value="Oyo">Oyo</option>
       <option value="Plateau">Plateau</option>
       <option value="Rivers">Rivers</option>
       <option value="Sokoto">Sokoto</option>
       <option value="Taraba">Taraba</option>
       <option value="Yobe">Yobe</option>
       <option value="Zamfara">Zamfara</option>
       <option value="FCT">FCT</option>
 </select>


        <input type="text" name="lga" class="form-control" placeholder="lga" REQUIRED/>
</div>
  <div class="form-group">
    <input type="date" name="dob" class="form-control" placeholder="date of birth" REQUIRED/>
  </div>
  <div class="form-group">
    <label for="sex">Sex</label>
    <select name="sex" id="sex" name="sex" class="form-control">
    <option value="male"> Male</option>
    <option value="female"> Female</option>
    </select>
  </div>
  <div class="form-group">
    <label for="dept">Faculty</label>
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

<div class="form-group">
<select class="form-control" id="dept" name="dept">

</select>
</div>

  <div class="form-group">
    <label for="nok">Next of Kin Name</label>
    <input type="text" name="nok" class="form-control" id="nok" placeholder="Next Of Kin Name">
    <label for="n_phone">Next of Kin Phone no</label>
    <input type="text" id="n_phone" name="n_phone" placeholder="next of kin phone"/>
  </div>


  <button type="submit" class="btn btn-default">Submit</button>
</div>
</form>
</div>
</div>
</div>
