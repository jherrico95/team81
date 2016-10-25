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

<div class="form-container container">
	<h2>Give Feedback</h2>

	<div class="login-form">
		<?php
			include('createDB.inc');
			//include('./functions/addComplaint.php');
			echo '<form action="./functions/addComplaint.php"  method="POST">';
				echo'

				Topic:<br>
	  			<input name="About" type="text" ><br>
	  			<br/>Message:<br/>
	  			<textarea name="message" rows="10" cols="60"></textarea>
	  			
	  			';

				echo'<input type="submit" name="SUBMIT">';
			echo'</form>';

		?>

	</div>
</div>

<?php
	include('footer.inc');
?>