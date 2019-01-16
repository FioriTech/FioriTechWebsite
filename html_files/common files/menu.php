<?php 
    $root_url = "http://FioriTech.com/";
    $sub_folder = "html_files/";
?>

      <nav>
        <ul>
          <li><a id="home" href="<?php echo $root_url ?>index.php">Home</a></li>
          <li><a id="aboutus" href="<?php echo $root_url.$sub_folder ?>aboutus.php">About Us</a></li>
          <li class="sub-menu"><a id="services" href="#">Services</a>
            <ul>
              <li><a id="webdesigning" name="services" href="<?php echo $root_url.$sub_folder ?>webdesigning.php">Website Designing</a></li>
              <li><a id="roboticProcessAutomation" name="services" href="<?php echo $root_url.$sub_folder ?>RPA.php">Robotic Process Automation (RPA)</a></li>
              <li><a id="websitedevelopment" name="services" href="<?php echo $root_url.$sub_folder ?>websitedevelopment.php">Website Development</a></li>
              <li><a id="digitalmarketing" name="services" href="<?php echo $root_url.$sub_folder ?>digitalmarketing.php">Digital Marketing</a></li>
              <li><a id="infrastructureservice" name="services" href="<?php echo $root_url.$sub_folder ?>infrastructureservice.php">Infrastructure Services</a></li>
            </ul>
          </li>
          <li class="sub-menu"><a id="tech" href="#">Tech Solutions</a>
            <ul>
              <li>
                <a id="coreimpact" name="tech" href="<?php echo $root_url.$sub_folder ?>coreimpact.php">Core Impact</a>
              </li>
              <li>
                <a id="nessus" name="tech" href="<?php echo $root_url.$sub_folder ?>nessus.php">Nessus Professional</a>
              </li>
              <li>
                <a id="securitycenter" name="tech" href="<?php echo $root_url.$sub_folder ?>securitycenter.php">Security Center</a>
              </li>
              <li>
                <a id="acunetix" name="tech" href="<?php echo $root_url.$sub_folder ?>acunetix.php">Acunetix-WVS</a>
              </li>
			  <li>
                <a id="burpsuite" name="tech" href="<?php echo $root_url.$sub_folder ?>burpsuite.php">Burp Suite professional</a>
              </li>
			  <li>
                <a id="gfi" name="tech" href="<?php echo $root_url.$sub_folder ?>gfi.php">GfI LanGuard</a>
              </li>
			  <li>
                <a id="nipperstudio" name="tech" href="<?php echo $root_url.$sub_folder ?>nipperstudio.php">Nipper Studio</a>
              </li>
			  <li>
                <a id="antivirus" name="tech" href="<?php echo $root_url.$sub_folder ?>antivirus.php">Antivirus</a>
              </li>
			  <li>
                <a id="youform" name="tech" href="<?php echo $root_url.$sub_folder ?>youform.php">YouForm</a>
              </li>
			  <li>
                <a id="youguard" name="tech" href="<?php echo $root_url.$sub_folder ?>youguard.php">YouGuard</a>
              </li>
            </ul>
          </li>
          <li><a id="client" href="<?php echo $root_url.$sub_folder ?>clients.php">Clients</a></li>
		  <li><a id="career" href="<?php echo $root_url.$sub_folder ?>career.php">Career</a></li>
		  <li><a id="contactus" href="<?php echo $root_url.$sub_folder ?>contactus.php">Contact Us</a></li>

        </ul>
      </nav>
      <div class="menu-toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
    


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(
        function() {
          $('.menu-toggle').click(function() {
            $('nav').toggleClass('active');
          })

          $('ul li').click(function() {
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
          })
        }
      )

    </script>


<script type="application/javascript">
    var url = window.location.href.replace(/\/$/, '');
    var parts = url.split('/').pop(); 
    var lastSegment = parts.split(".")[0];
	if(lastSegment === 'clients'){
		lastSegment = 'client';
	}
  if(lastSegment === 'RPA'){
    lastSegment = 'roboticProcessAutomation';
  }
	if(lastSegment === 'fioritech' || lastSegment === 'index'){
		lastSegment = 'home';
	}
    document.getElementById(lastSegment).classList.add("active1");
    
    if(document.getElementById(lastSegment).getAttribute("name") == "services")
         document.getElementById("services").classList.add("active1");
    else if(document.getElementById(lastSegment).getAttribute("name") == "tech")
         document.getElementById("tech").classList.add("active1");
        
</script>

