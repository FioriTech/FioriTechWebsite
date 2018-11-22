<!DOCTYPE html>
<html>
<head>
    <title>Fiori Technologies</title>
    <link href="../css_files/common.css" type="text/css" rel="stylesheet" />
    <link href="../css_files/contactus.css" type="text/css" rel="stylesheet" />
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
        <form>
            <input type="text" name="name" placeholder="Name *" required><br />
            <input type="text" name="phoneno" placeholder="Phone No. *" required><br />
            <input type="text" name="email" placeholder="Email *" required><br />
            <input type="text" name="company" placeholder="Company Name"><br />
            <input type="text" name="country" placeholder="Country"><br />
            <textarea rows="6" cols="50" name="message" placeholder="Message"></textarea><br />
            <input type="submit" name="submit" placeholder="Submit">
        </form>
    </div>
    <div class="contactdetail">
        <h1>Contact Details</h1>
        <div class="call">
            <img src="../images/kisspng-computer-icons-telephone-call-symbol-phone-vector-5ad050946903f3.3287647915236015564302.png" alt="icon">
            <p>+91-7210603373</p>
        </div>
        <div class="mail">
            <img src="../images/kisspng-email-computer-icons-maxcuttm-inc-email-vector-5adb312ae6e962.6943741815243144109458.png" alt="icon">
            <p>info@FioriTech.com</p>
        </div>
        <div class="address">
            <img src="../images/vector-free-download-png-3.png" alt="icon">
            <p>356, Aggarwal Metro Heights, Netaji Subash Place, Pitampura, Delhi-110034</p>
        </div>
    </div>
   
    <?php include 'common files/footer.php' ?>
</body>
</html>