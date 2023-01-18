<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?= base_url('assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<h1>Data Pesanan</h1>

	<table border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Pemesan</th>
				<th>jumlah Barang</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; foreach ($data as $d) { ?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $d->nama_lengkap ?></td>
					<td><?= $d->jumlah_beli ?></td>
					<td><a class="detail" id="<?= $d->id_akun ?>" href="#">Detail</a></td>
				</tr>
			<?php $i++; } ?>
		</tbody>
	</table>

	<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="judul">Detail Pemesanan</h4>
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
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

	<script>
        $(document).ready(function(){
            $('.detail').click(function(){
                var id = $(this).attr("id");
                $.ajax({
                    url: '<?= base_url('index.php/admin/detail_pesanan'); ?>',
                    method: 'post',
                    data: {id:id},
                    success:function(data){
                        $('#myModal').modal("show");
                        $('#tampil_modal').html(data); 
                    }
                });
            });
        });
    </script>

</body>
</html>