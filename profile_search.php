<?php
$id =$_GET['id'];
$result = query("SELECT * FROM customer WHERE id='$id'");
$row = mysql_fetch_array($result);
$mid_name = $row['middle_name'];
$surname = $row['surname'];
$fname = $row['firstname'];
$email = $row['email'];
$phone = $row['phone'];
$add = $row['address'];
$dept = $row['dept'];
$faculty = $row['faculty'];
$state = $row['state'];
$lga = $row['lga'];
//$title = $row['title'];
$sex = $row['sex'];
$dob = $row['dob'];
$n_phone = $row['n_phone'];
$nok_name = $row['nok_name'];
?>
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->

              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">About Me</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>  Email</strong>
                  <p class="text-muted">
                    <?php echo $email; ?>
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Phone</strong>
                  <p class="text-muted"><?php echo $phone; ?></p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                  <p class="text-muted"><?php echo $add; ?></p>

                  <hr>

                  <strong><i class="fa fa-pencil margin-r-5"></i> State & LGA of Origin</strong>
                  <p>
                    <span class="label label-primary"><?php echo $state; ?></span>
                    <span class="label label-primary"><?php echo $lga; ?></span>
                  </p>

                  <hr>
                  <strong><i class="fa fa-map-marker margin-r-5"></i> Date of Birth</strong>
                  <p class="text-muted"><?php echo $dob; ?></p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Sex</strong>
                  <p class="text-muted"><?php echo $sex; ?></p>

                  <hr>

        <strong><i class="fa fa-pencil margin-r-5"></i> Next Of Kin Details</strong>
          <p>
            <?php echo $nok_name; ?></p>
          <p><?php echo $n_phone; ?>
          </p>


                </div><!-- /.box-body -->
              </div><!-- /.box -->


              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                </div><!-- /.box-header -->

              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#account" data-toggle="tab">Account</a></li>
                  <li><a href="#loan" data-toggle="tab">Loan</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="account">
                    <?php
                    $id = $_GET['id'];
                    $result = query("SELECT * FROM account WHERE emp_id='$id'");
                    if(mysql_num_rows($result) < 1){
                    echo "<h2>Account information unavailable</h2>";
                    }
                    else{
                    while ($row = mysql_fetch_array($result)) {
                    $type = $row['acct_type'];
                      $acct_type = "Special";
                    if($type == 1){
                      $acct_type = "Thrift";
                    }
                    $acct_no = $row['acct_no'];
                    $balance = $row['balance'];
                    $d_opened = $row['d_opened'];
                    $duration = $row['duration'];
                    ?>

                    <div class="box">
                      <div class="box-header">
                      </div><!-- /.box-header -->
                      <div class="box-body no-padding">
                      <table class="table table-condensed">
                          <tr>
                            <th>Account Type</th>
                            <td><?php echo $acct_type;?></td>
                          </tr>
                          <tr>
                            <th>Account No</th>
                            <td><a href="index.php?page=../dep_witd&id=<?php echo $acct_no; ?>"><?php echo $acct_no; ?></a></td>
                           </tr>
                          <tr>
                            <th>Balance</th>
                            <td><?php echo $balance; ?></td>
                          </tr>
                          <tr>

                            <th>Created</th>
                            <td>
                              <?php echo $d_opened; ?>
                            </td>

                            <th>valid till</th>
                            <td>
                              <?php echo $duration; ?>
                            </td>

                          </tr>
                        </table>
                      </div><!-- /.box-body -->
                    </div>
                    <?php
                    }
                    }
                     ?>


                  </div><!-- /.tab-pane -->
                    <div class="tab-pane" id="loan">
                      <?php include('../loan_report.php'); ?>
                    </div><!-- /.tab-pane -->
                  <!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
