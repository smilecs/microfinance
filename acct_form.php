
<div class="row">
            <!-- left column -->
            <div class="col-md-10">
              <!-- general form elements -->
              <div class="box box-primary">

<form method="post" action="../acct_sub.php">
<div class="box-body">
  <div class="form-group">
<label for="emp_id">Member ID</label>
<input type="text" name="emp_id" class="form-control" id="emp_id" placeholder="Registration ID">
</div>
<div class="form-group">
<label for="acct_type">Account Type</label>
<select name="acct_type" class="form-control" id="acct_type">
<option value="1">
  Thrift Account
</option>
<option value="2">
  Special Account
</option>
</select>
</div>
<div class="form-group" id="new_elem">

</div>
<div class="form-group">
<label for="sv">Monthly Savings</label>
<input type="text" name="save_amt" class="form-control" id="sv" placeholder="5000.00">
</div>
<div class="form-group">
  <input type="submit" class="btn btn-primary" value="Create Account">
</div>
</div>
</form>
</div>
</div>
</div>
