<?php
	if(loggedin()) {
	
	//checks if variables are set, not empty and meets the requirements
	
	if(isset($_POST['dates'])&&isset($_POST['log_text'])&&isset($_POST['check'])) {
        $date = $_POST['dates'];
		
		$text = trim($_POST['log_text']);
		
		if(!empty($text)&&!empty($date)&&$date != 'Datoer Fra Tidsplan') {
			if(strlen($text)>500) {
				$error = '';
			} else {
				
				$query = "SELECT `id` FROM `logs` WHERE `date`='".$date."'";
				
				if($query_run = mysql_query($query)){
				
					$query_num_rows = mysql_num_rows($query_run);
					
					if($query_num_rows == 1) {
					
						} else {
							
							$query = "INSERT INTO `logs` VALUES ('','".mysql_real_escape_string($text)."','".mysql_real_escape_string($date)."','')";
									
							if($query_run = mysql_query($query)) {
							
							} else {
								
						}
					}
				}
			}
		} else {
			$error = 'Udfyld venligst alle felter.';
		}
		
		$selected = $_POST['check'];	
		$users = '';
		
		for($index = 1; $index <= count($selected); $index++ ) {
			if($index != 1)
				$users .= ' ';
			
			$users .= $selected[$index - 1];
		}
		
		if(isset($selected)) {
			$query = "UPDATE `logs` SET `users`='".$users."' WHERE `date`='".$date."'";
			if($query_run = mysql_query($query)) {
				header('Location: '.$http_referer);
			}
		}
	}
        ?>
<form action="<?php echo $current_file; ?>" method="POST" >
<br>
<label><b>Tidsplan for Dagen:</b></label><br><br>
<select name="dates" class="op" >
<?php
    $query = "SELECT `date`, `text` FROM `schedule` WHERE 1 ORDER BY `date` ASC";
    
    if($query_run = mysql_query($query)) {
        $query_num_rows = mysql_num_rows($query_run);
        
		echo '<option id="first" selected >Datoer Fra Tidsplan</option>';
		
        for($index = 1; $index <= $query_num_rows; $index++) {
            $date = mysql_result($query_run, $index - 1, 'date');
            $text = mysql_result($query_run, $index - 1, 'text');
            
            echo '
            <option id="'.$text.'" >'.$date.'</option>
            ';
        }
    }
?>
</select><br><br>
<textarea class="schedule" style="height:0px; width:400px; opacity:0" readonly></textarea><br><br>
<label><b>Fremmødte:</b></label><br><br>
<?php
    $query = "SELECT `firstname` FROM `users` WHERE admin='0'";
    
    if($query_run = mysql_query($query)) {
        $query_num_rows = mysql_num_rows($query_run);
        
        for($index = 1; $index <= $query_num_rows; $index++) {
            $user = mysql_result($query_run, $index - 1, 'firstname');
			
            echo '
            <label style="margin-left:5px" >'.$user.'</label><input style="margin-left:2.5px" type="checkbox" name="check[]" value="'.$user.'" >
            ';
			
			//if($index != $query_num_rows)
				//echo ',';
        }
    }
    
?>
<br><br>
<textarea style="height:100px; width:400px" name="log_text" ></textarea>
<br><br>
<input type="submit" value="Gem" >
<input id="cancel2" type="button" value="Anuller" />
<br><br>
</form>
<?php
    } else {
        echo '<br>Log venligst ind for at benytte logbogs-systemet';
    }
?>
