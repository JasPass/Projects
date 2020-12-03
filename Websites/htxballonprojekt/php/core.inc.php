<?php
ob_start();

$error = '';

if(!isset($_SESSION)) {
	session_start();
}

if(isset($_SERVER['SCRIPT_NAME'])) {
	$current_file = $_SERVER['SCRIPT_NAME'];
}
	
if(isset($_SERVER['HTTP_REFERER'])) {	
	$http_referer = $_SERVER['HTTP_REFERER'];
}

function getfield($field) {
	$query = "SELECT `$field` FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
	
	if($query_run = mysql_query($query)) {
		if($query_result = mysql_result($query_run, 0, $field)) {
			return $query_result;
		}
	}
}

function getfield_from_name($field,$f_name,$l_name) {
	$query = "SELECT `$field` FROM `users` WHERE `firstname`='".$f_name."' AND `lastname`='".$l_name."'";
	
	if($query_run = mysql_query($query)) {
		if($query_result = mysql_result($query_run, 0, $field)) {
			return $query_result;
		}
	}
}

function loggedin() {
	if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id'])) {
		return true;
	} else {
		return false;
	}
}

function admin($id) {
	$query = "SELECT `admin` FROM `users` WHERE `id`='".$id."'";
	
	if($query_run = mysql_query($query)) {
		if($query_result = mysql_result($query_run, 0, 'admin')) {
			if($query_result == 1) {
				return true;
			} else {
				return false;
			}
		}
	}
}

function autolink($string)
{
$endings_array = array('.com','.net','.dk','.tk');
$content_array = explode(" ", $string);
$output = '';

foreach($content_array as $content)
{
//starts with http://
if(substr($content, 0, 7) == "http://")
$content = '<a href="' . $content . '">' . $content . '</a>';

//starts with www.
if(substr($content, 0, 4) == "www.")
$content = '<a href="http://' . $content . '">' . $content . '</a>';

//ends with .something
foreach($endings_array as $ending)
{
if(substr($content, strlen($content) - strlen($ending), strlen($content)) == $ending)
$content = '<a href="http://www.' . $content . '">' . $content . '</a>';
}

$output .= " " . $content;
}

$output = trim($output);
return $output;
}

?>