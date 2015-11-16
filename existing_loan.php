<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <h4>EXISTING LOAN FORM</h4>

<form action="../existing_sub.php" method="post">
  <div class="box-body">
<div class="form-group">
  <label for="emp_id">Identification Number</label>
  <input type="Number" name="emp_id" class="form-control" id="emp_id">
</div>

<div class="form-group">
  <label for="amt">Total Loan</label>
  <input type="Number" id="amt" name="amt" class="form-control" required/>
</div>

<div class="form-group">
  <label for="duration">Duration</label>
  <input type="Number" id="duration" name="duration" class="form-control" required/>
</div>

<div class="form-group">
  <label for="sure1">Interest</label>
  <input type="Number" id="sure1" name="interest" class="form-control" required/>
</div>

<div class="form-group">
  <label for="sure2">Amount Paid</label>
  <input type="text" id="sure2" name="paid" class="form-control" required/>
</div>

<div class="form-group">
  <label for="sure2">Monthly Deduction</label>
  <input type="text" id="sure2" name="amort" class="form-control" required/>
</div>

<div class="form-group">
  <label for="sure2">Date</label>
  <input type="date" id="sure2" name="date" class="form-control" required/>
</div>

<div class="form-group">
  <label for="sure2">Balance</label>
  <input type="text" id="sure2" name="balance" class="form-control" required/>
</div>


<div class="form-group">
  <input type="submit"  class="btn btn-primary" value="submit"/>
</div>
</div>
</form>

</div>
</div>
</div>
