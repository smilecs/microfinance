<?php
$result = query("SELECT * FROM percent");
 ?>
<form method="post" action="../value_sub.php">
  <?php
while($row = mysql_fetch_array($result)){
   $p_name = $row['p_name'];
   $id = $row['id'];
   $value = $row['value'];
   ?>
  <div class="form-group">
<label for="<?php echo $p_name; ?>"><?php echo $p_name; ?></label>
<input type="text" name="<?php echo $id;?>" class="form-control" id="<?php echo $p_name;?>" value="<?php echo $value; ?>">
<?php
}
?>
<input type="submit"/>
</div>
