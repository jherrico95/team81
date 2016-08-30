<!DOCTyPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link href="styles.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="header"></div>
		
		<div id="wrapper">
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a><li>
					<li><a href="search.php">Search</a><li>
					<li><a href="map.php">Map</a><li>
					<li style="float:right"><a href="signup.php">Signup / Login</a><li>
				</ul>
			</div>
			
			
			<div id="content_area">
			
				<?php echo'<table width="100%">';
				echo $parkID;
						foreach ($result as $park){
							echo '<tr>';
							echo '<td>';
							echo '<td><a href="park.php?park=',$park['id'],'">',$park['dogParkName'],'</a></td>';
							//echo $park['dogParkName'];
							echo '</td>';
							echo '<td>';
							echo $park['street'];
							echo '</td>';
							echo '<td>';
							echo $park['parkName'];
							echo '</td>';
							echo '<td>';
							echo '<p>',$park['dogParkArea'],'<nbsp>m2</p>';
							echo '</td>';
							echo '<td><img width="100px" src="images/',$park['Picture'],'"></td>'; 
							echo'</tr>';
						}
					echo '</table>'; 
				?>
			</div>
						<div id="sidebar">
				<img src="images/parkbark.png" al=""/>
			</div>
	<?php
		include('footer.inc');
	?>