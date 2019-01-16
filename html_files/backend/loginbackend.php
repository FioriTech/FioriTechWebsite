<?php
include "connection.php";
if(isset($_POST['register'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $run_querry="INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
  $run=mysqli_query($con,$run_querry);
	if($run>0)
	{
		header("location:../../index.php");
	}
}

if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $run_querry="SELECT username, password FROM users WHERE username = '".$username."' AND  password = '".$password."'";
  $run=mysqli_query($con,$run_querry);
	if(mysqli_num_rows($run))
	{
		header("location:../../index.php");
	}
	else{
		header("location:../../index.php");
		echo 'record does not exist';
	}
}
?>
