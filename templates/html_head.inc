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
		<!--<link href="./css/styles.css" rel="stylesheet" type="text/css"/>-->

		<!--BOOTSTRAP-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Main CSS files -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/owl.carousel.css" />
		<link rel="stylesheet" href="css/magnific-popup.css" />
		<link rel="stylesheet" href="css/font-awesome.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/responsive.css" />

		
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/icon/favicon.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="images/icon/apple-touch-icon-57-precomposed.png">

		<!--Font Awesome-->
		<script src="https://use.fontawesome.com/8891fe947c.js"></script>


	</head>
	<body>
		<!--<div id="header">
			<img src="./images/pinelands_banner.png" alt="Pinelands Music School Banner"/>
		</div>-->
		
		<!-- PRELOADER -->
		<div id="st-preloader">
			<div id="pre-status">
				<div class="preload-placeholder"></div>
			</div>
		</div>
		<!-- /PRELOADER -->

		<?php include('nav.inc'); ?>