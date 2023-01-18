<!DOCTYPE html>
<html>
<head>
	<title>-</title>
</head>
<body>
	<form method="post" action="<?= base_url('index.php/user/bandingkan') ?>">
		<input type="text" name="jenis_barang" placeholder="jenis_barang">
		<input type="text" name="jenis_barang" placeholder="jenis_barang">

		<?php foreach ($data as $d) { ?>
			<p><?= $d->status ?></p>
		<?php } ?>
	</form>
</body>
</html>