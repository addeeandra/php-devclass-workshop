<?php

require_once 'connection.php';

if (isset($_GET['action']) && $_GET['action'] == 'get_users') {

	$query = $pdo->query('SELECT * FROM users');
	$users = [];

	foreach ($query as $user) {
		array_push($users, $user);
	}

	echo json_encode($users);
}