<div class="row">
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#witd" data-toggle="tab">Withdrawal History</a></li>
        <li><a href="#dep" data-toggle="tab">Deposit History</a></li>
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="witd">
          <?php include('../wit_n.php'); ?>
        </div><!-- /.tab-pane -->
        <div class="tab-pane" id="dep">
          <?php include('../dep_n.php'); ?>
        </div>
        <!-- /.tab-pane -->
      </div><!-- /.tab-content -->
    </div><!-- /.nav-tabs-custom -->
  </div><!-- /.col -->
</div><!-- /.row -->
