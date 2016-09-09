<?php
$title = "Admin - Teacher Approval";
$content = "<img src='images/parkbark.png' al=''/>";
$sidebar = "erfjkgrelkjbw;kjfbwe";

session_start();
if($_SESSION['userType'] != 'admin')
{
	header('Location: /team81/index.php');
	
}else if($_SESSION['userType'] == 'admin') {
	include 'templates/template_admin.php';
}
?>