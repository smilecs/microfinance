<?php
include_once('../utility.php');
 ?>
<div class="box">
<div class="box-body no-padding">
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
    <th>
      Total Expected Income
    </th>
    <td><?php echo thrift_special(1)[3] + thrift_special(2)[3] + loan_report()[2]; ?></td>
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
