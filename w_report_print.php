<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Microfinance</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="window.print();">
    <div class="wrapper">
<section class="invoice">

<?php
$type = $_GET['type'];
 ?>
<div class="box">
   <div class="box-body">
<table class="table">
<thead>
  <tr>
    <th>S/N</th>
    <th>UserId</th>
    <th>Amount</th>
    <th>Account No</th>
    <th>Date</th>
  </tr>
</thead>
<tbody>
<?php
$month = $_POST['month'];
$year = $_POST['year'];
$date = $year . "-" . $month;
$i= 0;
$total = 0;
$count_t = 0;
$count_s = 0;
$total_t = 0;
$total_s = 0;
$result = query("SELECT * FROM withdraw LEFT JOIN account ON withdraw.emp_id=account.emp_id WHERE date LIKE '$date-%'");
while($row = mysql_fetch_array($result)){
$id = $row['dep_id'];
$date = $row['date'];
$amount = $row['amount'];
$total += $amount;
$acct_type = $row['acct_type'];
$acct_no = $row['acct_no'];
if($acct_type == 1){
  $count_t++;
  $total_t += $amount;
}else{
  $count_s++;
  $total_s += $amount;
}
?>
<tr>
  <td>
<?php echo ++$i; ?>
</td>
  <td><?php echo $id;?></td>
  <td><?php echo $amount;?></td>
  <td><?php echo $acct_no;?></td>
  <td><?php echo $date;?></td>
</tr>
<?php
}
?>
<tr>
  <th>
    Total
  </th>
</tr>
<tr>
  <th>
    Thrift Total Deposit
  </th>
  <td></td>
  <td></td>
  <td></td>
  <th><?php echo $total_t; ?></th>
</tr>
<tr>
  <th>
    Special Total Deposit
  </th>
  <td></td>
  <td></td>
  <td></td>
  <th><?php echo $total_s; ?></th>
</tr>
<tr>
  <th>
    Sum Total
  </th>
  <td></td>
  <td></td>
  <td></td>
  <th><?php echo $total; ?></th>
</tr>
</tbody>
</table>
</div>


</div>
</section>
</div>
<script src="dist/js/app.min.js"></script>
</body>
</html>
