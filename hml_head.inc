<?php
	
	session_start();
	if(isset($_SESSION['isMembers'])){
		$_SESSION['isMembers'];
	}
	
?>
<!DOCTyPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link href="styles.css" rel="stylesheet" type="text/css"/>
		
	</head>
	<body>
		<div id="header">
			<img src="images/parkbark_w.png" alt="Park Bark Lg"/>
		</div>
		
		<div id="wrapper">
			<?php
			include('nav.inc');
			?>