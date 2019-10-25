<?php

require_once 'connection.php';

$result = $dbc->query('SELECT * FROM users');

foreach ($result as $user) {
	echo $user['username'] . '<br/>';
}