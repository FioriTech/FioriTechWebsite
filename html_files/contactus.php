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
    </div>
    <div class="clear"></div>
	<div class="contactall">
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
		<div class="detail">
            <img src="../images/kisspng-email.png" alt="icon">
            <p>info@FioriTech.com</p>
        </div>
			
		 <div class="detail">
		 <h3>Canada Office:</h3>
		 <a href="https://www.google.com/maps/place/Regus+-+Ontario,+Mississauga+-+Argentia+Road/@43.5977054,-79.7478247,17z/data=!3m1!4b1!4m5!3m4!1s0x882b6a874d5777ab:0x96e40d4d200f4b9b!8m2!3d43.5977015!4d-79.745636" target="_blank">
            <img src="../images/vector-free-download-png-3.png" alt="icon">
            <p>2233 Argentia Road, Suites 302 & 302A, Mississauga, Ontario, L5N 2X7, Canada.</p></a>
		</div>
		
        <div class="detail">
		<h3>India Office:</h3>
		<a href="https://www.google.com/maps/place/Aggarwal+Metro+Heights+Bajaj+Office/@28.6930704,77.1470674,17z/data=!3m1!4b1!4m5!3m4!1s0x390d023339de0cb5:0xe5be4310e315c1c7!8m2!3d28.6930657!4d77.1492561" target="_blank">
            <img src="../images/vector-free-download-png-3.png" alt="icon">
            <p>356, Aggarwal Metro Heights, Netaji Subash Place, Pitampura, Delhi-110034.<br>
			Contact: +91-7210603373</p></a>
        </div>
    </div>
	</div>
   
    <?php include 'common files/footer.php' ?>
</body>
</html>