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
	Timetable:
	<?php
		include('createDB.inc');
		
		echo '<h2>Courses</h2>';
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
				<th>Cost/th>
				<th>Number of Lessons</th>
				<th>Instrument</th>
				<th>Available</th>
			</tr>';
				foreach ($complaints as $complain){
					echo'<tr>
							<td>',$courses['courseName'],'</td>
							<td>',$courses['courseCost'],'</td>
							<td>',$courses['numberOfLessons'],'</td>
							<td>',$courses['instrumentTyoe'],'</td>
							<td>',$courses['available'],'</td>
							
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