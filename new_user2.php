<div class="row">
            <!-- left column -->
            <div class="col-md-10">
              <!-- general form elements -->
              <div class="box box-primary">

<form method="post" action="../new_user_sub2.php">
   <div class="box-body">

  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" name="name" class="form-control" id="fullname" placeholder="First Name" REQUIRED>
    <input type="text" name="mname" class="form-control" placeholder="Middle Name" REQUIRED>
    <input type="text" name="sname" class="form-control"  placeholder="SurName" REQUIRED>
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
    <input type="text" name="state" class="form-control" placeholder="State" REQUIRED/>
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
<select class="form-control" id="dept" name="dept">

</select>
</div>



  <button type="submit" class="btn btn-default">Submit</button>
</div>
</form>
</div>
</div>
</div>
