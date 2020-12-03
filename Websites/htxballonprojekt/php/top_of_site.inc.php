<?php
	if(!strpos($current_file, 'index.php') && !strpos($current_file, 'success.php') && !strpos($current_file, 'fail.php'))
		if(!loggedin())
			header('Location: fail.php');
?>
<div class="bar" >
	<div class="top" >
		<header>
			<img class="banner" src="img/banner.png" /> 
		</header>
		<?php
			if(!loggedin()) {
				require 'php/loginform.inc.php';
			} else { 
				
                echo '<div class="loginform" >';
                
				if(admin($_SESSION['user_id'])) {
					echo '
					
					<a href="profile.php" ><input class="button" type="button" value="Administrator side"></a>
					
					';
				}
				
				echo '
				<a href="php/logout.inc.php" ><input class="button" type="button" value="Log ud"></a>
				</div>
				';
			}
		?>
		<aside id="aside" >
			<?php
				$query = "SELECT `date` FROM `logs` WHERE 1 ORDER BY `date` ASC";
				
				if($query_run = mysql_query($query)) {
					$query_num_rows = mysql_num_rows($query_run);
					
					for($index = 1; $index <= $query_num_rows; $index++) {
						$date = mysql_result($query_run, $index - 1, 'date');
						
						echo '
						<a href="logs.php?date='.$date.'" >Log: '.$date.'</a><br>
						';
					}
				}
			?>
			<div id="modal2">
                <div class="heading">
                    Tilføj log
                </div>

                <div class="content">
                    <p><?php include 'php/add_logs.inc.php'; ?></p>
                </div>
            </div>
            <a style="position:absolute; bottom:50px; left:80px" class="add2" id="" href="#" ><input type="button" value="Tilføj log" ></a>
			<a style="position:absolute; bottom:10px; left:74px" href="logs.php" ><input type="button" value="Se All Logs" ></a>
		</aside>
		<nav id="nav" >
			<ul style="position:absolute; top:12.5px; left:20px" >
                <li><a href="index.php" >Home</a></li>
                <li><a href="schedule.php" >Tidsplan</a></li>
				<li><a href="fysik.php" >Fysik</a></li>
				<li><a href="kemi.php" >Kemi</a></li>
				<li><a href="mat.php" >Matematik</a></li>
				<li><a href="his.php" >Ballonens Historie</a></li>
				<li><a href="tek.php" >Teknologi</a></li>
			</ul>
		</nav>
	</div>
</div>
