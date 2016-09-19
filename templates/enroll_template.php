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
	<br><br><br><br><br><br>
	<?php
		include('createDB.inc');
		
		echo '<h2>You are now Enrolled</h2>';
		$pdo9->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
		try  
		{  
		$courses = $pdo9->query('SELECT * FROM courses'); 
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
			</tr>';
				foreach ($courses as $course){
					echo'<tr>
							<td>',$course['courseName'],'</td>
							<td>',$course['courseCost'],'</td>
							<td>',$course['numberOfLessons'],'</td>
							<td>',$course['instrumentType'],'</td>
							<td>',$course['available'],'</td>
							<a href="enroll.php?course=',$course['courseID'],'">Enrol in Course</a>
						</tr>';
				}
			//echo'</select>';
			//echo'<input type="submit" name="SUBMIT">';
		echo'</table>';

	?>

</div>

<?php
	include('footer.inc');
?>