<?php
	include('hml_head.inc');
?>
			<div id="content_area">
				<?php 
					echo'<form action="templaesearch.php" method="POST">';
						// name
						echo'SUBURB: ';
						echo'<select>';
							echo'<option value="ALL">ALL</option>';
							foreach ($suburb1 as $suburb2){
								echo'<option value=',$suburb2['suburb'],'>',$suburb2['suburb'],'</option>';
							}
						echo'</select>';
						echo' RAING: ';
						echo'<select>';
							echo'<option value="ALL">ALL</option>';
							for($i = 0; $i<10; $i++){
								echo'<option value=',$i+1,'>',$i+1,'</option>';
							}
						echo'</select>';
						
						// r lcain
						
						echo'<input type="submit" value="SUBMIT">';
					echo'</form>';
				?>
			
				<?php 
						foreach ($result as $park){
						echo'<table width="100%">';
							echo'<table width="30%">';
								echo '<tr>';
									echo '<td><img width="100px" src="images/',$park['Picture'],'"></td>';
								echo '</tr>';
							echo '</table>';
							
							
							echo'<table width="65%">';
								echo'<tr>';
									echo '<td><a href="park.php?park=',$park['id'],'">',$park['dogParkName'],'</a></td>';
								echo'</tr>';
								//echo $park['dogParkName'];
								echo'<tr>';
									echo '<td>';
										echo $park['street'];
									echo '</td>';
									echo '<td>';
										echo $park['parkName'];
									echo '</td>';
									echo '<td>';
										echo '<p>',$park['dogParkArea'],'<nbsp>m2</p>';
									echo '</td>';
								 
								echo'</tr>';
							echo '</table>';
						echo '</table>';
						}
					 
				?>
			</div>
			<div id="sidebar">
				<img src="images/parkbark.png" al=""/>
			</div>
	<?php
		include('footer.inc');
	?>