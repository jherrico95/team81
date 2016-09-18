<?php
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
	<h2>Change a student into a teacher:</h2>
	<?php
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


		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
		try  
		{  
		$students = $pdo->query('SELECT * FROM login WHERE userType = "student"'); 
		//$result2 = $pdo->query('SELECT id, dogParkName, street, parkName, latitude, longitude, dogParkArea, Picture, imageAlt FROM parks'); 
		//$suburb1 = $pdo->query('SELECT distinct suburb  FROM parks');
		}
		catch (PDOException $e)  
		{   
		echo $e->getMessage();  
		}
		echo '<form action="./functions/addteacher.php"  method="POST">';
			echo'<select name="teacher">';
				echo'<option value="" selected="selected">SELECT STUDENT</option>';
				foreach ($students as $student){
					echo'<option value=',$student['userName'],'>',$student['userName'],'</option>';
				}
			echo'</select>';
			echo'<input type="submit" name="SUBMIT">';
		echo'</form>';

		//echo'<form action="search.php" method="POST">';
			//echo'<h2>Selec a mehd  search b:</h2>
			//<select name ="para">
				//<option value="Location">Location</option>
				//<option value="Name">Name</option>
				//<option value="Suburb">Suburb</option>
				//<option value="Rating">Rating</option>
			//</select>';
			//echo'<input type="submit" value="SUBMIT">';
		//echo'</form>';	
		//echo'<form action="search.php" method="POST">';

		echo '<h2>See class enrolements</h2>';
		// write a for loop to get all classes

		//echo'<form action="admin.php" method="POST">';
			//echo'<h2>Selec a mehd  search b:</h2>
			//<select name ="classes">
		// write a for lopp to get all classes
				//<option value="Location">Location</option>
				//<option value="Name">Name</option>
				//<option value="Suburb">Suburb</option>
				//<option value="Rating">Rating</option>
			//</select>';
			//echo'<input type="submit" value="SUBMIT">';
		//echo'</form>';	
		//echo'<form action="search.php" method="POST">';

		echo '<h2>Teacher Roster</h2>';
		$pdo5->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
		try  
		{  
		$teachers = $pdo5->query('SELECT * FROM teachers'); 
		//$result2 = $pdo->query('SELECT id, dogParkName, street, parkName, latitude, longitude, dogParkArea, Picture, imageAlt FROM parks'); 
		//$suburb1 = $pdo->query('SELECT distinct suburb  FROM parks');
		}
		catch (PDOException $e)  
		{   
		echo $e->getMessage();  
		}
		echo '<table>';
			//echo'<select name="teacher">';
				//echo'<option value="" selected="selected">SELECT STUDENT</option>';
			echo'<tr>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Email</th>
				<th>Phone</th>
			</tr>';
				foreach ($teachers as $teacher){
					echo'<tr>
							<td>',$teacher['lastName'],'</td>
							<td>',$teacher['firstName'],'</td>
							<td>',$teacher['email'],'</td>
							<td>',$teacher['phone1'],'</td>
						</tr>';
				}
			//echo'</select>';
			//echo'<input type="submit" name="SUBMIT">';
		echo'</table>';
		// write a for loop to get all classes

		//echo'<form action="admin.php" method="POST">';
			//echo'<h2>Selec a mehd  search b:</h2>
			//<select name ="classes">
		// write a for lopp to get all classes
				//<option value="Location">Location</option>
				//<option value="Name">Name</option>
				//<option value="Suburb">Suburb</option>
				//<option value="Rating">Rating</option>
			//</select>';
			//echo'<input type="submit" value="SUBMIT">';
		//echo'</form>';	
		//echo'<form action="search.php" method="POST">';

		echo '<h2>Student Enrolements</h2>';
		// write a for loop to get all classes

		//echo'<form action="admin.php" method="POST">';
			//echo'<h2>Selec a mehd  search b:</h2>
			//<select name ="classes">
		// write a for lopp to get all classes
				//<option value="Location">Location</option>
				//<option value="Name">Name</option>
				//<option value="Suburb">Suburb</option>
				//<option value="Rating">Rating</option>
			//</select>';
			//echo'<input type="submit" value="SUBMIT">';
		//echo'</form>';	
		//echo'<form action="search.php" method="POST">';

		echo '<h2>Enrolements Statistics</h2>';
		// write a for loop to get all classes

		//echo'<form action="admin.php" method="POST">';
			//echo'<h2>Selec a mehd  search b:</h2>
			//<select name ="classes">
		// write a for lopp to get all classes
				//<option value="Location">Location</option>
				//<option value="Name">Name</option>
				//<option value="Suburb">Suburb</option>
				//<option value="Rating">Rating</option>
			//</select>';
			//echo'<input type="submit" value="SUBMIT">';
		//echo'</form>';	
		//echo'<form action="search.php" method="POST">';

		echo '<h2>Complaints</h2>';
		// write a for loop to get all classes

		//echo'<form action="admin.php" method="POST">';
			//echo'<h2>Selec a mehd  search b:</h2>
			//<select name ="classes">
		// write a for lopp to get all classes
				//<option value="Location">Location</option>
				//<option value="Name">Name</option>
				//<option value="Suburb">Suburb</option>
				//<option value="Rating">Rating</option>
			//</select>';
			//echo'<input type="submit" value="SUBMIT">';
		//echo'</form>';	
		//echo'<form action="search.php" method="POST">';
	?>

</div>

<?php
	include('footer.inc');
?>