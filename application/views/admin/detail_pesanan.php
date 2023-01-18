<div class=" table-responsive" style="text-align: center;">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Barang</th>
				<th scope="col">Jumlah Beli</th>
				<th scope="col">Status</th>
				<th scope="col">Tanggal Di Pesan</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; foreach ($data as $d) { ?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $d->nama_barang ?></td>
					<td><?= $d->jumlah_terjual ?></td>
					<td><?= $d->status ?></td>
					<td><?= $d->tgl_transaksi ?></td>
					<td><a class="konfirmasi" id="<?= $d->id_transaksi ?>" href="#">Konfirmasi</a></td>
				</tr>
			<?php } $i++; ?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.konfirmasi').click(function(){
			var id = $(this).attr('id');
			window.id_akun = id_akun;
			$.ajax({
				url 	: '<?= base_url('index.php/admin/konfirmasi_pesanan') ?>',
				method  : 'post',
				data 	: {id:id},
				success : function(data) {
					$('#tampil_modal').load("<?= base_url('index.php/admin/detail_pesanan/') ?>");
				}
			});
		});
	});
</script>