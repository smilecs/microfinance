<?php
$id =$_SESSION['id'];
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
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>  Faculty</strong>
                  <p class="text-muted">
              <?php echo $faculty; ?>
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Department</strong>
                  <p class="text-muted"><?php echo $dept; ?></p>

                  <hr>

                                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#account" data-toggle="tab">Settings</a></li>
                                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="account">
                    <?php include('../profile_edit.php'); ?>
                  </div><!-- /.tab-pane -->
                  <!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
