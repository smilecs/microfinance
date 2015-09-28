<div class="row">
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#account" data-toggle="tab">Account</a></li>
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="account">
          <?php
          $id = $_GET['id'];
          $result = query("SELECT * FROM account LEFT JOIN acct_type ON account.acct_type=acct_type.id WHERE acct_no='$id'");
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
                <tr>
                  <td>
                    <a href="deactivate.php?id=<?php echo $acct_no; ?>" class="btn btn-danger">Deactivate</a>
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
        <!-- /.tab-pane -->
        <!-- /.tab-pane -->
      </div><!-- /.tab-content -->
    </div><!-- /.nav-tabs-custom -->
  </div><!-- /.col -->
</div><!-- /.row -->
