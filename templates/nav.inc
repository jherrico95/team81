	<!-- HEADER -->
	<header id="header">
		<nav class="navbar st-navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
					<a class="logo" href="index.php"><img src="images/Logo2.svg" alt=""></a>
				</div>

				<div class="collapse navbar-collapse navbar-left" id="st-navbar-collapse">
					<ul class="nav navbar-nav">
				    	<li><a href="./index.php">Home</a><li>
						<!--<li><a href="./teachers.php">Teachers</a><li>-->
						<li><a href="./teachers.php">Teachers</a></li>
						<li><a href="./about.php">About Us</a><li>
						<!--<li><a href="./faq.php">FAQ</a><li>-->
						<li><a href="./contact.php">Contact Us</a><li>
					</ul>
				</div><!-- /.navbar-collapse -->

				<div class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">

						<?php
							if(isset($_SESSION['isMembers'])){
								echo'<li class="nav_right"><p>Welcome, '.$_SESSION['userName'].'</p><li>';
								//$_SESSION["favcolor"] = "yellow";
								//print_r($_SESSION);
								//echo'<li class="nav_right"><p>Welcome, '$user'</p><li>';
								echo'<li class="nav_right"><a href="./logout.php">Logout</a><li>';
							}else if(!isset($_SESSION['isMembers'])){
								echo'<li class="nav_right"><a href="./signup.php">Signup</a><li>';
								echo'<li class="nav_right"><a href="./login.php">Login</a><li>';
							}
						?>

						
						<?php
							if(isset($_SESSION['isMembers'])){
								if($_SESSION['userType'] == 'student'){
									//echo'<li><p>Welcome, '.$_SESSION['userName'].'</p><li>';
									//echo'<li class="nav_right"><p>Welcome, '$user'</p><li>';
									echo'<li><a href="classes.php">Classes</a><li>';
									echo'<li><a href="teachers.php">Teachers</a><li>';
									echo'<li><a href="complaints.php">Complain</a><li>';
									echo'<li><a href="timetable.php">Timetable</a><li>';

								}// student nav
								else if($_SESSION['userType'] == 'teacher'){
									//echo'<li><p>Welcome teacher, '.$_SESSION['userName'].'</p><li>';
									echo'<li><a href="complaints.php">Complain</a><li>';
									echo'<li><a href="reschedule.php">Reschedule</a><li>';
									//echo'<li class="nav_right"><p>Welcome, '$user'</p><li>';
									//echo'<li><a href="logout.php">Logout</a><li>';
								}// teacher nav
								else if($_SESSION['userType'] == 'admin'){
									//echo'<li><p>Welcome admin, '.$_SESSION['userName'].'</p><li>';
									//echo'<li class="nav_right"><p>Welcome, '$user'</p><li>';
									//echo'<li><a href="logout.php">Logout</a><li>';
									echo'<li><a href="./admin.php">Admin</a><li>';
								}// admin nav
							}
						?>
				    </ul>
				</div>

			</div><!-- /.container -->
		</nav>
	</header>
	<!-- /HEADER -->