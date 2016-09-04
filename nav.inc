			

			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a><li>
					<li><a href="teaching.php">Teaching</a><li>
					<li><a href="about.php">About Us</a><li>
					<li><a href="faq.php">FAQ</a><li>
					<li><a href="contact.php">Contact Us</a><li>
					<?php
						if(isset($_SESSION['isMembers'])){
							echo'<li class="nav_right"><p>Welcome, '.$_SESSION['userName'].'</p><li>';
							//echo'<li class="nav_right"><p>Welcome, '$user'</p><li>';
							echo'<li class="nav_right"><a href="logout.php">Logout</a><li>';
						}else if(!isset($_SESSION['isMembers'])){
							echo'<li class="nav_right"><a href="signup.php">Signup</a><li>';
							echo'<li class="nav_right"><a href="login.php">Login</a><li>';
						}
					?>
					
				</ul>
			</div>
			<div id="second_nav">
				<ul>
					<!--<li><a href="index.php">Home</a><li>
					<li><a href="teaching.php">Teaching</a><li>
					<li><a href="about.php">About Us</a><li>
					<li><a href="faq.php">FAQ</a><li>
					<li><a href="contact.php">Contact Us</a><li>-->
					<?php
						if(isset($_SESSION['isMembers'])){
							if($_SESSION['userType'] == 'student'){
								echo'<li><p>Welcome, '.$_SESSION['userName'].'</p><li>';
								//echo'<li class="nav_right"><p>Welcome, '$user'</p><li>';
								echo'<li><a href="logout.php">Logout</a><li>';
							}// student nav
							else if($_SESSION['userType'] == 'teacher'){
								echo'<li><p>Welcome teacher, '.$_SESSION['userName'].'</p><li>';
								//echo'<li class="nav_right"><p>Welcome, '$user'</p><li>';
								echo'<li><a href="logout.php">Logout</a><li>';
							}// teacher nav
							else if($_SESSION['userType'] == 'admin'){
								echo'<li><p>Welcome admin, '.$_SESSION['userName'].'</p><li>';
								//echo'<li class="nav_right"><p>Welcome, '$user'</p><li>';
								echo'<li><a href="logout.php">Logout</a><li>';
								<?php
// to change a session variable, just overwrite it 
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>
							}// admin nav
						}
					?>
					
				</ul>
			</div>
