<?php

require_once 'connection.php';

header('Content-Type: application/json');

if (isset($_GET['action']) && $_GET['action'] == 'get_users') {

	$query = $pdo->query('SELECT * FROM users');
	$users = [];

	foreach ($query as $user) {
		array_push($users, $user);
	}

	echo json_encode($users);
}

if (isset($_GET['action']) && $_GET['action'] == 'get_token') {

	if (!isset($_POST['username']) || !isset($_POST['password'])) {
		echo json_encode([
			'message' => 'Username dan password harus diisi'
		]);
		die();
	}

	$stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
	$stmt->bindParam(':username', $_POST['username']);
	$stmt->bindParam(':password', $_POST['password']);
	$stmt->execute();

	while ($row = $stmt->fetch()) {
		echo json_encode([
			'api_key' => $row['api_key']
		]);
		die();
	}

}