<?php
	$teacher = $_POST['teacher'];
	include('createDB.inc');
	echo $teacher;
	// function addTeacher($userName){
		
	//  	$teacher = $pdo->query('UPDATE login SET userType="teacher" WHERE userName = :userName '); 
	//  	$teacher->bindValue(':userName', $userName);
	//  	$teacher->execute();
		
	//  	header('Location: /team81/admin.php');
	// }	
	// addTeacher($teacher);
?>