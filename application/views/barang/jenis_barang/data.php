<h2>Data Jenis Barang</h2>

<a class="tambah" href="#" data-toggle="modal" data-target="#myModal">Tambah</a>

<table class="" border="1">
	<thead>
		<tr>
			<th>#</th>
			<th>Jenis Barang</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; foreach ($data as $d) { ?>
			<tr>
				<td><?= $i ?></td>
				<td><?= $d->jenis_barang ?></td>
				<td>
					<a class="hapus" id="<?= $d->id_jenis_barang ?>" href="#" data-toggle="modal" data-target="#myModal">Hapus</a>
					<a class="edit" id="<?= $d->id_jenis_barang ?>" href="#" data-toggle="modal" data-target="#myModal">Edit</a>
				</td>
			</tr>
		<?php $i++; } ?>
	</tbody>
</table>

<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="judul"></h4>
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

		$('.tambah').click(function(){
			$.ajax({
				url 	: '<?= base_url('index.php/jenis_barang/tambah_jenis_barang') ?>',
				method  : 'post',
				success : function(data){
					$('#myModal').modal("show");
                    $('#tampil_modal').html(data);
                    document.getElementById("judul").innerHTML='Tambah Jenis Barang';
				}
			});
		});

		$('.hapus').click(function(){
			var id_jenis_barang = $(this).attr('id');
			$.ajax({
				url 	: '<?= base_url('index.php/jenis_barang/hapus_jenis_barang') ?>',
				method  : 'post',
				data 	: {id_jenis_barang:id_jenis_barang},
				success : function(data){
					$('#myModal').modal("show");
                    $('#tampil_modal').html(data);
                    document.getElementById("judul").innerHTML='Hapus Barang';
				}
			});
		});

		$('.edit').click(function(){
			var id_jenis_barang = $(this).attr('id');
			$.ajax({
				url 	: '<?= base_url('index.php/jenis_barang/edit_jenis_barang') ?>',
				method  : 'post',
				data 	: {id_jenis_barang:id_jenis_barang},
				success : function(data){
					$('#myModal').modal("show");
                    $('#tampil_modal').html(data);
                    document.getElementById("judul").innerHTML='Edit Barang';
				}
			});
		});

	});
</script>