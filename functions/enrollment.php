<?php
	$courseID = $_GET['course'];
	$accountNo = $_SESSION['accountNo'];
	include('../templates/createDB.inc');
	//echo'<li><a href="logout.php">'$teacher'</a><li>';
	//echo '<p>'$teacher'</p>';

	function addEnrollment($courseID, $pdo10, $accountNo){
		
		try  
		{  
		$pdo11 = new PDO('mysql:host=localhost;dbname=music_school', 'root', 'team81');
		$userID = $pdo11->prepare('SELECT studentID FROM students WHERE accountNo=:accountNo');
		$userID->bindValue(':accountNo', $accountNo);

		$userID->execute();
	//$pdo10->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$enrollment = $pdo10->prepare('INSERT INTO students_enrolment(studentID, courseID, currentlyEnrolled, completed) VALUES (:studentID, :courseID, N, N)'); 
	  	$enrollment->bindValue(':studentID', $userID);
	  	$enrollment->bindValue(':courseID', $courseID, PDO::PARAM_STR);

	  	$enrollment->execute();
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
	 addEnrollment($courseID, $pdo10, $accountNo);


?>