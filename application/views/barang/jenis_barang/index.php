<!DOCTYPE html>
<html>
<head>
	<title>#</title>
	<link href="<?= base_url('assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container" align="center">
		<div id="tampil">
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				type	: 'post',
				url 	: '<?= base_url('index.php/jenis_barang/data_jenis_barang') ?>',
				cache	: false,
				success : function(data) {
					$('#tampil').html(data);
				}
			});
		});
	</script>
</body>
</html>