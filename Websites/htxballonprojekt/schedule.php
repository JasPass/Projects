<?php
	require 'php/core.inc.php';
	require 'php/connect.inc.php';
    ?>
<!Doctype html>

<html>
<head>
<meta charset="windows-1252"/>
<link type="text/css" rel="stylesheet" href="css/main.css">
<link type="text/css" rel="stylesheet" href="css/styles.css">
<link rel="shortcut icon" href="http://icons.iconarchive.com/icons/mixthepix/jules-verne/32/Hot-Air-Balloon-icon.png">
<title>BPM - Keep Organized</title>
</head>
<body>
<?php require 'php/top_of_site.inc.php'; ?>
<div class="frame" >
	<section>
		<div id="modal1">
			<div class="heading">
				Tilføj Dag til Tidsplan
			</div>

			<div class="content">
				<p><?php include 'php/save_schedule.inc.php'; ?></p>
			</div>
		</div>
		<div class="text" >
		<?php 
			$query = "SELECT `text`, `date`, `done`, `title`, `id` FROM `schedule` WHERE 1 ORDER BY `date` ASC";
				
			if($query_run = mysql_query($query)) {
				$query_num_rows = mysql_num_rows($query_run);
				
				for($index = 1; $index <= $query_num_rows; $index++) {
				
					if(mysql_result($query_run, $index - 1, 'text') && mysql_result($query_run, $index - 1, 'date')) {
						$text = mysql_result($query_run, $index - 1, 'text');
                        $title = mysql_result($query_run, $index - 1, 'title');
                        $done = mysql_result($query_run, $index - 1, 'done');
						$date = mysql_result($query_run, $index - 1, 'date');
						$id = mysql_result($query_run, $index - 1, 'id');
						$check = '';
                        
                        if($done == 1) {
                            $check = 'checked';
                        }
                        
						echo '
						<form class="out" id="'.$id.'" action="'.$current_file.'" method="POST" >
                        <input type="text" name="newtitle" value="'.$title.'" class="'.$id.'" disabled >
                        <input type="date" name="newdate" value="'.$date.'" class="'.$id.'" disabled >
                        <input type="checkbox" '.$check.' name="newdone" value="checked" class="'.$id.'" disabled >
                        <input class="click" id="'.$id.'" type="button" value="Rediger" >
						<input name="save'.$id.'" id="save'.$id.'" type="submit" value="Gem" style="display:none" >
						<input name="delete'.$id.'" id="delete'.$id.'" type="submit" value="Slet" style="display:none">
						<br><br>
						<textarea style="height:0px; opacity:0; width:345px" name="newtext" id="text'.$id.'" >'.$text.'</textarea>
						<br><br>
						</form>
						';
					}
				}
			}
		?>
		<a id="add1" href="#" ><input type="button" value="Tilføj Dag" ></a>
		</div>
	</section>
	<footer>
		<p>Made by: Christian, Jesper og Rasmus 1.6 RTG</p>
	</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script src="js/jquery.reveal.js" ></script>
<script src="js/logs.js"></script>
<script src="js/schedule.js"></script>
</body>
</html>
