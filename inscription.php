<?php
session_start();
$dsn = 'mysql:host=localhost;dbname=forumlepoles';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);



if ( $_POST['passwordA'] !== $_POST['passwordB'] ) {
	echo "Mot de passe invalide";
	//header('Location: error-password.html');
	die();
}

$request = $pdo->query(
	'SELECT * FROM users WHERE email="' . $_POST['email'] . '";'
);
$result = $request->fetchAll();

if ( count($result) > 0 ) {
	echo "E-mail invalide";
	//header('Location: error-email.html');
	die();
} else {
	$requestB = $pdo->query('INSERT INTO users ( email, password ) VALUES ("' . $_POST['email'] . '", "' . $_POST['passwordA'] . '");');
}
	 header('Location: visite-2.php');

?>
