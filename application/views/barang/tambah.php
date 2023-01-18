<form method="post" id="form">
	<input type="text" name="nama_barang" placeholder="Nama Barang"> <br>
	<select name="id_jenis_barang">
		<option>Pilih Jenis Barang</option>
		<?php foreach ($data as $d) { ?>
			<option value="<?= $d->id_jenis_barang ?>"><?= $d->jenis_barang ?></option>
		<?php } ?>
	</select> <br>

	<input type="number" name="stok"> <br>
	<button type="button" id="tambah" data-dismiss="modal">Tambah</button>
</form>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tambah').click(function(){
			var data = $('#form').serialize();
            $.ajax({
                type	: 'post',
                url	    : "<?= base_url('index.php/barang/tambah') ?>",
                data    : data,
                success	: function(data) {
                    $('#tampil').load("<?= base_url('index.php/barang') ?>");
                }
            });
		});
	});
</script>