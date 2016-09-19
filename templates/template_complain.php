<?php
	//$teacherID = $_GET['teacher']; 
	include('createDB.inc');
		
	// $result = $pdo->prepare('SELECT id, dogParkName, street, parkName, latitude, longitude, dogParkArea, Picture FROM parks where id = :park');
	// $result->bindParam(':park', $parkID, PDO::PARAM_STR);
	// $title = ':dogParkName - Park Bark';
	// //$title->bindValue(':dogParkName', $park['dogParkName']);
	// $result->execute();
	// //$title->execute();
	// $reviews = $pdo->prepare('SELECT * FROM reviews where id = :park');
	// $reviews->bindParam(':park', $parkID, PDO::PARAM_STR);
	// $reviews->execute();

	include 'html_head.inc';
?>

<div class="top-header">
	
	<div class="col-md-7">
	</div>
	
	<div class="col-md-5">
	</div>

</div>

<div class="home-page-content">
	
	<!--banner div should have fixed width-->
	<div id="home-banner">
	</div>

	<div class="home-elements">
		
		<div class="col-md-3">
		</div>

		<div class="col-md-3">
		</div>

		<div class="col-md-3">
		</div>

		<div class="col-md-3">
		</div>

	</div>
	
	<?php
		echo '<h1>Make a Complaint:</h1>';
		include('createDB.inc');
		//include('addteacher.inc');
		// $stmt = $pdo->prepare('INSERT INTO login (userType, userName, salt, password) 
		// 						VALUES (:student, :userName, :salt, SHA2(CONCAT(:passwd, :salt), 0))');
		// $stmt->bindValue(':userName', $_POST['userName']);
		// //$stmt->bindValue(':email', $_POST['email']);
		// $stmt->bindValue(':student', 'student');
		// $stmt->bindValue(':passwd', $_POST['passwd']);
		// $stmt->bindValue(':salt', $salt);
		
		// $stmt->execute();


		// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
		// try  
		// {  
		// $students = $pdo->query('SELECT * FROM login WHERE userType = "student"'); 
		// //$result2 = $pdo->query('SELECT id, dogParkName, street, parkName, latitude, longitude, dogParkArea, Picture, imageAlt FROM parks'); 
		// //$suburb1 = $pdo->query('SELECT distinct suburb  FROM parks');
		// }
		// catch (PDOException $e)  
		// {   
		// echo $e->getMessage();  
		//}
		echo '<form action="./functions/addComplaint.php"  method="POST">';
			// echo'<select name="teacher">';
			// 	echo'<option value="" selected="selected">SELECT STUDENT</option>';
			// 	foreach ($students as $student){
			// 		echo'<option value=',$student['userName'],'>',$student['userName'],'</option>';
			// 	}
			// echo'</select>';

			echo'Who the complaint is against:<br>
  					<input type="text" name="complainAbout"><br>
  					<textarea name="message" rows="10" cols="30">
						Make your complaint here. 
					</textarea>';

			echo'<input type="submit" name="SUBMIT">';
		echo'</form>';

	?>

</div>

<?php
	include('footer.inc');
?>