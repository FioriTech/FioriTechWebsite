<!DOCTYPE html>
<html>

<head>
    <title>Fiori Technologies</title>
    <link href="../css_files/common.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="image1">
        <header>
      <img src="../images/Fiori.png" alt="FioriTech Logo" height="90px" class="logo">
	  <?php include 'common files/menu.php' ?>
	  </header>
	  <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="job_form">
        <h1>Job Application Form</h1>
        <hr>
		<?php 
			$job_type=$_GET['job_type']; 
			$job_code=$_GET['job_code'];
			?>
		<p>Job Code: <?php echo $job_code ?> </p>
		<p>Job Title: <?php echo $job_type ?> </p>
        <p>Thank you for your interest. Send your application by filling out the Job Application Form.</p>
        <br>
        <br>
        <form action="backend/job_form.php" target="_parent" method="post" enctype="multipart/form-data">
            <label>Name*</label><br><input type="text" name="fname" placeholder="First" required class="name">
            <input type="text" name="lname" placeholder="Last" required class="name">
            <br>
            <br>
            <label>Email*</label><br><input type="text" name="email" placeholder="xyz@mail.com" required class="email">
            <br>
            <br>
            <label>Phone Number*</label><br><input type="text" name="phoneno" placeholder="Phone No." required class="email">
            <br>
            <br>
            <label>Submit your resume by providing your resume:</label>
            <br>
			<br>
            <input type="file" name="resume">
            <br>
            <br>
			<textarea name="message" placeholder="Message.." rows="10" class="textarea1" style="font-size:17px;"></textarea>
			<br>
            <br>
			<input type="hidden" value="<?php echo "$job_type"; ?>" name="job_type" />
            <input type="submit" name="submit" class="submit" placeholder="Submit">
        </form>
		<br>
    </div>

    
    <?php include 'common files/footer.php' ?>
</body>

</html>
