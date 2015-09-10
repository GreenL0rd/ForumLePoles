<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/article.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
<title>Accueil</title>
</head>
<body>
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
			
			.container-post{
			margin: 30px auto;
			width: 600px;
			background: rgba(135, 217,255, 0.3);
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			border-radius: 5px;
			}
			article{
			background: #fff;
			padding: 20px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			text-align: justify;
			margin-top: 10px;
			position: relative;

			}
		</style>
	<h2>Bienvenue sur notre forum</h2>
	<a href="forum.html"><input type="button" value="Nouveau Topic"></a>

		<form class="container">
	<h1>Bonne visite !!</h1>
	<img src="images/obama-ok.jpg">
	</form>

<div class="container">
<section> 

<?php  

$dsn = 'mysql:host=localhost;dbname=forumlepoles';
$user = 'root';
$pass = '';

$pdo = new PDO(
$dsn,
$user,
$pass
);



?>

<div class="container-post">

<h1><?= $result[0]['title']?></h1>
<p><?= $result[0]['description']?></p>

<div class="bouton">

<a href="delete.php?id=<?=$result[0]['id']?>"><input type="button" value="Supprimer" style="position:inherit;float:left;margin:0 10px"></a>

</div>
</div>



<?php 
echo idTexte($result);
?>

</section>
</div>
</body>
</html>