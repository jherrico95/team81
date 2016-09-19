<?php
	$teacher1 = $_GET['teacher'];
	$user = $_SESSION['userName'];
	include('../templates/createDB.inc');
	//echo'<li><a href="logout.php">'$teacher'</a><li>';
	//echo '<p>'$teacher'</p>';

	function addEnrollment($userName, $pdo10){
		
		try  
		{  
		$enrollment = $pdo10->prepare('UPDATE login SET userType="teacher" WHERE userName = :userName'); 
	  	$teacher->bindValue(':userName', $userName);
	  	$teacher->execute();
		}
		catch (PDOException $e)  
		{   
		echo $e->getMessage();  
		}
	  	//$teacher = $pdo->query('UPDATE login SET userType="teacher" WHERE userName = :userName '); 
	  	//$teacher->bindValue(':userName', $userName);
	  	//$teacher->execute();
		//echo "<p>$userName</p>";
	  	header('Location: /team81/enroll.php');
	}	
	 addEnrollment($teacher1, $pdo10);


?>