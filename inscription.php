<?php

$dsn = 'mysql:host=localhost;dbname=ForumLePoles';
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
	header('Location: compte.html');

?>
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<title>Document</title>
</head>
<body>
<h2>Bienvenue sur la page d'inscription</h2>
	<form class="container">

	<h1>Inscription</h1>
	<input type="text" name="mail" id="mail" autofocus placeholder="Adresse mail">
		<input type="name" name="pseudo" placeholder="pseudonyme">
		<input type="password" name="pwd" id="pwd" placeholder="Mot de passe">
		<input type="password" name="confirm" id="confirm" placeholder="Retapez mot de passe">
		<input type="button" value="Envoyer" id="btn">
		
		<style scoped="scoped">
			body{
				font: 16px 'Comfortaa', sans-serif;
				margin: 0 auto;
				background: url(images/Light_Bird_Abstract_Design.jpg) no-repeat center center fixed;
				background-size: cover;

				
			}
			.container{
				margin: 150px auto;
				display: block;
				width: 400px;
				
				background: rgba(0,0,0,0.5);
				border: solid 1px #000;
				border-radius:  10px;
				


			}
			h2{
				text-align: center;
				color: #fff;
				font-size: 3vw;
				font-weight: lighter;
			}
			input[type="button"]{
				background: rgba(63, 164, 0, 0.9);
				width: 60%;
				border: none;
				border-radius: 10px;
				margin-bottom: 20px;
			
			
			}
			input[type="button"]:hover{
				background: rgba(36, 115, 62, 0.9);
			}
			input{
				width: 80%;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
				padding: 5px;
				margin: 30px auto;
				line-height: 30px;
				display: block;
				background: rgba(2, 52, 139, 0.9);
				border: solid 1px #000;
				color: #fff;
			}
			h1{
				font-weight: lighter;
				width: 100%;
				border-radius: 10px 10px  0 0;
				text-align: center;
				background: none repeat scroll  0 0 rgba(0,0,0,0.5);
				color: #fff;
				line-height: 50px;
				margin: 0 auto;
				

			}

		</style>

</body>
</html>