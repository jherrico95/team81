	<div class="login-form">
		<form action="./signup.php" method="POST">
		
			<?php
			    require('fields.inc');
				input_field($errors, 'userName', 'User Name');
				input_field($errors, 'email', 'Email');
			?>
		
			<div class="form-group">
				<label for="pass">Password:</label>
				<input class="form-control" name="passwd" type="password" id="pass"/>
			</div>
			
			<div class="form-group">
				<label for="passConfirm">Confirm Password:</label>
				<input class="form-control" name="passwdConfirm" type="password" id="passConfirm"/>
			</div>			

			<div class="form-group">
				<label for="profile">Profile Picture:</label>
				<input name="profile" id="profile" type="file">
			</div>				
			
			<div class="form-group">
				<input name="register" type="submit" value="Register"/>
			</div>

			<div class="form-group" id="tandc" style="margin-bottom: 0;">
				Already have an account? <a href="login.php">Log In</a>
			</div>
		</form>
	</div>