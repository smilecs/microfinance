<div class="box">
<div class="box-body no-padding">
<table class="table">
  <thead>
  <tr>
    <td>
      <strong><h4>LOAN RECOVERY MONTHLY REPORT</h4></strong>
    </td>
  </tr>
</thead>
  <tr>
    <th>
      Total Loan Recovered:
    </th>
    <td>
      <?php echo loan_report_mnt()[0]; ?>
    </td>
  </tr>
  <tr>
    <th>
      Total Interest Recieved
    </th>
    <td>
      <?php echo loan_report_mnt()[1]; ?>
    </td>
  </tr>
  <tr>
    <th>
      Overall Loan Recovered
    </th>
    <td>
      <?php echo loan_report()[0]; ?>
    </td>
  </tr>
</table>
