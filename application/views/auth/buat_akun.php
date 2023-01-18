<!DOCTYPE html>
<html>
<head>
	<title>Buat Akun</title>
</head>
<body>
	<form method="post" action="<?= base_url('index.php/auth/buat_akun') ?>">
		<input type="text" name="nama" placeholder="Masukan nama lengkap"> <br><br>
		<input type="text" name="user" placeholder="Masukan username"> <br><br>
		<input type="text" name="pass" placeholder="Masukan password">

		<button>Buat</button>
	</form>
</body>
</html>