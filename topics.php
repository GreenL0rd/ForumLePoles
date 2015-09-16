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

$pdo->query('INSERT INTO topics (title, description) VALUES("' . $_POST['title'] . '", "' . $_POST['description'] . '");');

header('Location: visite-2.php');