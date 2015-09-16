<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/article.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
<title>Accueil</title>
</head>
<body>


	

	<!-- <a href="creation_article.html"><input type="button" value="Créer un nouvel article"></a> -->


	
		<div class="container-post">
			

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

	$id = $_GET['id'];

	$request=$pdo->query('SELECT*FROM topic WHERE id="'.$_GET['id'].'" ');
	$result=$request->fetchALL();
	$ligne=count($result);


		function idArticle($result){ 

?>

		<article>

			<h3><?= $result[0]['title']?></h3>
			<p><?= $result[0]['description']?></p>

		<div class="bouton">

		<a href="delete.php?id=<?=$result[0]['id']?>"><input type="button" value="Supprimer" style="position:inherit;float:left;margin:0 10px"></a>
		<a href="editeur.php?id=<?=$result[0]['id']?>"><input type="button" value="Modifier" style="position:inherit;float:left;margin:0 10px"></a>


		</div>

		</article>


<?php } ?> 

<?php 
echo idArticle($result);
?>

</section>
</div>
</body>
</html>