<?php
	session_start();   
	
	
	unset($_SESSION['isMembers']);
	session_destroy();
	$title = 'Log Out - Pinelands Music School';
	include('templates/html_head.inc');	
?>
			<div id="content_area">
				<p>u are nw lgged u!</p>
			</div>
			
			<div id="sidebar">
				
			</div>
	<?php
		include('templates/footer.inc');
	?>
