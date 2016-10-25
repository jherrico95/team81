<?php
	include 'html_head.inc';
?>

<div class="form-container">
	<h2>Classes</h2>
	<div class="classes-form">
		<?php
			include('createDB.inc');
			$pdo8->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
			try  
			{  
			$courses = $pdo8->query('SELECT * FROM courses'); 
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
					<th>Course Name</th>
					<th>Cost</th>
					<th>Number of Lessons</th>
					<th>Instrument</th>
					<th>Available</th>
					<th></th>
				</tr>';
					foreach ($courses as $course){
						echo'<tr>
								<td>',$course['courseName'],'</td>
								<td>',$course['courseCost'],'</td>
								<td>',$course['numberOfLessons'],'</td>
								<td>',$course['instrumentType'],'</td>
								<td>',$course['available'],'</td>
								<td><a href="enroll.php?course=',$course['courseID'],'">Enrol in Course</a></td>
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