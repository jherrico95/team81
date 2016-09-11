<?php
$title = "Lessons - Pinelands Music School";
$content = "<img src='images/parkbark.png' alt=''/>";
$sidebar = "erfjkgrelkjbw;kjfbwe";

session_start();
if($_SESSION['userType'] != 'student')
{
	header('Location: /team81/index.php');
	
}else if($_SESSION['userType'] == 'student') {
	include 'templates/lesson_template.php';
}
?>