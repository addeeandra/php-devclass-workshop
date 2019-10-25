<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Login</title>
		<style>
			* {
				font-family: sans-serif;
			}
			.form-login {
				width: 320px;
				margin-top: 100px;
				margin-left: auto;
				margin-right: auto;
			}
			.form-login input {
				margin-top: 8px;
				width: 100%;
				padding: 8px;
			}
			.form-login button {
				margin-top: 16px;
				padding: 8px 32px;
			}
		</style>
	</head>
	<body>
		<form class="form-login" method="POST" action="dashboard.php">
			<h2>Login</h4>
			<input type="text" placeholder="Ketik username Anda" />
			<input type="password" placeholder="Ketik kata sandi Anda" />
			<button>Submit</button>
		</form>
	</body>
</html>