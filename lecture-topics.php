<html>
<head>
</head>
<body>
<?php


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

</body>
</html>