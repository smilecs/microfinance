<?php
$type = $_GET['type'];
$page = $_GET['red'];
function month_select_box( $field_name = 'month' ) {
    $month_options = '';
    for( $i = 1; $i <= 12; $i++ ) {
        $month_num =  $month_num = str_pad( $i, 2, 0, STR_PAD_LEFT );
        $month_name = date( 'F', mktime( 0, 0, 0, $i + 1, 0, 0, 0 ) );
        $month_options .= '<option value="' . $month_num  . '">' . $month_name . '</option>';
    }
    return '<select name="' . $field_name . '" class="form-control" id="month">' . $month_options . '</select>';
}
?>
<div class="row">
            <!-- left column -->
            <div class="col-md-10">
              <!-- general form elements -->
              <div class="box box-primary">

<form method="post" action="index.php?page=../<?php echo $page; ?>&type=<?php echo $type; ?>">
  <div class="box-body">

  <div class="form-group col-xs-5">
  <label for="month">Month</label>
  <?php echo month_select_box("month"); ?>
  </div>
  <div class="form-group col-xs-5">
  <label for="year">Year</label>
  <select name="year" id="year" class="form-control">
    <option value="2015">2015</option>
      <option value="2016">2016</option>
        <option value="2017">2017</option>
          <option value="2018">2018</option>
            <option value="2019">2019</option>
              <option value="2020">2020</option>
  </select>
</div><br>
  <div class="form-group">
  <input type="submit" class="btn btn-primary" value="submit">
  </div>
</div>
</form>
</div>
</div>
</div>
