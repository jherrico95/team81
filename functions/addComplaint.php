<?php
	$to = $_GET['About'];
	$complaintfrom = $_SESSION['userName'];
	$text = $_GET['message'];
	include('../templates/createDB.inc');
	//echo'<li><a href="logout.php">'$teacher'</a><li>';
	//echo '<p>'$teacher'</p>';

	function addComplaint($to1, $complaintfrom1, $text1, $pdo6){
		
		try  
		{  
		$complaint = $pdo6->prepare('INSERT INTO complaints(complaintTo, complaintFrom, complaint) VALUES (:to, :complaintfrom, :complaintText)'); 
	  	$complaint->bindValue(':complaintfrom', $complaintfrom1);
		$complaint->bindValue(':to', $to1);
		$complaint->bindValue(':complaintText', $text1);
	  	
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