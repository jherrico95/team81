<?php
$title = "Enroll - Pinelands Music School";


session_start();
if($_SESSION['userType'] != 'student')
{
	header('Location: /team81/index.php');
	
}else if($_SESSION['userType'] == 'student') {
	include 'templates/enroll_template.php';
}
?>