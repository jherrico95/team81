<?php
	$pdo = new PDO('mysql:host=localhost;dbname=logiin', 'root', 'team81');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>