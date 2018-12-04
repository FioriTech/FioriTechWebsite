<?php 
    $root_url = "http://FioriTech.com/";
    $sub_folder = "html_files/";
?>

<div class="firstulist">
    <a id="home" href="<?php echo $root_url ?>index.php" class="dropbtn">Home</a>
    <a id="aboutus" href="<?php echo $root_url.$sub_folder ?>aboutus.php" class="dropbtn">About Us</a>
    <div class="dropdown">
        <button id="services" class="dropbtn">Services</button>
        <div class="dropdown-content">
            <a id="webdesigning" name="services" href="<?php echo $root_url.$sub_folder ?>webdesigning.php">Website Designing</a>
            <a id="websitedevelopment" name="services" href="<?php echo $root_url.$sub_folder ?>websitedevelopment.php">Website Development</a>
            <a id="digitalmarketing" name="services" href="<?php echo $root_url.$sub_folder ?>digitalmarketing.php">Digital Marketing</a>
            <a id="infrastructureservice" name="services" href="<?php echo $root_url.$sub_folder ?>infrastructureservice.php">Infrastructure Services</a>
        </div>
    </div>
    <div class="dropdown">
        <button id="tech" class="dropbtn">Tech Solutions</button>
        <div class="dropdown-content">
            <a id="coreimpact" name="tech" href="<?php echo $root_url.$sub_folder ?>coreimpact.php">Core Impact</a>
            <a id="nessus" name="tech" href="<?php echo $root_url.$sub_folder ?>nessus.php">Nessus Professional</a>
            <a id="securitycenter" name="tech" href="<?php echo $root_url.$sub_folder ?>securitycenter.php">Security Center</a>
            <a id="acunetix" name="tech" href="<?php echo $root_url.$sub_folder ?>acunetix.php">Acunetix-WVS</a>
            <a id="burpsuite" name="tech" href="<?php echo $root_url.$sub_folder ?>burpsuite.php">Burp Suite professional</a>
            <a id="gfi" name="tech" href="<?php echo $root_url.$sub_folder ?>gfi.php">GfI LanGuard</a>
            <a id="nipperstudio" name="tech" href="<?php echo $root_url.$sub_folder ?>nipperstudio.php">Nipper Studio</a>
            <a id="antivirus" name="tech" href="<?php echo $root_url.$sub_folder ?>antivirus.php">Antivirus</a>
            <a id="youform" name="tech" href="<?php echo $root_url.$sub_folder ?>youform.php">YouForm</a>
            <a id="youguard" name="tech" href="<?php echo $root_url.$sub_folder ?>youguard.php">YouGuard</a>
        </div>
    </div>
	<a id="client" href="<?php echo $root_url.$sub_folder ?>clients.php" class="dropbtn">Clients</a>
    <a id="career" href="<?php echo $root_url.$sub_folder ?>career.php" class="dropbtn">Career</a>
    <a id="contactus" href="<?php echo $root_url.$sub_folder ?>contactus.php" class="dropbtn">Contact Us</a>
</div>

<script type="application/javascript">
    var url = window.location.href.replace(/\/$/, '');
    var parts = url.split('/').pop(); 
    var lastSegment = parts.split(".")[0];
	if(lastSegment === 'fioritech' || lastSegment === 'clients'){
		lastSegment = 'client';
	}
	if(lastSegment === 'fioritech' || lastSegment === 'index'){
		lastSegment = 'home';
	}
    document.getElementById(lastSegment).classList.add("active");
    
    if(document.getElementById(lastSegment).getAttribute("name") == "services")
         document.getElementById("services").classList.add("active");
    else if(document.getElementById(lastSegment).getAttribute("name") == "tech")
         document.getElementById("tech").classList.add("active");
        
</script>
