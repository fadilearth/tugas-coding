<form id="form" method="post">
    <input type="hidden" name="id_jenis_barang" value="<?= $data->id_jenis_barang ?>">
	<input type="text" name="jenis_barang" value="<?= $data->jenis_barang ?>"> <br>
	<button type="button" id="edit" data-dismiss="modal">Edit</button>
</form>

<script type="text/javascript">
	$(document).ready(function(){
		$('#edit').click(function(){
			var data = $('#form').serialize();
            $.ajax({
                type	: 'post',
                url	    : "<?= base_url('index.php/jenis_barang/edit') ?>",
                data    : data,
                success	: function(data) {
                    $('#tampil').load("<?= base_url('index.php/jenis_barang') ?>");
                }
            });
		});
	});
</script>