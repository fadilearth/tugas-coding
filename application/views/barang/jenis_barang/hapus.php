<form id="form" method="post">
	<input type="hidden" name="id_jenis_barang" value="<?= $data->id_jenis_barang ?>"> <br>
    <p>Yakin Ingin Menghapus Jenis Barang <?= $data->jenis_barang ?></p>
	<button type="button" id="hapus" data-dismiss="modal">Hapus</button>
</form>

<script type="text/javascript">
	$(document).ready(function(){
		$('#hapus').click(function(){
			var data = $('#form').serialize();
            $.ajax({
                type	: 'post',
                url	    : "<?= base_url('index.php/jenis_barang/hapus') ?>",
                data    : data,
                success	: function(data) {
                    $('#tampil').load("<?= base_url('index.php/jenis_barang') ?>");
                }
            });
		});
	});
</script>