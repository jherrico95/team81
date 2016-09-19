<?php
	session_start();   
	
	
	unset($_SESSION['isMembers']);
	session_destroy();
	$title = 'Log Out - Pinelands Music School';
	include('templates/html_head.inc');	
?>
			<div id="content_area">
				<br><br><br><br><br>
				<h2>You are now logged out!</h2>
			</div>
			
			<div id="sidebar">
				
			</div>
	<?php
		include('templates/footer.inc');
	?>
