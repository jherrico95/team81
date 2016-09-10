<?php
$title = "Classes - Pinelands Music School";
$content = "<img src='images/parkbark.png' al=''/>";
$sidebar = "erfjkgrelkjbw;kjfbwe";

session_start();
if($_SESSION['userType'] != 'student')
{
	header('Location: /team81/index.php');
	
}else if($_SESSION['userType'] == 'student') {
	include 'templates/classes_template.php';
}
?>