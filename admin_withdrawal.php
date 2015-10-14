<?php
include_once('../utility.php');
 ?>
<div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Funds Withdrawal Form</h3>
                </div>
  <div class="box-body">

  <div class="form-group">
  <label for="acct">Description(Purpose)</label>
  <textarea name="desc" class="form-control" id="desc" placeholder="DESC" height="50px" width="50px">
  </textarea>

  </div>
  <div class="form-group">
  <label for="amount">Withdrawal Amount</label>
  <input type="text" name="amount" id="amount" class="form-control"  placeholder="1000">
  </div>
  <div class="form-group">
  <button class="btn btn-default" id="pa">Submit</button>
  </div>
<div id="content">
</div>
</div>
</div>
</div>
<div class="col-md-3" id="new_table">
  <strong><i></i>Total Available funds</strong>
  <p class=text-muted><?php echo revenue()[0]; ?></p>
  <div id="new">

  </div>
          </div>
</div>
