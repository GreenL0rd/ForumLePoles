<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/article.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
<title>Accueil</title>
</head>
<body>
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

		$pdo->query('SELECT * FROM messages(message, creation, creatorId) VALUES("' . $_POST['message'] . '","' . $_POST['creation'] . '","' . $_POST['creatorId'] . '");');
		$result = $request->fetchAll(); 

		?>

		<style scoped>
			body{
				font: 16px 'Comfortaa', sans-serif;
				margin: 0 auto;
				background: url(images/Light_Bird_Abstract_Design.jpg) no-repeat center center fixed;
				background-size: cover;
			}
			
			.container{
				margin: 90px auto;
				display: block;
				width: 600px;
				
				background: rgba(0,0,0,0.5);
				border: solid 1px #000;
				border-radius:  10px;
				
			}
			
			img{
				border-radius:0 0 10px 10px;
				width: 100%;
				display: block;
				margin: 0 auto;
			}
			
			h2{
				text-align: center;
				color: #fff;
				font-size: 3vw;
				font-weight: lighter;
				background: #0d47a1;
				margin:0;
				line-height: 100px;
			}
			
			input[type="button"]{
				background: rgba(42, 118, 250, 0.6);
				width: 60%;
				border: none;
				border-radius: 10px;
				margin-bottom: 20px;
			}
			
			input[type="button"]:hover{
				background: rgba(42, 118, 250, 0.9);
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
				border-radius: 5px;
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
			
			
			.container-topics{
				margin: 50px auto;
				display: block;
				width: 600px;
				background: rgba(135, 217,255, 0.3);
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
				border-radius: 5px;


			}
			.container-topics>h2{
				text-align: center;
				line-height: 60px;
				font-size: 15px;
				color: #fff;
				border-radius: 5px;
				padding: 0;
			}
			.container-topics>p{
				text-align: justify;
				padding: 0 15px;
			}
			.container-topics>a{
				display: block;
				text-decoration: center;
				width: 200px;
				line-height: 50px;
				margin: 0 auto;
				text-align: center;
			}
		</style>


	<h2><?=$result[$i]['title']?></h2>
	<a href="forum.html">Nouveau topic</a>

	<div class="container">
		<h1>Bonne visite !!</h1>
		<img src="images/obama-ok.jpg">
	</div>

		<?php
			for ( $i = 0; $i < count($result); $i++ ) {

		?>
	<div class="container-topics"> 

				<h2><?=$result[$i]['title']?></h2>
				<p><?=$result[$i]['description']?></p>
				<a href="lecture-topics.php?id=<?=$result[$i]['id']?>">Accéder</a>

	</div>
	<?php
		}

		?>



</body>
</html>