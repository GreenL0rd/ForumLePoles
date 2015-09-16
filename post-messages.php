<?php
		$dsn = 'mysql:host=localhost;dbname=forumlepoles';
		$user = 'root';
		$pass = '';

		$pdo = new PDO(
		$dsn,
		$user,
		$pass
	);

		$pdo->query('INSERT INTO  messages (message,creatorId) VALUES ("'. $_POST['message'] .'","'. $_POST['creatorId']'");');
		header('Location : lecture-topics.php');
		