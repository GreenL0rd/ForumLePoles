<?php
session_start();

if ( empty($_SESSION['users']) ) {
	header('Location: connexion.html');
	die();
}

echo "Le cousous est froid, réchauffe le" . $_SESSION['users'];