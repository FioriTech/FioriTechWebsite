<?php
$db="fiori8b_webdb";
$con=mysqli_connect("localhost","fiori8b_admin","Welcome@1",$db);
if(!$con){
	die("connection failed:".mysqli_connect_error());
}

?>