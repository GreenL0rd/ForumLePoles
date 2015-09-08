<?php

session_start();

$dsn = 'mysql:host=localhost;dbname=ForumLePoles';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$request = $pdo->query(
	'SELECT * FROM users WHERE email="' . $_POST['email'] . '" AND pwd = "' . $_POST['pwd']. '";'
);

$result = $request->fetchAll();

if ( count($result) > 0 ) {
	$_SESSION['users'] = $result[0];
	echo "Couscous party!";
	// header('');

} else {
	echo "Vas te laver les mains avant de manger le couscous!";
	// header('');
}