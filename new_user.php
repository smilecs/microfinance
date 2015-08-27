<form method="post" action="new_user_sub.php">
  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" name="name" class="form-control" id="fullname" placeholder="First Name">
    <input type="text" name="mname" class="form-control" placeholder="Middle Name">
    <input type="text" name="sname" class="form-control"  placeholder="SurName">
</div>
<div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  <input type="text" name="phone" class="form-control" placeholder="phone"/>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" id="address" name="address" class="form-control" placeholder="address"/>
    <input type="text" name="state" class="form-control" placeholder="State"/>
    <input type="text" name="lga" class="form-control" placeholder="lga"/>
</div>
  <div class="form-group">
    <input type="date" name="dob" class="form-control" placeholder="date of birth"/>
  </div>
  <div class="form-group">
    <label for="sex">Sex</label>
    <select name="sex" id="sex" name="sex" class="form-control">
    <option value="male"> Male</option>
    <option value="female"> Female</option>
    </select>
  </div>
  <div class="form-group">
    <label for="faculty">Faculty</label>
    <input type="text" name="faculty" class="form-control" id="faculty" placeholder="faculty">
    <label for="dept">Department</label>
    <input type="text" id="dept" name="dept" placeholder="department"/>
  </div>


  <div class="form-group">
    <label for="nok">Next of Kin Name</label>
    <input type="text" name="nok" class="form-control" id="nok" placeholder="faculty">
    <label for="n_phone">Next of Kin Phone no</label>
    <input type="text" id="n_phone" name="n_phone" placeholder="next of kin phone"/>
  </div>

  <div class="form-group">
  <label for="user">User type</label>
    <select id="user" name="user_type" class="form-control">
    <option value="0">admin</option>
    <option value="1">teller</option>
    <option value="2">passive</option>
    </select>
  </div>


  <button type="submit" class="btn btn-default">Submit</button>
</form>
