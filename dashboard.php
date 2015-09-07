<?php
include('../utility.php');
?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo total_no_users(); ?></h3>
        <p>New Members this month</p>
      </div>
      <div class="icon">
        <i class="fa fa-user-plus"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div><!-- ./col -->

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo total_withdrawn()[0]; ?></h3>
        <p>Withdrawals Made This Month</p>
        <p>Total Amount of: <strong><?php echo total_withdrawn()[1];?></strong></p>
      </div>
      <div class="icon">
        <i class="fa fa-usd"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div><!-- ./col -->


  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo total_deposit()[0]; ?></h3>
        <p>Deposits Made</p>
        <p>Total Amount:<br><strong><?php echo total_deposit()[1];?></strong></p>
      </div>
      <div class="icon">
        <i class="fa fa-usd"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div><!-- ./col -->


    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo no_faculty(); ?></h3>
          <p>Faculties Registered</p>
          <p><strong><?php echo no_dept();?>  Departments</strong></p>
        </div>
        <div class="icon">
          <i class="fa fa-industry"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div><!-- ./col -->


      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo no_accounts()[0]; ?></h3>
            <p>Accounts</p>
            <p>Total Thrift Accounts:  <strong><?php echo no_accounts()[1];?></strong></p>
          <p>Total Special Accounts:   <strong><?php echo no_accounts()[2];?></strong></p>
          </div>
          <div class="icon">
            <i class="fa fa-archive"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

  </div><!-- /.row -->
