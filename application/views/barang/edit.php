<form id="form" method="post">
	<input type="hidden" name="id_barang" value="<?= $data->id_barang ?>">
	<input type="text" name="nama_barang" value="<?= $data->nama_barang ?>"> <br>

	<select name="id_jenis_barang">
		<option value="<?= $data->id_jenis_barang ?>"><?= $data->jenis_barang ?></option>
		<?php foreach ($jenis_barang as $j) { ?>
			<option value="<?= $j->id_jenis_barang ?>"><?= $j->jenis_barang ?></option>
		<?php } ?>
	</select> <br>

	<input type="number" name="stok" value="<?= $data->stok ?>"> <br>

	<button class="edit" type="button" data-dismiss="modal">Edit</button>
</form>

<script type="text/javascript">
    $(document).ready(function(){
        $(".edit").click(function(){
            var data = $('#form').serialize();
            $.ajax({
                type	: 'POST',
                url	    : "<?= base_url('index.php/barang/edit'); ?>",
                data    : data,
                success	: function(data){
                    $('#tampil').load("<?= base_url('index.php/barang') ?>");
                }
            });
        });
    });
</script>