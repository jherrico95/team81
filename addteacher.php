<?php
	include('createDB.inc');
	
	function addTeacher($userName){
		
	 	$teacher = $pdo->query('UPDATE login SET userType="teacher" WHERE userName = :userName '); 
	 	$teacher->bindValue(':userName', $userName);
	 	$teacher->execute();
		
	 	header('Location: /team81/admin.php');
	}	
	addTeacher($_POST['teacher']);
?>