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
	Timetable:
	<?php
		include('createDB.inc');
		


		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
		try  
		{  
		$teachers = $pdo->query('SELECT * FROM teachers'); 
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
		foreach ($teachers as $teacher){
			echo'<table width="100%">';
				echo'<table>';
					echo '<tr>';
						//echo '<td><img width="100px" src="images/',$park2['Picture'],'"alt="',$park2['imageAlt'],'"></td>';
					echo '</tr>';
				echo '</table>';
				
				
				echo'<table>';
					echo'<tr>';
						echo '<td><a href="lesson.php?teacher=',$teacher['accountNo'],'">Book a lesson</a></td>';
					echo'</tr>';
					//echo $park['dogParkName'];
					echo'<tr>';
						echo '<td>';
							echo $teacher['firstName'];
						echo '</td>';
						echo '<td>';
							echo $teacher['lastName'];
						echo '</td>';
						echo '<td>';
							echo '<p>',$teacher['email'],'<nbsp>m2</p>';
						echo '</td>';
					 
					echo'</tr>';
				echo '</table>';
			echo '</table>';
	?>

</div>

<?php
	include('footer.inc');
?>