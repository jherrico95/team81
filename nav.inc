			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a><li>
					<li><a href="search.php">Search</a><li>
					<li><a href="map.php">Map</a><li>
					<?php
						if(isset($_SESSION['isMembers'])){
							echo'<li class="nav_right"><a href="logout.php">Logout</a><li>';
						}else if(!isset($_SESSION['isMembers'])){
							echo'<li class="nav_right"><a href="signup.php">Signup</a><li>';
							echo'<li class="nav_right"><a href="login.php">Login</a><li>';
						}
					?>
					
				</ul>
			</div>