<!DOCTYPE html>
<html>
<head>
	<title>Keranjang</title>
</head>
<body>
	
	<table border="1">
		<thead>
			<tr>
				<th>#</th>
				<!-- <th>Gambar</th> -->
				<th>Barang</th>
				<th>Status</th>
				<th>jumlah Beli</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; foreach ($data as $d) { ?>
				<tr>
					<td><?= $i ?></td>
					<!-- <td></td> -->
					<td><?= $d->nama_barang ?></td>
					<td><?= $d->status ?></td>
					<td><?= $d->jumlah_terjual ?></td>
					<td><a href="<?= base_url('index.php/transaksi/hapus_keranjang/'.$d->id_transaksi) ?>">Hapus</a></td>
				</tr>
			<?php $i++; } ?>
		</tbody>
	</table>

	<a href="<?= base_url('index.php/transaksi/pesan_barang') ?>">Pesan</a>

</body>
</html>