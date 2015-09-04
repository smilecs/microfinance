<?php
include('conf/db_connect.php');
connect();
$type = $_GET['type'];
$tp = '';
$msg = '';
switch ($type) {
  case 'special':
    $tp = '2';
    $msg = "Fee Schedule for Special Savings Account";
    break;

  default:
    $tp = '1';
    $msg = "Fee Schedule for Thrift Savings Account";
    break;
}
 ?>

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
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <i class="fa fa-globe"></i> <?php echo $msg;?>
              <small class="pull-right"><?php echo date('y-m-d');?></small>
            </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            From
            <address>
              <strong>Admin,</strong><br>
              txt txt txt txt<br>
              txt txt txt txt<br>
              Phone: (804) 123-5432<br>
              Email: info@almasaeedstudio.com
            </address>
          </div><!-- /.col -->
          <div class="col-sm-4 invoice-col">
            To
            <address>
              <strong>Eze Eze</strong><br>
              txt txt txt txt<br>
              txt txt txt txt<br>
              Phone: (555) 539-1037<br>
              Email: eze.doe@example.com
            </address>
          </div><!-- /.col -->

        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>s/n</th>
                  <th>UserId</th>
                  <th>FullName</th>
                  <th>Monthly Amt</th>
                  <th>Amount Todate</th>
                  <th>Balance</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $i= 0;
                $total = 0;
                $bal_total = 0;
                $amt_total = 0;
                $result = query("SELECT * FROM customer LEFT JOIN account ON customer.id=account.emp_id WHERE acct_type='$tp'");
                while($row = mysql_fetch_array($result)){
                $id = $row['emp_id'];
                $fullname = $row['firstname'] . " " . $row['surname'];
                $amount = $row['save_amt'];
                $total += $amount;
                $amt_todate = $row['amt_todate'];
                $amt_total += $amt_todate;
                $balance = $row['balance'];
                $bal_total += $balance;
                ?>

                <tr>
                  <td>
                <?php echo ++$i; ?>
                </td>
                  <td><?php echo $id;?></td>
                  <td><?php echo $fullname;?></td>
                  <td><?php echo $amount;?></td>
                  <td><?php echo $amt_todate;?></td>
                  <td><?php echo $balance;?></td>
                </tr>

<?php }
?>
<tr>
  <th></th>
  <th></th>
  <th></th>
  <th><?php echo $total;?></th>
  <th><?php echo $amt_total;?></th>
  <th><?php echo $bal_total;?></th>
</tr>
                            </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->

          <div class="col-xs-12">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th></th>
                  <th></th>
                </tr>
              </table>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
  </body>
</html>
