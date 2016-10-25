<?php
	$teacherID = $_GET['teacher']; 
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

<div class="container-info">
	
	<h1>Coming Soon</h1>
	<p>Soon you will be able to book a one on one tutor specialised tutoring.</p>

</div>

<?php
	include('footer.inc');
?>