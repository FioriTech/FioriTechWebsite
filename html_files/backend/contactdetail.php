<?php
include "connection.php";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$company=$_POST['company'];
$country=$_POST['country'];
$message=$_POST['message'];
$run_querry="INSERT INTO `contactus`(`name`, `phone_no`, `email`, `company_name`, `country`, `message`) VALUES ('$name','$phoneno','$email','$company','$country','$message')";
$run=mysqli_query($con,$run_querry);
if($run>0)
{
	header("location:../contactus.php");
}
}
?>