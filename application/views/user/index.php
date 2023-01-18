<!DOCTYPE html>
<html>
<head>
	<title>-</title>
	<link href="<?= base_url('assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<a href="<?= base_url('index.php/transaksi/keranjang') ?>">Keranjang</a>
	<a href="<?= base_url('index.php/transaksi/pesanan_user') ?>">Pesanan Saya</a>

	<a href="<?= base_url('index.php/user/bandingkan') ?>">Bandingkan</a>

	<?php foreach ($data as $d) { ?>
		<div class="card">
			<p><?= $d->nama_barang ?></p>
		</div>
		<a class="detail" id_barang="<?= $d->id_barang ?>" href="#" data-toggle="modal" data-target="#myModal">Detail</a>
	<?php } ?>

	<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Detail Barang</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div id="tampil_modal">
					<!-- Data akan di tampilkan disini-->			
				</div>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.detail').click(function(){
			var id_barang = $(this).attr('id_barang');
			$.ajax({
				url 	: '<?= base_url('index.php/user/detail_barang') ?>',
				method  : 'post',
				data 	: {id_barang:id_barang},
				success : function(data){
					$('#myModal').modal("show");
                    $('#tampil_modal').html(data);
				}
			});
		});
	});
</script>

</body>
</html>