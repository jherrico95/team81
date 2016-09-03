<?php
	$pdo = new PDO('mysql:host=localhost;dbname=login', 'root', 'team81');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>