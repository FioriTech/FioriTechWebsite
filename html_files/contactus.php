<!DOCTYPE html>
<html>
<head>
    <title>Fiori Technologies</title>
    <link href="../css_files/common.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico"/>
</head>

<body>
    <div class="image1">
        <div>
            <img src="../images/Fiori.png" height="90px" alt="FioriTech logo">
            <?php include 'common files/menu.php' ?>
        </div>
    </div>
    <div class="clear"></div>
    <div class="form">
        <form method="post" action="backend/contactdetail.php" target="_parent" class="form1">
            <input type="text" name="name" placeholder="Name *" required class="form2"><br />
            <input type="text" name="phoneno" placeholder="Phone No. *" required class="form2"><br />
            <input type="text" name="email" placeholder="Email *" required class="form2"><br />
            <input type="text" name="company" placeholder="Company Name" required class="form2"><br />
            <input type="text" name="country" placeholder="Country" required class="form2"><br />
            <textarea rows="6" cols="50" name="message" placeholder="Message" required class="form3"></textarea><br />
            <input type="submit" name="submit" placeholder="Submit" class="form4">
        </form>
    </div>
    <div class="contactdetail">
        <h1>Contact Details</h1>
		<div class="canada">
		<h3>Canada Office:</h3>
		 <div class="detail">
            <img src="../images/vector-free-download-png-3.png" alt="icon">
            <p class="address">2233 Argentia Road, Suites 302 & 302A, Mississauga, Ontario, L5N 2X7, Canada</p>
        </div>
		</div>
		
		<div class="canada">
		<h3>India Office:</h3>
        <div class="detail">
            <img src="../images/vector-free-download-png-3.png" alt="icon">
            <p class="address">356, Aggarwal Metro Heights, Netaji Subash Place, Pitampura, Delhi-110034</p>
        </div>
        <div class="detail">
            <img src="../images/kisspng-computer-icons-telephone-call-symbol-phone-vector-5ad050946903f3.3287647915236015564302.png" alt="icon">
            <p>+91-7210603373</p>
        </div>
		<div class="detail">
            <img src="../images/kisspng-email-computer-icons-maxcuttm-inc-email-vector-5adb312ae6e962.6943741815243144109458.png" alt="icon">
            <p>info@FioriTech.com</p>
        </div>
		</div>
    </div>
   
    <?php include 'common files/footer.php' ?>
</body>
</html>