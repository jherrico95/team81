<?php

function display_month($month, $year){
	echo"month = $month, year = $year<br/>";
	$first_day_of_month = mktime(0,0,0, $month, 1, $year);
	date('Y-M-d', $first_day_of_month);
	$first_day_of_week = date('w', $first_day_of_month);
	$days_in_month = date('t', $first_day_of_month);
	//$month_name = date('F', $first_day_of_month);
}

function Month_Name($month, $year){
	$first_day_of_month = mktime(0,0,0, $month, 1, $year);
	echo $month_name = date('F', $first_day_of_month);
}

function Year($month, $year){
	echo"$year<br/>";
}

function Calendar($month, $year){
	$first_day_of_month = mktime(0,0,0, $month, 1, $year);
	$first_day_of_week = date('w', $first_day_of_month);
	$days_in_month = date('t', $first_day_of_month);
	
	
	

	if( $first_day_of_week > 0 ){
		echo"<td colspan =\"$first_day_of_week\">&nbsp;</td>";
	}
	for($day_of_week = $first_day_of_week, $day_of_month = 1; $day_of_month <= $days_in_month; $day_of_month++, $day_of_week++){
		if($day_of_week == 7){
			echo'</tr>';
			$day_of_week = 0;
			echo'<tr>';
		}
		
		echo"<td>$day_of_month</td>";
	}
}


function CalYear(){
	$actualDay = date('d');
	$actualMonth = date('n');
	$publicHolidays = array
						(
						array(1,1),
						array(4,25),
						array(5,1)
						);
	
	$year = 2016;
	for($month = 1; $month <= 12; $month++ ){
		$first_day_of_month = mktime(0,0,0, $month, 1, $year);
		$first_day_of_week = date('w', $first_day_of_month);
		$days_in_month = date('t', $first_day_of_month); 
		$month_name = date('F', $first_day_of_month);
		echo'<h3>';
			echo $month_name;
			echo '&nbsp';
			echo $year;
		echo'</h3>';
		echo '<table border="solid">';
			echo '<tr>';
				echo '<th>SUN</th><th>MON</th><th>TUE</th><th>WED</th><th>THU</th><th>FRI</th><th>SAT</th>';
			echo '</tr>';
			echo '<tr>';
		if( $first_day_of_week > 0 ){
			echo"<td colspan =\"$first_day_of_week\">&nbsp;</td>";
		}
		for($day_of_week = $first_day_of_week, $day_of_month = 1; $day_of_month <= $days_in_month; $day_of_month++, $day_of_week++){
			if($day_of_week == 7){
				echo'</tr>';
				$day_of_week = 0;
				echo'<tr>';
			}
			if($actualDay == $day_of_month && $actualMonth == $month ){
				echo"<td id='actualDate'>$day_of_month</td>";
			}else if($day_of_week == 0){
				echo"<td id='sunday'>$day_of_month</td>";
			}else if($day_of_week == 6){
				echo"<td id='saturday'><a href='#'>$day_of_month</a></td>";
			}else{
				echo"<td>$day_of_month</td>";
			}
		}
		echo "</tr>";
		echo "</table>";
	}// end for
	


	
} // end CalYear()

//foreach($publicHolidays as $pubmonth ){
	//			foreach($pubmonth as $pubdays){
		//			if($pubmonth == $month && $pubdays == $day_of_month ){
			//			echo"<td id='publicHolidays'>$day_of_month</td>";
				//	}
				//} // end foreach
				
		//	}// end foreach

function CalNice(){
	
	
	echo'<table width="100%"><tr>';
	for ($month = 1; $month <= 12; $month++){
		if(($month-1)% 4 == 0)
			echo"</tr><tr>";
		echo'<td>';
		display_calendar($month, 2016);
		echo'</td>';
	}
	echo'</tr></table>';
	
} // end CalNice

function display_calendar($month, $year){
	$public = False;
	$actualDay = date('d');
	$actualMonth = date('n');
	$publicHolidays = array();
						
						$publicHolidays[0][0] = "1";
						$publicHolidays[0][1] = "1";
						$publicHolidays[1][0] = "1";
						$publicHolidays[1][1] = "26";
						$publicHolidays[2][0] = "5";
						$publicHolidays[2][1] = "1";
						$publicHolidays[3][0] = "5";
						$publicHolidays[3][1] = "5";
						$publicHolidays[4][0] = "6";
						$publicHolidays[4][1] = "9";
						$publicHolidays[5][0] = "7";
						$publicHolidays[5][1] = "9";
						$publicHolidays[6][0] = "10";
						$publicHolidays[6][1] = "25";
						$publicHolidays[7][0] = "12";
						$publicHolidays[7][1] = "25";
						
						
	
	$year = 2016;
	
	//for($month = 1; $month <= 12; $month++ ){
		$first_day_of_month = mktime(0,0,0, $month, 1, $year);
		$first_day_of_week = date('w', $first_day_of_month);
		$days_in_month = date('t', $first_day_of_month); 
		$month_name = date('F', $first_day_of_month);
		echo'<h3>';
			echo $month_name;
			echo '&nbsp';
			echo $year;
		echo'</h3>';
		echo '<table border="solid">';
			echo '<tr>';
				echo '<th>SUN</th><th>MON</th><th>TUE</th><th>WED</th><th>THU</th><th>FRI</th><th>SAT</th>';
			echo '</tr>';
			echo '<tr>';
		if( $first_day_of_week > 0 ){
			echo"<td colspan =\"$first_day_of_week\">&nbsp;</td>";
		}
		for($day_of_week = $first_day_of_week, $day_of_month = 1; $day_of_month <= $days_in_month; $day_of_month++, $day_of_week++){
			if($day_of_week == 7){
				echo'</tr>';
				$day_of_week = 0;
				echo'<tr>';
			}
			foreach ($publicHolidays as $v1) {
				if($v1[0] == $month && $v1[1] == $day_of_month){
					echo"<td id='publicHolidays'><a href='#'>$day_of_month</a></td>";	
					$public = True;
				} // end if
			} // end freach

			if($actualDay == $day_of_month && $actualMonth == $month && $public == False){
				echo"<td id='actualDate'>$day_of_month</td>";
			}else if($day_of_week == 0 && $public == False){
				echo"<td id='sunday'>$day_of_month</td>";
			}else if($day_of_week == 6 && $public == False){
				echo"<td id='saturday'>$day_of_month</td>";
			}else if($public == False){
				echo"<td>$day_of_month</td>";
			}
			$public = False;
		}
		echo "</tr>";
		echo "</table>";
	//}// end for
}

?>