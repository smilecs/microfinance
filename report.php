<div class="box">
<div class="box-body no-padding">
<table class="table">
  <thead>
  <tr>

    <td>
      <strong><h4>THRIFT SAVINGS REPORT SUMMARY</h4></strong>
    </td>
  </tr>
  </thead>
  <tr>
    <th>
      Total Number Deposits
    </th>
    <td><?php echo thrift_special(1)[0]; ?></td>
  </tr>
  <tr>
    <th>
      Total Amount Deposited
    </th>
    <td><?php echo thrift_special(1)[1]; ?></td>
  </tr>
  <tr>
    <th>
      Expected Number of Deposits
    </th>
    <td><?php echo thrift_special(1)[2]; ?></td>
  </tr>
  <tr>
    <th>
      Expected Deposit Amount
    </th>
    <td><?php echo thrift_special(1)[3]; ?></td>
  </tr>

</table>

<table class="table">
  <thead>
  <tr>

    <td>
      <strong><h4>SPECIAL SAVINGS REPORT SUMMARY</h4></strong>
    </td>
  </tr>
  </thead>
  <tr>
    <th>
      Total Number Deposits
    </th>
    <td><?php echo thrift_special(2)[0]; ?></td>
  </tr>
  <tr>
    <th>
      Total Amount Deposited
    </th>
    <td><?php echo thrift_special(2)[1]; ?></td>
  </tr>
  <tr>
    <th>
      Expected Number of Deposits
    </th>
    <td><?php echo thrift_special(2)[2]; ?></td>
  </tr>
  <tr>
    <th>
      Expected Deposit Amount
    </th>
    <td><?php echo thrift_special(2)[3]; ?></td>
  </tr>

</table>

<table class="table">
  <thead>
  <tr>

    <td>
      <strong><h4>LOAN RECOVERY REPORT SUMMARY</h4></strong>
    </td>
  </tr>
</thead>
  <tr>
    <th>
      Total Loan Recovered:
    </th>
    <td>
      <?php echo loan_report()[0]; ?>
    </td>
  </tr>
  <tr>
    <th>
      Total Interest Recieved
    </th>
      <td>
      <?php echo round(loan_report()[1], 2); ?>
    </td>
  </tr>
  <tr>
    <th>
      Expected Loan Recovered
    </th>
    <td>
      <?php echo loan_report()[2]; ?>
    </td>
  </tr>
</table>
<table class="table">
  <thead>
  <tr>

    <td>
      <strong><h4>WITHDRAWAL REPORT SUMMARY</h4></strong>
    </td>
  </tr>
  </thead>
  <tr>
    <th>
      Total Withdrawals Made
    </th>
    <td>
      <?php echo withdraw_report()[0]; ?>
    </td>
  </tr>

  <tr>
    <th>
      Total Amount Withdrawn
    </th>
    <td>
      <?php echo withdraw_report()[1]; ?>
    </td>

  </tr>

</table>
</div>
</div>
