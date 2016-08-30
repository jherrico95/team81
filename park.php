<?php

	
	$parkID = $_GET['park']; 
	include('createDB.inc');
		
	$result = $pdo->prepare('SELECT id, dogParkName, street, parkName, latitude, longitude, dogParkArea, Picture FROM parks where id = :park');
	$result->bindParam(':park', $parkID, PDO::PARAM_STR);
	$title = ':dogParkName - Park Bark';
	//$title->bindValue(':dogParkName', $park['dogParkName']);
	$result->execute();
	//$title->execute();
	$reviews = $pdo->prepare('SELECT * FROM reviews where id = :park');
	$reviews->bindParam(':park', $parkID, PDO::PARAM_STR);
	$reviews->execute();
	//$row = $result->fetchObject();
//$title = "???? - Park bark";
	$map = '
	
	

			
			
			';
			

	include('hml_head.inc');
?>
			<div id="content_area">
				
				<?php 
					foreach ($result as $park){
							echo'<table width="100%">';
							
								echo '<tr>';
									echo '<h1>',$park['dogParkName'],'</h1>';
								echo '</tr>';
								echo '<tr>';
									
									echo '<td>';
										echo '<td id="parkimage"><img src="images/',$park['Picture'],'"></td>';
									echo '</td>';
									echo '<td>';
										//echo $map;
										echo '<div id="map"></div>
											<script>
												var map;
												function initMap() {
													var myLatLng = {lat: ',$park['latitude'],', lng: ',$park['longitude'],'};
													map = new google.maps.Map(document.getElementById("map"), {
														center: myLatLng,
														zoom: 14
													});
													
													
													var marker = new google.maps.Marker({
														position: myLatLng,
														map: map,
														title: "',$park['dogParkName'],'"
													});
													marker.addListener("click", function() {
														infowindow.open(map, marker);
													});
													
													var infowindow = new google.maps.InfoWindow({
														content: contentString
													});
													
												}
											</script>
											<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYOertwWLoBJGxLJhp8Z3Bu-mlOIFdnA4&callback=initMap"
											async defer></script>  
											';
																	
										
									echo '</td>';
								echo'</tr>';
							echo '</table>'; 
							
							echo '</br>';
							
							echo'<table width="100%">';
							//echo $parkID;
						
							echo '<tr>';
							
							echo '<td>';
							echo $park['street'];
							echo '</td>';
							echo '<td>';
							echo $park['parkName'];
							echo '</td>';
							echo '<td>';
							echo '<p>',$park['dogParkArea'],'<nbsp>m2</p>';
							echo '</td>';
							echo '<td><a href="review.php?park=',$park['id'],'">Wrie a Review!</a>'; 
							echo'</tr>';
						}
					echo '</table>'; 
				?>
				
				<div id="reviews">
				<?php
					echo'<h2>Reviews</h2>';
					if(sizeof($reviews)>0){
						foreach ($reviews as $review){
							echo'<table width="100%">';
							echo '<tr>';
								echo '<td>';
									echo '<h1>',$review['userName'],'</h1>';
								echo '</td>';
							echo '</tr>';
							echo '<tr>';
								echo '<td>';
									echo $review['reviewtext'];
								echo '</td>';
								echo '<td>';
									echo $review['date'];
								echo '</td>';
								echo '<td>';
									echo $review['rating'];
								echo '</td>';
								echo '<td><img width="100px" src="images/',$park['Picture'],'"></td>'; 
							echo'</tr>';
							echo '</table>';
						}
					}else if(sizeof($reviews)<=0){
						echo '<p>Srr, here are n reviews Wrien e! Be he firs<p>';
					}
					
					
					?>
				</div>
				
			</div>
			
						<div id="sidebar">
				<img src="images/parkbark.png" al=""/>
			</div>
	<?php
		include('footer.inc');
	?>