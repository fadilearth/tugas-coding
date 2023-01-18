<form id="form" method="post">
	<input type="hidden" name="id_barang" value="<?= $data->id_barang ?>">
	<p>Apakah Anda Yakin Ingin Menghapus <?= $data->nama_barang ?></p>
	<button class="hapus" type="button" data-dismiss="modal">Hapus</button>
</form>

<script type="text/javascript">
    $(document).ready(function(){
        $(".hapus").click(function(){
            var data = $('#form').serialize();
            $.ajax({
                type	: 'POST',
                url	    : "<?= base_url('index.php/barang/hapus'); ?>",
                data    : data,
                success	: function(data){
                    $('#tampil').load("<?= base_url('index.php/barang') ?>");
                }
            });
        });
    });
</script>