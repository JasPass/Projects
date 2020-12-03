<?php

if(!loggedin()) {
	
	//checks if variables are set, not empty and meets the requirements
	
	if(isset($_POST['username'])&&isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['pass'])&&isset($_POST['pass_con'])) {
		$username = $_POST['username'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$pass = $_POST['pass'];
		$pass_con = $_POST['pass_con'];
		
		if(!empty($username)&&!empty($firstname)&&!empty($lastname)&&!empty($pass)&&!empty($pass_con)) {
			if(strlen($username)>40||strlen($firstname)>40||strlen($lastname)>40) {
				$error = 'Maximum længde af navn, efernavn, fornavn og email er 40 karaktere.';
			} else {
				if($pass!=$pass_con) {
					$error = 'Adgangskoder er ikke ens.';
				} else if(strlen($pass) < 8) {
                    $error = 'Adgangskode skal være mindst 8 karaktere lang.';
                } else {
					$pass_hash = md5($pass);
					$query = "SELECT `username` FROM `users` WHERE `username`='$username'";
					
					if($query_run = mysql_query($query)) {
						$query_num_rows = mysql_num_rows($query_run);
						
						if($query_num_rows==1) {
							$error = 'Brugernavnet '.$username.' er allerede i brug.';
						} else if($query_num_rows==0){
							
							$query = "INSERT INTO `users` VALUES ('','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($username)."','".mysql_real_escape_string($pass_hash)."','','')";
							
							if($query_run = mysql_query($query)) {
								header('Location: success.php');
							} else {
							 $error = 'Noget gik desvære galt. Prøv venligst igen.';
							}
						}
					}
				}
			}
		} else {
			$error = 'Udfyld venligst alle felter.';
		}
	} 
?>

<form action="<?php echo $current_file ?>" method="POST">
	<h2>Opret en Bruger</h2><br>
	<div class="text" >
	<hr>
	<table style="margin:15px auto 0px; text-align:center" >
		<tr>
			<th><label>Fornavn:</label></th>
			<th><input class="reg-field" type="text" maxlength="40" name="firstname" value="<?php if(isset($firstname)) { echo $firstname; } ?>"><br></th>
		</tr>
		<tr>
			<th><br><label>Efternavn:</label></th>
			<th><br><input class="reg-field" type="text" maxlength="40" name="lastname" value="<?php if(isset($lastname)) { echo $lastname; } ?>"></th>
		</tr>
		<tr>
			<th><br><label>Brugernavn:</label></th>
			<th><br><input class="reg-field" type="text" maxlength="40" name="username" value="<?php if(isset($username)) { echo $username; } ?>"></th>
		</tr>
		<tr>
			<th><br><label>Adgangskode:</label></th>
			<th><br><input class="reg-field" type="password" name="pass"></th>
		</tr>
		<tr>
			<th><br><label>Bekraft Adgangskode:</label></th>
			<th><br><input class="reg-field" type="password" name="pass_con"></th>
		</tr>
		<tr>
			<th><br></th>
			<th><br><input class="button" type="submit" Value="Register"></th>
		</tr>
	</table>
	<br>
	<hr>
	</div>
	<?php echo '<p style="color:#990033"><b>'.$error.'</b></p>'; ?>
</form>
<br>
<?php
} else if(loggedin()) {
	echo '<h3>Velkommen til BPM</h3><br>Du kan nu begynde at anvende sidens funktioner.<br><br>';
}
?>
