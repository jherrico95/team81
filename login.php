<?php
	
	$errors = array();
	if (isset($_POST['login'])){
		require 'validate.inc';   
		//validateUser($errors, $_POST, 'userName'); 
		//validatePassword($errors, $_POST, 'passwd');
		if ($errors){     
			//echo '<h1>Invalid, correct the following errors:</h1>';    
			foreach ($errors as $field => $error)     
				echo "$field $error</br>";        
			
			// redisplay the form    
			include 'login.php';   
		} 
		include('createDB.inc');
		include('checkpasswd.inc');
		$typeQuery = $pdo->prepare('SELECT userType FROM login WHERE userName = :userName');
		$typeQuery->bindParam(':userName', $_POST['userName'], PDO::PARAM_STR);
		//$uery->bindValue(':userName', $userName);
		$typeQuery->execute();
		if (checkPassword($_POST['userName'], $_POST['passwd'], $pdo)){
			
			//$typeQuery = $pdo->prepare('SELECT userType FROM login WHERE userName = :userName');
			//$typeQuery->bindParam(':userName', $_POST['userName'], PDO::PARAM_STR);
			//$uery->bindValue(':userName', $userName);
			//$typeQuery->execute();

			echo 'Login works';
			session_start(); 
			$_SESSION['isMembers'] = true;
			$_SESSION['userType'] = $typeQuery;
			$_SESSION['userName'] = $_POST['userName'];
			header('Location: /team81/index.php');
			exit();
		}else if(!(checkPassword($_POST['userName'], $_POST['passwd'], $pdo))){
			echo 'Login Failed';
		}
	}
	
	$title = "Login - Pinelands Music School";
	include('hml_head.inc');
?> 
			<div id="content_area">
				<form action="login.php" method="POST">
					User Name: <input type="text" id="userName" name="userName"><br/>
					<br/>
					Password: <input type="password" id="passwd" name="passwd"><br/>
					<br/>
					<input type="submit" name="login" value="Login">
				</form>
			</div>
			
			<div id="sidebar">
				
			</div>
	<?php
		include('footer.inc');
	?>