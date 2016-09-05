<?php
	$teacher = $_POST['teacher'];
	include('createDB.inc');
	//echo'<li><a href="logout.php">'$teacher'</a><li>';
	echo '<p>'$teacher'</p>';
	// function addTeacher($userName){
		
	//  	$teacher = $pdo->query('UPDATE login SET userType="teacher" WHERE userName = :userName '); 
	//  	$teacher->bindValue(':userName', $userName);
	//  	$teacher->execute();
		
	//  	header('Location: /team81/admin.php');
	// }	
	// addTeacher($teacher);
?>