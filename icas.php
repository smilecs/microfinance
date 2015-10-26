<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">

<form action="../icas_sub.php" method="post">
  <div class="box-body">
<div class="form-group">
  <label for="emp_id">Identification Number</label>
  <input type="Number" name="emp_id" class="form-control" id="emp_id">
</div>
<input type="Number" id="duration" hidden="TRUE"/>

<div class="form-group">
  <label for="amt">Amount</label>
  <input type="Number" id="amt" name="amt" class="form-control" required/>
</div>

<div class="form-group">
  <label for="take">Take Home Balance</label>
  <input type="Number" id="take" name="take_home" class="form-control" required/>
</div>



<div class="form-group">
  <input type="submit"  class="btn btn-primary" value="submit"/>
</div>
</div>
</form>
  <button class="btn btn-primary cs" id="calc">Calculate</button>

</div>
</div>
<div class="col-md-3">
  <div class="box box-primary">
    <div class="box-body" id="new_content">
    </div>
  </div>
</div>

</div>
