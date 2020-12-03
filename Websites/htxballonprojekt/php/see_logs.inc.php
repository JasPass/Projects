<?php
	if(loggedin()) {
	
        function getUsers() {
            if(isset($_GET['date']) && !empty($_GET['date'])) {
				$date = $_GET['date'];
				
				$query = "SELECT `users` FROM `logs` WHERE `date`='".$date."'";
				
				if($query_run = mysql_query($query)) {
					$users = mysql_result($query_run, 0, 'users');
					
					$user_array = explode(" ", $users);
					
					return $user_array;
				}
			}
        }
        
	function getLog() {
		if(isset($_GET['date']) && !empty($_GET['date'])) {
			$date = $_GET['date'];
			
			 $query = "SELECT `text` FROM `logs` WHERE `date`='".$date."'";
			 
			 if($query_run = mysql_query($query)) {
				$text = mysql_result($query_run, 0, 'text');
				
				echo $text;
			 }
		}
	}
	
	//checks if variables are set, not empty and meets the requirements
		
		if(isset($_POST['dates'])&&isset($_POST['log_text'])&&isset($_GET['date'])) {
		
		$date = $_POST['dates'];
		
        if(isset($_POST['delete'])) {
			
			$query = "DELETE FROM `logs` WHERE `date`='".$date."'";
				
			if($query_run = mysql_query($query)) {
				header('Location: index.php');
			}
            
        } else if(isset($_POST['save'])) {
		
				echo 'ok.';
				$date = $_POST['dates'];
				$pre_date = $_GET['date'];
				$text = trim($_POST['log_text']);
				
				if(!empty($text)&&!empty($date)&&$date != 'Datoer Fra Tidsplan') {
					if(strlen($text)>500) {
						$error = '';
					} else {
						
						$query = "SELECT `id` FROM `logs` WHERE `date`='".$date."'";
						
						if($query_run = mysql_query($query)){
							
							$query_num_rows = mysql_num_rows($query_run);
							
							if($query_num_rows == 1 && $pre_date != $date) {
								
							} else {
								
								$query = "UPDATE `logs` SET `text`='".$text."', `date`='".$date."' WHERE `date`='".$pre_date."'";
								
								if($query_run = mysql_query($query)) {
									
								} else {
									
								}
							}
						}
					}
				} else {
					$error = 'Udfyld venligst alle felter.';
				}
			
			if(isset($_POST['check'])) {
				$selected = $_POST['check'];	
			} else {
				$selected[0] = '';
			}
			
			$users = '';
				
			for($index = 1; $index <= count($selected); $index++ ) {
				if($index != 1)
					$users .= ' ';
					
				$users .= $selected[$index - 1];
			}
			
			if(isset($selected)) {
				$query = "UPDATE `logs` SET `users`='".$users."' WHERE `date`='".$pre_date."'";
				if($query_run = mysql_query($query)) {
					header('Location: '.$current_file.'?date='.$pre_date);
				}
			}
		}
	}
?>
<div class="text" >
<form action="<?php echo $current_file . '?date=' . $_GET['date']; ?>" method="POST" >
<select name="dates" class="op2" style="margin-right:5px" disabled>
<?php
    $query = "SELECT `date`, `text` FROM `schedule` WHERE 1 ORDER BY `date` ASC";
    
    if($query_run = mysql_query($query)) {
        $query_num_rows = mysql_num_rows($query_run);
        
		echo '<option id="first" >Datoer Fra Tidsplan</option>';
		
        for($index = 1; $index <= $query_num_rows; $index++) {
            $date = mysql_result($query_run, $index - 1, 'date');
            $text = mysql_result($query_run, $index - 1, 'text');
            $selected = '';
			
			if(isset($_GET['date'])) {
				if($date == $_GET['date']) {
					$selected = 'selected';
				}
			}
			
            echo '
            <option id="'.$text.'" '.$selected.'>'.$date.'</option>
            ';
        }
    }
?>
</select>
<input class="click" type="button" value="Rediger" >
<input id="save" type="submit" name="save" value="Gem" style="display:none" >
<input id="delete" type="submit" name="delete" value="Slet" style="display:none">
<br><br>

<textarea class="schedule" style="height:100px; width:345px; opacity:1" readonly></textarea><br><br>
<?php
    $query = "SELECT `firstname` FROM `users` WHERE admin='0'";
    
    if($query_run = mysql_query($query)) {
        $query_num_rows = mysql_num_rows($query_run);
        
        for($index = 1; $index <= $query_num_rows; $index++) {
            $user = mysql_result($query_run, $index - 1, 'firstname');
			$checked = '';
            
            for($index1 = 1; $index1 <= count(getUsers()); $index1++) {
                $users = getUsers();
                if($users[$index1 - 1] == $user) {
                    $checked = 'checked';
                }
            }
            
            echo '
            <label style="margin-left:5px" >'.$user.'</label><input style="margin-left:2.5px" class="user" type="checkbox" name="check[]" value="'.$user.'" '.$checked.' disabled>
            ';
			
			if($index != $query_num_rows)
				echo ',';
        }
    }
    
?>
<br><br>
<textarea id="log" style="height:100px; width:345px" name="log_text" readonly><?php getLog(); ?></textarea>
</form>
</div>
<?php
    } else {
        echo 'Log ind for at bruge log-systemet';
    }
?>