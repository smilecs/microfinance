<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">

<form action="../loan_sub.php" method="post">
  <div class="box-body">
<div class="form-group">
  <label for="emp_id">Identification Number</label>
  <input type="Number" name="emp_id" class="form-control" id="emp_id">
</div>

<div class="form-group">
  <label for="loan">Maximum Loan Allowed</label>
<label id="loan"></label>
</div>


<div class="form-group">
  <label for="amt">Amount</label>
  <input type="Number" id="amt" name="amt" class="form-control" required/>
</div>

<div class="form-group">
  <label for="duration">Duration</label>
  <input type="Number" id="duration" name="duration" class="form-control" required/>
</div>

<div class="form-group">
  <label for="sure1">Suretie Staff no</label>
  <input type="text" id="sure1" name="sure1" class="form-control" required/>
</div>

<div class="form-group">
  <label for="sure2">Suretie 2 Staff no</label>
  <input type="text" id="sure2" name="sure2" class="form-control" required/>
</div>


<div class="form-group">
  <input type="submit"  class="btn btn-primary" value="submit"/>
</div>
</div>
</form>

<div class="form-group">
  <button class="btn btn-primary cs" id="calcs">Calculate</button>

</div>
</div>
</div>




<div class="col-md-3">
  <div class="box box-primary">
    <div class="box-body" id="new_content">
    </div>
  </div>
</div>

</div>
