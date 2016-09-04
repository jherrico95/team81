<?php
$title = "Sign Up - Pinelands Music School";
$content = "Welcme  Park Bark, his is a schl assignmen using he Brisbane Ci Cuncils pen daa  prvide he bes pssibie expierence  he lcals and visiers f brisbane";

//include 'template.php';
include('hml_head.inc');
?>
			<div id="content_area">
				<?php
					include('createDB.inc');
					$errors = array();
					if (isset($_POST['email']))
					{
						require 'validate.inc';
						validateEmail($errors, $_POST, 'email');
						validateUser($errors, $_POST, 'userName');
						validatePassword($errors, $_POST, 'passwd', 'passwdConfirm');
						if ($errors)
						{
							
							// redisplay the form
							include 'form.inc';
							echo '<h3>Invalid, correct the following errors:</h3>';
							foreach ($errors as $field => $error);
								//echo "$error</br>";
						}
						else{
							if ($_POST)
								{
									$salt = uniqid();
									try
									{				
										$stmt = $pdo->prepare('INSERT INTO login (userName, salt, password) 
																VALUES (:userName, :salt, SHA2(CONCAT(:passwd, :salt), 0))');
										$stmt->bindValue(':userName', $_POST['userName']);
										//$stmt->bindValue(':email', $_POST['email']);
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
						include 'form.inc';
					}
				?>
			</div>
			
			<div id="sidebar">
				<img src="images/PINELANDS.png" al=""/>
			</div>
	<?php
		include('footer.inc');
	?>