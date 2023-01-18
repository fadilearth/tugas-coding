<form method="post" id="form">
	<input type="hidden" name="id_barang" value="<?= $data->id_barang ?>"> <br>
	<input type="number" name="jumlah_beli"> <br>
	<button type="button" id="tambah" data-dismiss="modal">Tambah</button>
</form>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tambah').click(function(){
			var data = $('#form').serialize();
            $.ajax({
                type	: 'post',
                url	    : "<?= base_url('index.php/transaksi/tambah_ke_keranjang') ?>",
                data    : data,
                success	: function(data) {
                    $('#tampil').load("<?= base_url('index.php/user') ?>");
                }
            });
		});
	});
</script>