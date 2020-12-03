<?php

function getSchedules() {
	$query_num_rows = 0;
	$run = true;
	$ids = array();
	$last_id = 1;

	$query = "SELECT `id` FROM `schedule` WHERE 1";
		
	if($query_run = mysql_query($query)) {
		$query_num_rows = mysql_num_rows($query_run);
		
		for($index = 1; $index <= $query_num_rows; $index++) {
			$ids[$index] = mysql_result($query_run, $index - 1, 'id');
		}
		for($index = 1; $run; $index++) {
			if(empty($ids[$index])) {
				$run = false;
			} else {
				$last_id = $ids[$index];
			}
		}
	}
	return $last_id;
}

if(isset($_POST['newdate']) && isset($_POST['newtext']) && isset($_POST['newtitle'])) {
		
	for($index = getSchedules(); $index > 0; $index--) {
		
        if(isset($_POST['delete'.$index])) {
            
            $query = "DELETE FROM `schedule` WHERE `id`='".$index."'";
            
			if($query_run = mysql_query($query)) {
				
				$query = "DELETE FROM `logs` WHERE `date`='".$_POST['newdate']."'";
				
				if($query_run = mysql_query($query)) {
				
					header('Location: schedule.php');
				
				}
			}
            
        } else if(isset($_POST['save'.$index])) {
			$text = $_POST['newtext'];
			$date = $_POST['newdate'];
            $title = $_POST['newtitle'];
                
                if(isset($_POST['newdone'])) {
                    $done = 1;
					echo 'ok';
                } else {
                    $done = 0;
					echo 'not';
                }
                
                if(strlen($text) <= 500) {
                    
                    $query = "SELECT `id` FROM `schedule` WHERE `date`='".$date."'";
                    
                    if($query_run = mysql_query($query)) {
                        
                        $query_num_rows = mysql_num_rows($query_run);
                        
                        if($query_num_rows == 0) {
                            
                            $query = "SELECT `date` FROM `schedule` WHERE `id`='".$index."'";
                            
                            if($query_run = mysql_query($query)) {
                                $query_result = mysql_result($query_run, 0, 'date');
                                
                                if($query_result != $date) {
									
                                    $query = "UPDATE `logs` SET `date`='".$date."' WHERE `date`='".$query_result."'";
                                    
                                    if($query_run = mysql_query($query)) {
                                        header('Location: schedule.php');
                                    }
                                    
									$query = "UPDATE `schedule` SET `date`='".mysql_real_escape_string($date)."', `text`='".mysql_real_escape_string($text)."' , `title`='".mysql_real_escape_string($title)."', `done`='".mysql_real_escape_string($done)."' WHERE `id`='".$index."'";
									
									if($query_run = mysql_query($query)) {
                                        header('Location: schedule.php');
                                    }
									
                                }
                            }
                        }
						
						$query = "UPDATE `schedule` SET `text`='".mysql_real_escape_string($text)."' , `title`='".mysql_real_escape_string($title)."', `done`='".mysql_real_escape_string($done)."' WHERE `id`='".$index."'";
                    
                            if($query_run = mysql_query($query)) {
                                header('Location: schedule.php');
                            }
                    }
                }
		}
	}
}

if(isset($_POST['text']) && isset($_POST['date']) && isset($_POST['title'])) {
	$text = $_POST['text'];
	$date = $_POST['date'];
    $title = $_POST['title'];
    
	if(!empty($text) && !empty($date) && !empty($title)) {
		
		if(strlen($text)>500 && strlen($title)>40) {
			echo 'error';
		} else {
            
            $query = "SELECT `id` FROM `schedule` WHERE `date`='".$date."'";
            
            if($query_run = mysql_query($query)) {
                
                $query_num_rows = mysql_num_rows($query_run);
                
                if($query_num_rows == 0) {
            
                    $query = "INSERT INTO `schedule` VALUES ('','".mysql_real_escape_string($text)."','".mysql_real_escape_string($title)."','".mysql_real_escape_string($date)."','')";
			
                    if($query_run = mysql_query($query)) {
                        header('Location: schedule.php');
                    } else {
                        echo 'Sorry. Something went wrong';
                    }
                }
            }
        }
	}			
}
?>
<form action="<?php echo $current_file; ?>" method="POST" >
	<br>
	<label><b>Dato:</b> (åååå-mm-dd)</label><br><br>
	<input type="date" name="date" /><br><br>
	<label><b>Tidsplans titel:</b></label><br><br>
    <input type="text" name="title" /><br><br>
	<label><b>Tidsplan:</b></label><br><br>
    <textarea style="height:100px; width:400px" name="text" ></textarea>
    <br><br>
    <input type="submit" name="submit" value="Gem" />
    <input id="cancel1" type="button" value="Anuller" />
</form>
