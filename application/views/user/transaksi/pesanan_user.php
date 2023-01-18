<!DOCTYPE html>
<html>
<head>
	<title>-</title>
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
					<?php if ($d->status == 'Di keranjang') { ?>
						<td colspan="5" align="center">Tidak Ada Pesanan</td>
					<?php } else { ?>
						<td><?= $i ?></td>
						<!-- <td></td> -->
						<td><?= $d->nama_barang ?></td>
						<td>
							<?php if ($d->status == 'Di pesan') { ?>
								Menuggu untuk di konfirmasi
							<?php } else { ?>
								<?= $d->status ?>
							<?php } ?>
						</td>
						<td><?= $d->jumlah_terjual ?></td>
						<td><a href="<?= base_url('index.php/transaksi/hapus_keranjang/'.$d->id_transaksi) ?>">Hapus</a></td>
					<?php } ?>
				</tr>
			<?php $i++; } ?>
		</tbody>
	</table>

</body>
</html>