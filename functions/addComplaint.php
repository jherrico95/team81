<?php
	$to = $_POST['About'];
	$complaintfrom = $_SESSION['userName'];
	$text = $_POST['message'];
	include('../templates/createDB.inc');
	//echo'<li><a href="logout.php">'$teacher'</a><li>';
	//echo '<p>'$teacher'</p>';

	function addComplaint($to, $complaintfrom, $text, $pdo6){
		
		try  
		{  
		$complaint = $pdo6->prepare('INSERT INTO music_school . complaints (complaintFrom, complaintTo, complaint) VALUES (:complaintfrom, :to, :complaintText)'); 
	  	$complaint->bindValue(':complaintfrom', $complaintfrom);
		$complaint->bindValue(':to', $to);
		$complaint->bindValue(':complaintText', $text);
	  	
	  	$complaint->execute();
	  	}
		catch (PDOException $e)  
		{   
		echo $e->getMessage();  
		}
	  	//$teacher = $pdo->query('UPDATE login SET userType="teacher" WHERE userName = :userName '); 
	  	//$teacher->bindValue(':userName', $userName);
	  	//$teacher->execute();
		//echo "<p>$userName</p>";
	  	header('Location: /team81/complaints.php');
	}	
	 addComplaint($to, $complaintfrom, $text, $pdo6);


?> 