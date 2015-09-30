<?php
include_once('conf/db_connect.php');
connect();
include('utility.php');
$start = $_POST['start_date'];
$end = $_POST['end_date'];
$interest_loan = income_report($start, $end)[0];
$loan_recovery = income_report($start, $end)[1];
$deposit_amount = income_report($start, $end)[2];
$deposit_count = income_report($start, $end)[3];
$withdrawal_interest = income_report($start, $end)[4];
$admin_charge = income_report($start, $end)[5];
$passbook = income_report($start, $end)[6];
$body = "<div class=box>
<div class=box-body no-padding>
<table class=table>
  <thead>
  <tr>
    <td>
      <strong><h4>INCOME REPORT FOR PERIOD</h4></strong>
    </td>
  </tr>
  </thead>
  <tbody>
  <tr>
  <th>Interest on Loan</th>
  <td>$interest_loan</td>
  </tr>
  <tr>
  <th>Loan Recovered</th>
  <td>$loan_recovery</td>
  </tr>
  <tr>
  <th>Charge Recieved on Loan</th>
  <td>$admin_charge</td>
  </tr>
  <tr>
  <th>Total Deposited</th>
  <td>$deposit_amount</td>
  </tr>
  <tr>
  <th>Number of Deposits</th>
  <td>$deposit_count</td>
  </tr>
  <tr>
  <th>Interest Recieved on withdrawals</th>
  <td>$withdrawal_interest</td>
  </tr>
  <tr>
  <th>Total Paid on PassBook</th>
  <td>$passbook</td>
  </tr>
  </tbody>
  </table>
  </div>
  </div>
";
echo $body;
?>
