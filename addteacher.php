<?php
	$teacher1 = $_POST['teacher'];
	include('createDB.inc');
	//echo'<li><a href="logout.php">'$teacher'</a><li>';
	//echo '<p>'$teacher'</p>';

	function addTeacher($userName){
		
		//try  
		//{  
		$teacher = $pdo->query('UPDATE login SET userType="teacher" WHERE userName = :userName '); 
	  	$teacher->bindValue(':userName', $userName);
	  	$teacher->execute();
		//}
		//catch (PDOException $e)  
		// {   
		// echo $e->getMessage();  
		// }
	  	//$teacher = $pdo->query('UPDATE login SET userType="teacher" WHERE userName = :userName '); 
	  	//$teacher->bindValue(':userName', $userName);
	  	//$teacher->execute();
		//echo "<p>$userName</p>";
	  	header('Location: /team81/admin.php');
	}	
	 addTeacher($teacher1);


?>