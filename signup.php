<?php
$title = "Sign Up - Pinelands Music School";
$content = "Welcme  Park Bark, his is a schl assignmen using he Brisbane Ci Cuncils pen daa  prvide he bes pssibie expierence  he lcals and visiers f brisbane";

//include 'template.php';
include('templates/html_head.inc');
?>
			
<div id="content_area" class="form-container container">
	<h2 class="center">Signup</h2>
	<?php
		include('templates/createDB.inc');
		$errors = array();
		if (isset($_POST['email']))
		{
			require 'functions/validate.inc';
			validateEmail($errors, $_POST, 'email');
			validateUser($errors, $_POST, 'userName');
			validatePassword($errors, $_POST, 'passwd', 'passwdConfirm');
			if ($errors)
			{
				
				// redisplay the form
				echo '<div class="login-form">';
				include 'functions/form.inc';
				echo '<h3>Invalid, correct the following errors:</h3>';
				foreach ($errors as $field => $error);
					//echo "$error</br>";
				echo '</div>';
			}
			else{
				if ($_POST)
					{
						$salt = uniqid();
						try
						{				
							$stmt = $pdo->prepare('INSERT INTO login (userType, userName, salt, password) 
													VALUES (:student, :userName, :salt, SHA2(CONCAT(:passwd, :salt), 0))');
							$stmt->bindValue(':userName', $_POST['userName']);
							//$stmt->bindValue(':email', $_POST['email']);
							$stmt->bindValue(':student', 'student');
							$stmt->bindValue(':passwd', $_POST['passwd']);
							$stmt->bindValue(':salt', $salt);
							
							$stmt->execute();
							//echo 'Puppy Created!<br/>';
						}
						catch (PDOException $e)
						{
							echo $e->getMessage();
						}					
					}
					echo 'form submitted successfully with no errors';
			}			
		}
		else
		{
			include 'functions/form.inc';
		}
	?>
</div>

<?php
	include('templates/footer.inc');
?>