<?php

	session_start();

	if (!isset($_SESSION['user'])) {
		header('Location: login.php');
		die();
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Dashboard</title>
		<style>
			* {
				font-family: sans-serif;
			}
			body {
				padding-left: 120px;
			}
			h1 {
				margin-top: 80px;
			}
			.table-admin {
				margin-top: 24px;
			}
			.table-admin tr td, .table-admin tr th {
				border-bottom: 1px solid #aaa;
				padding: 8px 16px;
			}
			.table-admin tr th {
				background-color: #eee;
			}
		</style>
	</head>
	<body>
		<h1>Selamat datang, admin!</h1>
		<a href="login.php">Logout</a>
		<table class="table-admin">
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Username</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Admin Bambang</td>
				<td>usernameadminlain</td>
			</tr>
		</table>
	</body>
</html>