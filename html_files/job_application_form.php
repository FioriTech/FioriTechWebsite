<!DOCTYPE html>
<html>

<head>
    <title>Fiori Technologies</title>
    <link href="../css_files/common.css" type="text/css" rel="stylesheet" />
    <link href="../css_files/job_application_form.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
</head>

<body>
    <div class="image">
        <div>
            <img src="../images/Fiori.png" height="90px" alt="FioriTech logo">
            <?php include 'common files/menu.php' ?>
        </div>
    </div>
    <div class="clear"></div>
    <div class="form">
        <h1>Job Application Form</h1>
        <hr>
        <p>Thank you for your interest. Please check below for available job opportunities that meet your criteria and send your application by filling out the Job Application Form.</p>
        <br>
        <br>
        <form>
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
            <label>What is your current employment status?*</label><br><br><input type="radio" name="employed" id="radio">Employed
            <input type="radio" name="selfemployed" id="radio1">Self-Employed
            <br><br><input type="radio" name="unemployed" id="radio2">Unemployed
            <input type="radio" name="student" id="radio3">Student
            <br>
            <br>
            <label>Submit your resume by providing your resume URL:*</label>
            <br>
            <input type="text" name="resume" required class="email">
            <br>
            <br>
            <label>Would you like to list references?</label>
            <br>
            <br>
            <input type="radio" name="yes">Yes
            <br>
            <br>
            <input type="radio" name="no" id="no">No
            <br>
            <br>
            <label>Name*</label><br><input type="text" name="rfname" placeholder="First" required class="name">
            <input type="text" name="rlname" placeholder="Last" required class="name">
            <br>
            <br>
            <label>Email*</label><br><input type="text" name="remail" placeholder="xyz@mail.com" required class="email">
            <br>
            <br>
            <br>
            <input type="submit" name="submit" class="submit" placeholder="Submit">
        </form>
    </div>

    
    <?php include 'common files/footer.php' ?>
</body>

</html>
