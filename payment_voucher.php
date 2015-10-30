<?php
include_once('conf/db_connect.php');
connect();
$id = $_POST['acct_no'];
$form = "<form action=../process_voucher.php?id=$id method=post enctype=multipart/form-data >
<div class=form-group>
<label for=voucher>Voucher Upload</label>
<input type=file name=voucher id=voucher />
</div>
<div class=form-group>
<input type=submit value=upload />
</div>
</form>";

echo $form;
 ?>
