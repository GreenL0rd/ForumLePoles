<html>
<head>
</head>
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<body>
	<style>
		body{
				font: 16px 'Comfortaa', sans-serif;
				margin: 0 auto;
				background: url(images/Light_Bird_Abstract_Design.jpg) no-repeat center center fixed;
				background-size: cover;
			}

		h1{
				font-weight: lighter;
				width: 800px;
				border-radius: 10px 10px  0 0;
				text-align: center;
				background: none repeat scroll  0 0 rgba(0,0,0,0.5);
				color: #fff;
				line-height: 50px;
				margin: 0 auto;
		}
		p{
			text-align: center;
			width: 800px;
			padding: 15px 0;
			display: block;
			margin: 0 auto;
			background: none repeat scroll  0 0 rgba(0,0,0,0.2);
		}
		textarea{
			/*position: fixed;*/
			display: block;
			width: 800px;
			height: 150px;
			margin: 0 auto;
		}
		input[type="submit"]{
				background: orange;
				border: none;
				border-radius: 10px;
				margin-bottom: 20px;
			}
			
		input[type="submit"]:hover{
				background: black;
			}
			input{
				width: 150px;
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
				text-align: center;
			}
	</style>
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

$request = $pdo->query('SELECT * FROM topics WHERE id = ' . $_GET['id'] . ';');
$result = $request->fetchAll();

?>

<h1><?=$result[0]['title']?></h1>
<p><?=$result[0]['description']?></p>
<!-- Répondre -->
<textarea></textarea>
<a href="lecture-topics.php"><input type="submit" value="Répondre" name="button"></a>

<?php	
		for ( $i = 0; $i < count($result); $i++ ) {
		?>
		<h3><?=$result[$i]['creatorId']?></h3>
		<p><?=$result[$i]['messages']?></p>
	<?php
		}

		?>

</body>
</html>