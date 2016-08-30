<?php
	session_start();   
		if (!isset($_SESSION['isMembers']))   {    
				header("Location: http://{$_SERVER['HTTP_HOST']}:8080/n9563334/login.php ");    
				exit();  
			}
	$title = "Review - Park Bark";
	$content = "Welcme  Park Bark, his is a schl assignmen using he Brisbane Ci Cuncils pen daa  prvide he bes pssibie expierence  he lcals and visiers f brisbane";
	//(isset($_GET['park'])){
	
	//echo $parkID;
	//$ewe = $_GET['park'];
	$date = date("Y/m/d");
	$parkID = $_GET['park'];
	echo $date;
	echo $parkID;
	//include 'template.php';
	include('hml_head.inc');
?>
			<div id="content_area">
				<?php
					include('createDB.inc');
					$errors = array();
					if (isset($_POST['review']))
					{
						require 'validatereview.inc';
						//validateEmail($errors, $_POST, 'email');
						
						// validate surname
						// ...
						if ($errors)
						{
							//echo '<h1>Invalid, correct the following errors:</h1>';
							foreach ($errors as $field => $error)
								//echo "$field $error</br>";
							// redisplay the form
							include 'formreview.inc';
						}
						else{
							if ($_POST)
								{
									
									try
									{				
										$stmt = $pdo->prepare('INSERT INTO reviews (id, userName, date, reviewtext, rating) 
																			VALUES (:id, :userName, :date, :reviewtext, :rating )');
										$stmt->bindValue(':userName', $_SESSION['isMembers']);
										$stmt->bindValue(':date', $date);
										$stmt->bindValue(':id', $parkID);
										$stmt->bindValue(':rating', $_POST['rating']);
										$stmt->bindValue(':reviewtext', $_POST['reviewtext']);
										
										echo $_SESSION['isMembers'];
										echo $date;
										//if(isset($_GET['id'])){
											echo $parkID;
											//echo $ewe;
										//}
										
										echo $_POST['rating'];
										echo $_POST['reviewtext'];
										
										$stmt->execute();
										//echo 'Puppy Created!<br/>';
									}
									catch (PDOException $e)
									{
										echo $e->getMessage();
									}					
								}
								echo 'hank u fr reviewing his park';
						}			
					}
					else
					{
						include 'formreview.inc';
					}
				?>
			</div>
			
			<div id="sidebar">
				
			</div>
	<?php
		echo $_COOKIE[$cookie_name];
		include('footer.inc');
	?>