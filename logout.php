<?php
	session_start();   
	
	//session_destroy();
	unset($_SESSION['isMembers']);
	$title = 'Log Out - Park Bark';
	include('hml_head.inc');	
?>
			<div id="content_area">
				<p>u are nw lgged u!</p>
			</div>
			
			<div id="sidebar">
				
			</div>
	<?php
		include('footer.inc');
	?>
