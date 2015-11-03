<?php
$amort = $_GET['amort'];
$id = $_GET['insert_id'];
$type=loan;
if(isset($_GET['type'])){
  $type = $_GET['type'];
}
echo "<h3>Your amortization rate for your monthly payment on loan is $amort</h3>";
 ?>
 <form action="../process_voucher.php?id=<?php echo $id; ?>&loan=1&type=$type method=post enctype=multipart/form-data">
 <div class="form-group">
 <label for="voucher">Voucher Upload</label>
 <input type="file" name="voucher" id="voucher" />
 </div>
 <div class="form-group">
 <input type="submit" value="upload" />
 </div>
 </form>
