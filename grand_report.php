<?php
include_once('../utility.php');
 ?>

 <div class="row">
 <div class="col-md-12">
 <div class="box box-primary">
 <div class="box-body">
 <div class="form-group col-xs-3">
   <label for="start_date">Start Date</label>
   <input type="date" class="form-control" id="start_date">
 </div>

 <div class="form-group col-xs-3">
   <label for="end_date">End Date</label>
   <input type="date" class="form-control" id="end_date">
 </div>

 <div class="form-group col-xs-2">
   <label for="withdraw"></label>
   <button class="form-control" id="sum">Generate</button>
 </div>
   </div></div></div></div>


 <div id="content">
   <div class="box">
<div class="box-body">
<table class="table">
  <thead>
  <tr>

    <td>
      <strong><h4>INCOME REPORT</h4></strong>
    </td>
  </tr>
  </thead>
  <tr>
    <th>
      Total Expected Deposits
    </th>
    <td><?php echo thrift_special(1)[3] + thrift_special(2)[3]; ?></td>
  </tr>
  <tr>
    <th>
      Total Expected Interest on Loan
    </th>
    <td><?php echo expected()[0]; ?></td>
  </tr>
  <tr>
    <th>
      Total Expected Loan Recovery
    </th>
    <td><?php echo expected()[1]; ?></td>
  </tr>
  <tr>
  <th>Charge Recieved on Loan</th>
  <td><?php echo charge_total()[0]; ?></td>
  </tr>

  <tr>
    <th>
      Total Expected Income
    </th>
    <td><?php echo thrift_special(1)[3] + thrift_special(2)[3] + loan_report()[2]; ?></td>
  </tr>
  <tr>
  <th>Total Paid on PassBook</th>
  <td><?php echo charge_total()[1]; ?></td>
  </tr>
  <tr>
    <th>
Available Funds
    </th>
    <td><?php echo revenue()[0]; ?></td>
  </tr>


</table>
</div>
</div>
</div>
