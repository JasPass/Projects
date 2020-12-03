<?php

if(isset($_POST['username1'])&&isset($_POST['pass'])) {
	$username1 = $_POST['username1'];
	$pass = $_POST['pass'];

	$pass_hash = md5($pass);

	if(!empty($username1)&&!empty($pass)) {
		$query = "SELECT `id` FROM `users` WHERE `username`='".mysql_real_escape_string($username1)."' AND `password`='".mysql_real_escape_string($pass_hash)."'";
		if($query_run1 = mysql_query($query)) {
			$query_num_rows = mysql_num_rows($query_run1);
			if($query_num_rows==0) {
				$error2 = 'Forkert adgangskode<br> eller brugernavn';
			} else if($query_num_rows==1) {
				$query = "SELECT `active` FROM `users` WHERE `username`='".mysql_real_escape_string($username1)."' AND `password`='".mysql_real_escape_string($pass_hash)."'";
				if($query_run2 = mysql_query($query)) {
					$active = mysql_result($query_run2, 0, 'active');
					if($active==1) {
					$user_id = mysql_result($query_run1, 0, 'id');
					$_SESSION['user_id']=$user_id;
					header('Location: '.$http_referer);
					} else {
						$error2 = 'Din konto er ikke aktiv. Kontakt venligst en af sidens administratore';
					}
				}
			}
		}
	} else {
		$error2 = 'Indtast både brugernavn og adgangskode';
	}
}

?>

<form class="loginform" action="<?php echo $current_file; ?>" method="POST">
<!--<label style="margin-left:25px" >Brugernavn</label>
<label style="margin-left:55px" >Adgangskode</label>
<br>-->
<input style="margin-bottom:5px;width:184px" type="text" maxlength="40" placeholder="Brugernavn" name="username1"><br>
<input style="margin-bottom:5px;width:184px" type="password" placeholder="Adgangskode" name="pass">
<input style="margin-left:5px" type="submit" value="Log in"><br><br>
<?php if(isset($error2)){echo '<p style="color:#990033; margin-top:7px; position:relative; bottom:25px; text-shadow:none"><b>'.$error2.'</b></p>';} ?>
</form>
