<div class="row">
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#witd" data-toggle="tab">Transaction History</a></li>
              </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="witd">
          <?php // include('../wit_n.php');
          if($priv == '2'){
          include('transaction_report.php');
          }else{
          include('../transaction_report.php');
        }
          ?>
        </div><!-- /.tab-pane -->

          <?php //include('../dep_n.php'); ?>
              <!-- /.tab-pane -->
      </div><!-- /.tab-content -->
    </div><!-- /.nav-tabs-custom -->
  </div><!-- /.col -->
  <div class="col-md-3">

    <!-- Profile Image -->

    <div class="box box-primary">
      <div class="box-header with-border">
            </div><!-- /.box-header -->
      <div class="box-body">

                  <label for="start_date">Start Date</label>
          <input type="date" class="form-control" id="start_date">

          <label for="end_date">End Date</label>
          <input type="date" class="form-control" id="end_date">

                  <label for="en"></label>
          <button class="form-control" id="genes">Generate</button>

         </div></div></div>

      </div><!-- /.box-body -->
    </div><!-- /.box -->


    <!-- About Me Box -->
      </div>
</div><!-- /.row -->
