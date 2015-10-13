<?php
include('../utility.php');
?>
<div class="row">

  <div class="col-lg-4 col-xs-6">
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

    </div>
  </div><!-- ./col -->


  <div class="col-lg-4 col-xs-6">
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
    </div>
  </div><!-- ./col -->


    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo loan_report()[0]; ?></h3>
          <p>Total Loan Recovered</p>
          <p><strong><?php echo loan_report()[2];?> Expected Loan</strong></p>
            <p><strong>Loans Given:    <?php echo loan_report()[3];?></strong></p>
        </div>
        <div class="icon">
          <i class="fa fa-industry"></i>
        </div>
          </div>
    </div><!-- ./col -->


      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo no_accounts()[0]; ?></h3>
            <p>Accounts Opened</p>
            <p>Total Thrift Accounts:  <strong><?php echo no_accounts()[1];?></strong></p>
          <p>Total Special Accounts:   <strong><?php echo no_accounts()[2];?></strong></p>
          </div>
          <div class="icon">
            <i class="fa fa-archive"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo thrift_special(1)[3] + thrift_special(2)[3] + loan_report()[2]; ?></h3>
            <p>Total expected income</p>
            <p>Total expected deposits:  <strong><?php echo thrift_special(1)[3] + thrift_special(2)[3];?></strong></p>
          <p>Total expected loans:   <strong><?php echo loan_report()[2];?></strong></p>
          </div>
          <div class="icon">
            <i class="fa fa-archive"></i>
          </div>
          </div>
      </div>

      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo revenue()[0]; ?></h3>
            <p>Available funds</p>
            <p>Total revenue generated:  <strong><?php echo revenue()[1];?></strong></p>
          </div>
          <div class="icon">
            <i class="fa fa-archive"></i>
          </div>
        </div>
      </div>


  </div><!-- /.row -->
