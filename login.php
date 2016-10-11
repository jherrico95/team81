<?php
	
	$errors = array();
	if (isset($_POST['login'])){
		require 'functions/validate.inc';   
		//validateUser($errors, $_POST, 'userName'); 
		//validatePassword($errors, $_POST, 'passwd');
		if ($errors){     
			//echo '<h1>Invalid, correct the following errors:</h1>';    
			foreach ($error as $field => $errors)     
				echo "$field $error</br>";        
			
			// redisplay the form    
			include 'login.php';   
		} 
		include('templates/createDB.inc');
		include('functions/checkpasswd.inc');
		
		if (checkPassword($_POST['userName'], $_POST['passwd'], $pdo)){
			
			//$typeQuery = $pdo->prepare('SELECT userType FROM login WHERE userName = :userName');
			//$typeQuery->bindParam(':userName', $_POST['userName'], PDO::PARAM_STR);
			//$uery->bindValue(':userName', $userName);
			//$typeQuery->execute();
			$typeQuery = $pdo2->prepare('SELECT userType,accountNo FROM login WHERE userName = :userName');
			$typeQuery->bindValue(':userName', $_POST['userName']);
			//$uery->bindValue(':userName', $userName);
			$typeQuery->execute();

			//print $typeQuery;
			//$typeQuery2 = (string)$typeQuery;
			echo 'Login works';
			session_start(); 
			$_SESSION['isMembers'] = true;
			
			$_SESSION['userName'] = $_POST['userName'];
			//$_SESSION['userType'] = $typeQuery[0][3];
			//$_SESSION['userType'] = $typeQuery->execute();
			$_SESSION['userType'] = $typeQuery->fetchColumn(0);
			$_SESSION['accountNo'] = $typeQuery->fetchColumn(1);
			header('Location: /team81/index.php');
			exit();
		}else if(!(checkPassword($_POST['userName'], $_POST['passwd'], $pdo))){
			echo 'Login Failed';
		}
	}
	
	$title = "Login - Pinelands Music School";
	include 'templates/html_head.inc';
?> 
	
	<div class="form-container container">

		<h2 class="center">Login</h2>

		<div class="login-form">
			<form action="login.php" method="POST">
				<div class="form-group">
					<label for="userName">User Name:</label>
					<input type="text" class="form-control" id="userName" name="userName">
				</div>
				<div class="form-group">
					<label for="passwd">Password:</label>
					<input type="password" class="form-control" id="passwd" name="passwd">
				</div>
				<input type="submit" name="login" value="Login">
			</form>
		</div>
	</div>
			
	<div id="sidebar">
		
	</div>
	<div class="login-footer">
		<?php
			include('templates/footer.inc');
		?>
	</div>