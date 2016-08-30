


<?php 
$cookie_value = $_POST[$cookie_value];


?>


<head>
<?php
if(isset($_SESSION['isMembers'])){
				$cookie_name = "user";
				
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
			}
?>
</head>



<?php

header("Location: http://{$_SERVER['HTTP_HOST']}/n9563334/index.php ");
?>