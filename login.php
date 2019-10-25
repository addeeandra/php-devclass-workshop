<?php
	require_once 'connection.php';

	if (isset($_SESSION['user'])) {
		header('Location: dashboard.php');
		die();
	}

	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->execute();

		while ($row = $stmt->fetch()) {
			$_SESSION['user'] = $row['username'];
			header('Location: dashboard.php');
			die();
		}

		echo 'Username or password invalid';
	}
?>

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
		<form class="form-login" method="POST" action="login.php">
			<h2>Login</h4>
			<input type="text" placeholder="Ketik username Anda" name="username" />
			<input type="password" placeholder="Ketik kata sandi Anda" name="password" />
			<button>Submit</button>
		</form>
	</body>
</html>