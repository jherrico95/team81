<?php
	include 'html_head.inc';
?>

<div class="form-container container">

	<h2>Change a student into a teacher:</h2>
	
	<div class="classes-form">
		<?php
			include('createDB.inc');
			

			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
			try  
			{  
			$students = $pdo->query('SELECT * FROM login WHERE userType = "student"'); 
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

			echo '<h2>See class enrollements</h2>';
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
								<td>',$teacher['phoneNo1'],'</td>
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

			echo '<h2>Student Enrollements</h2>';
			// $pdo11->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
			// try  
			// {  
			// $userTotal = $pdo11->query('SELECT COUNT(*) FROM login'); 
			// $adminTotal = $pdo12->query('SELECT COUNT(*) FROM login WHERE userType = "admin"');
			// $teacherTotal = $pdo13->query('SELECT COUNT(*) FROM login WHERE userType = "teacher"');
			// $studentTotal = $pdo14->query('SELECT COUNT(*) FROM login WHERE userType = "student"');
			// }
			// catch (PDOException $e)  
			// {   
			// echo $e->getMessage();  
			// }
			echo '<table>';
				//echo'<select name="teacher">';
					//echo'<option value="" selected="selected">SELECT STUDENT</option>';
				echo'<tr>
					<th>Total Users</th>
					<th>Admin Total</th>
					<th>Teacher Total</th>
					<th>Student Total</th>
				</tr>';
					//foreach ($complaints as $complain){
						echo'<tr>
								<td>',$userTotal,'</td>
								<td>',$adminTotal,'</td>
								<td>',$teacherTotal,'</td>
								<td>',$studentTotal,'</td>
								
							</tr>';
					//}
				//echo'</select>';
				//echo'<input type="submit" name="SUBMIT">';
			echo'</table>';

			echo '<h2>Enrollement Statistics</h2>';
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

			echo '<h2>Feedback</h2>';
			$pdo7->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
			try  
			{  
			$complaints = $pdo7->query('SELECT * FROM complaints'); 
			
			}
			catch (PDOException $e)  
			{   
			echo $e->getMessage();  
			}
			echo '<table>';
				//echo'<select name="teacher">';
					//echo'<option value="" selected="selected">SELECT STUDENT</option>';
				echo'<tr>
					<th>Topic</th>
					<th>From</th>
					<th>Feedback</th>
					
				</tr>';
					foreach ($complaints as $complain){
						echo'<tr>
								<td>',$complain['complaintTo'],'</td>
								<td>',$complain['complaintFrom'],'</td>
								<td>',$complain['complaint'],'</td>
								
							</tr>';
					}
				//echo'</select>';
				//echo'<input type="submit" name="SUBMIT">';
			echo'</table>';
		?>
	</div>
</div>

<?php
	include('footer.inc');
?>