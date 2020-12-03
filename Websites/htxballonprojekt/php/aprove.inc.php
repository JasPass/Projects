<?php

function getQueryInfo($choose) {
	$query = "SELECT `username`, `active` FROM `users` WHERE 1";
		
	if($query_run = mysql_query($query)) {
		$query_num_rows = mysql_num_rows($query_run);
	
		if($choose == 'rows') {
			return $query_num_rows;
		} else if($choose == 'run') {
			return $query_run;
		}
	}
}

function getUnactive() {
	
	for($index = 0; $index <= getQueryInfo('rows') - 1; $index++) {
		if($query_result = mysql_result(getQueryInfo('run'), $index, 'username')) {
			$active = mysql_result(getQueryInfo('run'), $index, 'active');
            $checked = '';
            
            if($active == '1')
                $checked = 'checked';
            
			echo $query_result.' '.'<input type="checkbox" name="user[]" value="'.$query_result.'" '.$checked.' ><br>';
		}
	}
}

function getUsers() {
	$names = array();
	
	for($index = 0; $index <= getQueryInfo('rows') -1; $index++) {
		if($query_result = mysql_result(getQueryInfo('run'), $index, 'username')) {
			
			$names[$index] = $query_result;
		}
	}
	return $names;
}

if(admin($_SESSION['user_id'])) {
	
	if(isset($_POST['save'])) {
		$users = getUsers();
		
		if(isset($_POST['user'])) {
			
			$selected = $_POST['user'];
			
		}
		
		$query = "UPDATE `users` SET `active`='0' WHERE 1";
			
		if($query_run = mysql_query($query)) {
						
			for($index = 0; $index <= count($users) - 1; $index++) {
			
				if(isset($selected[$index])) {
				
					$query = "UPDATE `users` SET `active`='1' WHERE `username`='".$selected[$index]."'";
					
					if($query_run = mysql_query($query)) {
					
					}
				}
			}						
		}
	}
	if(getQueryInfo('rows') != 0) {
	?>
	<div class="text" >
	<form action="<?php echo $current_file; ?>" method="POST" >
		<?php getUnactive(); ?><br>
		<input type="submit" name="save" value="Gem Info">
	</form>
	</div>
	<?php
	}
}
?>