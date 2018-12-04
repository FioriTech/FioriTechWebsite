<?php
include "connection.php";
if(isset($_POST['submit']))
{
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$resume=$_FILES['resume']['name'];
$tmp_name = $_FILES['resume']['tmp_name'];
$message=$_POST['message'];
$job_type=$_POST['job_type'];
$run_querry="INSERT INTO `job_application_form`(`first_name`, `last_name`, `email`, `phone_no`, `resume_url`, `message`, `job_type`) VALUES ('$first_name','$last_name','$email','$phoneno','$resume','$message','$job_type')";
$run=mysqli_query($con,$run_querry);
if($run>0)
{
	$location = "../resume_uploads/";
	move_uploaded_file($tmp_name, $location.$resume);
	header('location:../career.php');
}
}
?>