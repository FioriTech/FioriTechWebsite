<?php
$db="fiorit8b_webdb";
$con=mysqli_connect("localhost","fiorit8b","Welcome@12$",$db);
if(!$con){
	die("connection failed:".mysqli_connect_error());
}
?>