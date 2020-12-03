<?php
	
	require 'connect.inc.php';
	
	$query = "SELECT * FROM `logs` WHERE 1 ORDER BY `date` ASC";
	
	if($query_run = mysql_query($query)) {
		
		$query_num_rows = mysql_num_rows($query_run);
		
		if($query_num_rows != 0) {
			
			echo '<div class="text" >';
			
			for($index = 1; $index <= $query_num_rows; $index++) {
				
				$last_bit = '';
				
				if($index != $query_num_rows)
					$last_bit = '<br><br><hr><br>';
					
				$date = mysql_result($query_run, $index - 1,'date');
				$users = mysql_result($query_run, $index - 1,'users');
				$log = autolink(mysql_result($query_run, $index - 1,'text'));
				
				$user_array = explode(" ", $users);
				
				$query = "SELECT `text` FROM `schedule` WHERE `date`='".$date."'";
				
				if($query_run1 = mysql_query($query)) {
					
					$schedule = autolink(mysql_result($query_run1, 0,'text'));

					echo '
				
					<b>Dato:</b> '.$date.'<br><br>
					<b>Hvad skulle vi nå:</b> '.$schedule.'
					<br><br>
					<b>Hvem var til stede</b>: 
				
					';
				
					for($index1 = 1; $index1 <= count($user_array); $index1++) {
						if($index1 - 1 != 0 && $index1 != count($user_array) + 1)
							echo ', ';
						
							echo $user_array[$index1 - 1];
					}	
				
					echo '
				
					<br><br>
					'.$log.'
					'.$last_bit.'
				
					';
				}
			}
		echo '</div>';
		
		} else {
			echo '<div class="text" >Der er ikke oprettet nogle logbogs notater endnu.</div>';
		}
	}
?>
