<?php
	//include('createDB.inc');
	
	function checkPassword($userName,$passwd,$pdo){
				
		$query = $pdo->prepare('SELECT * FROM login WHERE userName = :userName 
								and password = SHA2(CONCAT(:passwd, salt), 0)');
		$query->bindValue(':passwd', $passwd);
		$query->bindValue(':userName', $userName);
		
		$query->execute();
		
		if($query->rowCount() > 0){
		return True;
		}
	}	
?>