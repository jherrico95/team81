		<h2>Sign Up to Pinelands Music School</h2>
		<h4>Learn from some of the best teachers!</h4>
		<form action="./signup.php" method="POST">
		
			<?php
			    require('fields.inc');
				input_field($errors, 'userName', 'User Name');
				input_field($errors, 'email', 'Email');
			?>
		
			<div class="field">
			<label for="pass">Password:</label>
			<input name="passwd" type="password" id="pass"/>
			</div>
			
			<div class="field">
			<label for="passConfirm">Confirm Password:</label>
			<input name="passwdConfirm" type="password" id="passConfirm"/>
			</div>			

			<div class="field">
			<label for="profile">Profile Picture:</label>
			<input name="profile" id="profile" type="file">
			</div>				
		
			<input name="register" type="submit" value="Register"/>
			<p id="tandc">Already a barker? <a href="login.php">Log In</a></p>
			<br>
		</form>