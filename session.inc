<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//include('createDB.inc');
// Selecting Database
//$db = mysql_select_db("company", $connection);
//session_start();// Starting Session
// Storing Session
$user_Name=$_SESSION['userName'];
$resultType = $pdo->query('SELECT userType FROM login WHERE userName ='$user_Name''); 


// SQL Query To Fetch Complete Information Of User
//$ses_sql=mysql_query("select userType from login where userName='$user_Name'", $connection);
//$row = mysql_fetch_assoc($ses_sql);
//$login_session =$row['username'];
//if(!isset($login_session)){
//mysql_close($connection); // Closing Connection
//header('Location: index.php'); // Redirecting To Home Page
}
?>