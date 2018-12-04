<?php
include "connection.php";
$run_query="SELECT * FROM career";
$run=mysqli_query($con,$run_query);
if(mysqli_num_rows($run)>0)
	{
		while($row=mysqli_fetch_array($run))
		{
			$job_type=$row['job_type'];
			$location=$row['location'];
			$job_code=$row['job_code'];
			$experience=$row['experience'];
			$openings=$row['openings'];
			$requirement=$row['requirement'];
			echo"
			<table class='table1'>
		<tr class='tr1'><td class='td1'>$job_type</td></tr>
		<tr class='tr1'><td class='td2'>Location: $location</td></tr>
		<tr class='tr1'><td class='td2'>Job Code: $job_code</td></tr>
		<tr class='tr1'><td class='td2'>Years of experience: $experience</td></tr>
		<tr class='tr1'><td class='td2'>No. of Openings: $openings</td></tr>

		<tr class='tr1'><td class='td2'>Requirements:</td></tr>
		<tr class='tr1'><td class='td2'>$requirement</td></tr>
		<tr><td class='td2'><a href='job_application_form.php?job_type=$job_type&job_code=$job_code'>Apply</a></td></tr>
		</table>
			";
	    }
	}	
?>