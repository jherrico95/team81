<?php
$title = "Search - Park bark";
//$content = '<iframe src="https://www.google.com/maps/d/embed?mid=1IaIEYv5Hq9HIu5_QTVsLq-hWXmQ" width="640" height="480"></iframe>';

$pdo = new PDO('mysql:host=fastapps04.qut.edu.au;dbname=n9563334', 'n9563334', 'Asl80085');  
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
	try  
	{  
	$result = $pdo->query('SELECT id, dogParkName, street, parkName, latitude, longitude, dogParkArea, Picture  FROM parks'); 
	$result2 = $pdo->query('SELECT id, dogParkName, street, parkName, latitude, longitude, dogParkArea, Picture, imageAlt FROM parks'); 
	$suburb1 = $pdo->query('SELECT distinct suburb  FROM parks');
	}
	catch (PDOException $e)  
	{   
	echo $e->getMessage();  
	}
	
$content= '';	
$search_para = $_POST["para"];
$Location = 'Location';
$Suburb = 'Suburb';
echo $search_para;
//include('hml_head.inc');
?>

<?php
	include('hml_head.inc');
?>
			<div id="content_area">
				<?php 
					echo $search_para;
					echo'<form action="search.php" method="POST">';
						echo'<h2>Selec a mehd  search b:</h2>
						<select name ="para">
							<option value="Location">Location</option>
							<option value="Name">Name</option>
							<option value="Suburb">Suburb</option>
							<option value="Rating">Rating</option>
						</select>';
						echo'<input type="submit" value="SUBMIT">';
					echo'</form>';	
					echo'<form action="search.php" method="POST">';
						// name
						echo $search_para;
						if($search_para = "Location"){
							//
						}else if($search_para = 'suburb'){
							echo'SUBURB: ';
							echo'<select>';
								echo'<option value="ALL">ALL</option>';
								foreach ($suburb1 as $suburb2){
									echo'<option value=',$suburb2['suburb'],'>',$suburb2['suburb'],'</option>';
								}
							echo'</select>';
						}else if($search_para = "Rating"){
							echo' RATING: ';
							echo'<select>';
								echo'<option value="ALL">ALL</option>';
								for($i = 0; $i<5; $i++){
									echo'<option value=',$i+1,'>',$i+1,'</option>';
								}
							echo'</select>';
						}else if($search_para = "Name"){
							echo' RATING: ';
							echo'<select>';
								echo'<option value="ALL">ALL</option>';
								for($i = 0; $i<5; $i++){
									echo'<option value=',$i+1,'>',$i+1,'</option>';
								}
							echo'</select>';
						}
						
						// r lcain
						
						echo'<input type="submit" value="SUBMIT">';
					echo'</form>';
					
					echo'	<div id="maplarge"></div>
							<script>
								var map;
								function initMap() {
									var myLatLng = {lat: -27.41, lng: 153.03};
									map = new google.maps.Map(document.getElementById("maplarge"), {
											center: myLatLng,
										zoom: 11
									});  ';
							foreach ($result as $park){		
								echo'	var myLatLng = {lat: ',$park['latitude'],', lng: ',$park['longitude'],'}; 
									
									
									var marker = new google.maps.Marker({
										position: myLatLng,
										map: map,
										title: "',$park['dogParkName'],'"
									});
									
									
													
								'; //end echo
							}	// end freach	
								
					echo'} 
								</script>
								
								<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYOertwWLoBJGxLJhp8Z3Bu-mlOIFdnA4&callback=initMap"
								async defer></script>     ';
					
					
						foreach ($result2 as $park2){
						echo'<table width="100%">';
							echo'<table>';
								echo '<tr>';
									echo '<td><img width="100px" src="images/',$park2['Picture'],'"alt="',$park2['imageAlt'],'"></td>';
								echo '</tr>';
							echo '</table>';
							
							
							echo'<table>';
								echo'<tr>';
									echo '<td><a href="park.php?park=',$park2['id'],'">',$park2['dogParkName'],'</a></td>';
								echo'</tr>';
								//echo $park['dogParkName'];
								echo'<tr>';
									echo '<td>';
										echo $park2['street'];
									echo '</td>';
									echo '<td>';
										echo $park2['parkName'];
									echo '</td>';
									echo '<td>';
										echo '<p>',$park2['dogParkArea'],'<nbsp>m2</p>';
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