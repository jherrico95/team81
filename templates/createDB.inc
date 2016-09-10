<?php
	$pdo = new PDO('mysql:host=localhost;dbname=music_school', 'root', 'team81');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo2 = new PDO('mysql:host=localhost;dbname=music_school', 'root', 'team81');
	$pdo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo3 = new PDO('mysql:host=localhost;dbname=music_school', 'root', 'team81');
	$pdo3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	/// connections from home computer 
	
	// $pdo = new PDO('mysql:host=localhost;dbname=music_school', 'root', 'team81');
	// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// $pdo2 = new PDO('mysql:host=localhost;dbname=music_school', 'root', 'team81');
	// $pdo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// $pdo3 = new PDO('mysql:host=localhost;dbname=music_school', 'root', 'team81');
	// $pdo3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
?>