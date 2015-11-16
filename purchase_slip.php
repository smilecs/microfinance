<div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">PassBook</h3>
                </div>
  <div class="box-body">
    <div class="form-group">
  <label for="acct">Member Id</label>
  <input type="text" name="acct_no" class="form-control"  id="passbook" placeholder="Member Id">
  </div>
  <div class="form-group">
    <button class="btn btn-default" id="purchase">Purchase</button>
  </div>

</div>
</div>
</div>
<div class="col-md-3">

  <!-- Profile Image -->

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">PassBook</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <strong><i class="fa fa-book margin-r-5"></i>Price</strong>
      <p class="text-muted">
      <?php
      $result = query("SELECT * FROM percent WHERE id='4'");
      $row = mysql_fetch_array($result);
      $val = $row['value'];
      echo $val;
       ?>
      </p>
      <div id="content">

      </div>

    </div>
  </div>



</div>
