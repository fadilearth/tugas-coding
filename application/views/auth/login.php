<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="post" action="<?= base_url('index.php/auth') ?>">
		<input type="text" name="user" placeholder="Masukan Password"> <br><br>
		<input type="Password" name="pass" placeholder="Masukan Password">
		<button>Login</button>
	</form>

	<a href="<?= base_url('index.php/auth/buat_akun') ?>">Buat Akun</a>

</body>
</html>