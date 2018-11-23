<?php
include "connection.php";
if(isset($_POST['submit']))
{
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$employment_status=$_POST['employement_status'];
$resume=$_POST['resume'];
$reference=$_POST['reference'];
$ref_first_name=$_POST['ref_fname'];
$ref_last_name=$_POST['ref_lname'];
$ref_email=$_POST['ref_email'];
$job_type=$_POST['job_type'];
$run_querry="INSERT INTO `job_application_form`(`first_name`, `last_name`, `email`, `phone_no`, `employment_status`, `resume_url`, `reference`, `ref_first_name`, `ref_last_name`, `ref_email`, `job_type`) VALUES ('$first_name','$last_name','$email','$phoneno','$employment_status','$resume','$reference','$ref_first_name','$ref_last_name','$ref_email','$job_type')";
$run=mysqli_query($con,$run_querry);
if($run>0)
{
	header("location:../job_application_form.php");
}
}
?>