<?php
	include 'hml_head.inc';
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
	Change a student into a teacher:
	<?php
		include('createDB.inc');

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
		echo '<form>';
		echo'<select>';
			echo'<option value="ALL">ALL</option>';
			foreach ($students as $student){
				echo'<option value=',$students['userType'],'>',$students['userType'],'</option>';
			}
		echo'</select>';
		echo'</form>';

	?>

</div>

<?php
	include('footer.inc');
?>