<form method="post" id="form">
	<input type="text" name="jenis_barang" placeholder="Jenis Barang"> <br>
	<button type="button" id="tambah" data-dismiss="modal">Tambah</button>
</form>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tambah').click(function(){
			var data = $('#form').serialize();
            $.ajax({
                type	: 'post',
                url	    : "<?= base_url('index.php/jenis_barang/tambah') ?>",
                data    : data,
                success	: function(data) {
                    $('#tampil').load("<?= base_url('index.php/jenis_barang') ?>");
                }
            });
		});
	});
</script>