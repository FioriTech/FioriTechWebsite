<!DOCTYPE html>
<html>
<head>
    <title>Fiori Technologies</title>
    <link href="../css_files/common.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
</head>

<body>
    <div class="image1">
        <div>
            <img src="../images/Fiori.png" height="90px" alt="FioriTech logo" class="logo">
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
		<div class="detailemail">
            <img src="../images/kisspng-email.png" alt="icon">
            <p>info@FioriTech.com</p>
        </div>
		
		
		 <div class="detail">
		 <h3>Canada Office:</h3>
            <img src="../images/vector-free-download-png-3.png" alt="icon">
            <p class="address">2233 Argentia Road, Suites 302 & 302A, Mississauga, Ontario, L5N 2X7, Canada.</p>
			<br>
			<div class="mapouter"><div class="gmap_canvas"><iframe width="404" height="163" id="gmap_canvas" src="https://maps.google.com/maps?q=2233%20Argentia%20Road%2C%20Suites%20302%20%26%20302A%2C%20Mississauga%2C%20Ontario%2C%20L5N%202X7%2C%20Canada&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">pure black</a></div>
			</div>
		</div>
		
		
        <div class="detail">
		<h3>India Office:</h3>
            <img src="../images/vector-free-download-png-3.png" alt="icon">
            <p class="address">356, Aggarwal Metro Heights, Netaji Subash Place, Pitampura, Delhi-110034.<br>
			Contact: +91-7210603373</p>
			<div class="mapouter"><div class="gmap_canvas"><iframe width="404" height="163" id="gmap_canvas" src="https://maps.google.com/maps?q=356%2C%20Aggarwal%20Metro%20Heights%2C%20Netaji%20Subash%20Place%2C%20Pitampura%2C%20Delhi-110034&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">pure black</a></div>
			</div>
        </div>
    </div>
   
    <?php include 'common files/footer.php' ?>
</body>
</html>