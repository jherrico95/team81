<?php
	//include('createDB.inc');
	
	 function addTeacher($userName){
		
	 	$teacher = $pdo->query('UPDATE login SET userType="teacher" WHERE userName = :userName '); 
	 	$teacher->bindValue(':userName', $userName);
	 	$teacher->execute();
		// $query = $pdo->prepare('SELECT * FROM login WHERE userName = :userName 
		// 						and password = SHA2(CONCAT(:passwd, salt), 0)');
		// $query->bindValue(':passwd', $passwd);
		// $query->bindValue(':userName', $userName);
		
		// $query->execute();
		// //$_SESSION['userType'] = $query['userType'];
		// if($query->rowCount() > 0){
		// return True;
		// }
	 	header('Location: /team81/admin.php');
	}	
	addTeacher($_POST['teacher']);
?>