<!DOCTYPE html>
<?php
include('../conf/db_connect.php');
include ('../conf/misc.php');
connect();
session_start();
if(!isset($_SESSION['logged_in'])){
    redirect("../login.php");
}
$id = $_SESSION['id'];
$priv = $_SESSION['priv'];
if(isset($_GET['idd'])){
  $id = $_GET['idd'];
  redirect("index.php?page=../profile_search&id=$id");
}
if(isset($_GET['idd1'])){
  $id = $_GET['idd1'];
  redirect("index.php?page=../account_search&id=$id");
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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../arrange.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <h2 style='margin:0px;'>
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <img src="../dist/img/unical.png" height="50px">
          <span style='font-size:12px;'>Unical MPCS</span>
          </h2>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../dist/img/<?php echo db_pic($id); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo name($id); ?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i></a>
            </div>
          </div>

          <!-- search form (Optional) -->

          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="<?php echo classUpdate(""); ?>"><a href="index.php"><i class="glyphicon glyphicon-open"></i> <span>Dashboard</span></a></li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-tasks"></i> <span>Customer Management</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li>
                  <form action="index.php" method="get" class="sidebar-form">
                            <div class="input-group">
                              <input type="text" name="idd" class="form-control" placeholder="Search...">
                              <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                              </span>
                            </div>
                          </form>
                          </li>
                <li><a href="index.php?page=../customer_filter">Member</a></li>
                <li class="<?php echo classUpdate("../new_user"); ?>"><a href="index.php?page=../new_user"><i class="glyphicon glyphicon-folder-open"></i> <span>New Member</span></a></li>
</ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-tasks"></i> <span>Account Management</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li>
                  <form action="index.php" method="get" class="sidebar-form">
                            <div class="input-group">
                              <input type="text" name="idd1" class="form-control" placeholder="Search...">
                              <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                              </span>
                            </div>
                          </form>

                </li>
                <li class="<?php echo classUpdate("../acct_form"); ?>"><a href="index.php?page=../acct_form"><i class="glyphicon glyphicon-open"></i> <span>Create Account</span></a></li>
                <!--<li>
                  <a href="index.php?page=../account_report">View Accounts</a>
                </li>-->
                <li class="<?php echo classUpdate("../acct_form"); ?>"><a href="index.php?page=../purchase_slip"><i class="glyphicon glyphicon-open"></i> <span>Purchase Passbook</span></a></li>
                <li><a href="index.php?page=../account_amt">View Account</a></li>
                <li><a href="index.php?page=../deposit_form">Deposit</a></li>
                <li><a href="index.php?page=../withdraw_form">Withdraw</a></li>
                                </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-tasks"></i> <span>Loan Management</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?page=../loan_form">Loan</a></li>
                <li><a href="index.php?page=../pay_loan_form">Pay Loan</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-tasks"></i> <span>Schedule Generation</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?page=../thrift_schedule&type=thrift">Thrift</a></li>
                <li><a href="index.php?page=../thrift_schedule&type=special">Special</a></li>
                <li><a href="index.php?page=../schedule">Loan</a>
</li>

              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-tasks"></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <!--<li><a href="index.php?page=../member">Member</a></li>-->
                <li><a href="index.php?page=../interest_report">Interest</a></li>
                <li><a href="index.php?page=../loan_allocated">Loan Allocated</a></li>
                <li><a href="index.php?page=../thrift_mnt">Thrift</a></li>
                <li><a href="index.php?page=../special_mnt">Special</a></li>
                <li><a href="index.php?page=../loan_mnt">Loan</a></li>
                <li><a href="index.php?page=../transaction">Transaction</a></li>
                <li><a href="index.php?page=../report">Detailed</a></li>
                <li><a href="index.php?page=../grand_report">Grand Summary</a></li>
                  <li><a href="index.php?page=../admin_report">Admin Report</a></li>



              </ul>
            </li>


            <li><a href="index.php?page=profile"><i class="glyphicon glyphicon-folder-open"></i> <span>Profile</span></a></li>

            <li><a href="../logout.php"><i class="glyphicon glyphicon-folder-open"></i> <span>Log Out</span></a></li>

                      </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>

            <small></small>
          </h1>
                </section>

        <!-- Main content -->
        <section class="content">

          <?php

      $page = '';/* gets the variable $page */
          if (!empty($_GET['page'])) {
          $page .= $_GET['page'] . '.php';

          include($page);
          }   /* if $page has a value, include it */
      else{
      include('../dashboard.php');
      }
      ?>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">

        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">UNICAL MPCS</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <script src="../user.js"></script>
    <script src="../acct.js"></script>
    <script src="../duration_elem.js"></script>
    <script src="../withdraw.js"></script>
  <script src="../dep.js"></script>
  <script src="../loan.js"></script>
  <script src="../department_choice.js"></script>
  <script src="../transaction.js"></script>
  <script src="../filter.js"></script>
  <script src="../loan_calc.js"></script>
  <script src="../report_filter/thrift_special.js"></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
