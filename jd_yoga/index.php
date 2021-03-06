<?php
$msg = '';
if ($_POST["submit"]) {
    $echo"here"
    $sender = $_POST['Name'];
    $senderEmail = $_POST['Email'];
    $description = $_POST['Message'];
    $msgBody = "Name: ".$sender."\nEmail: ".$senderEmail."\n\nDescription: ".$description;

    //require 'php/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->setFrom($senderEmail, $sender);
    $mail->addAddress('davo_33@hotmail.com', 'Dave');
    $mail->Subject = 'New message from website';
    $mail->msgHTML(nl2br($msgBody));

    if (!$mail->send()) {
        $msg .= "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $msg .= "Message Sent!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<title>jd_yoga</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" style="padding:10px">
    <div style="display:block; float:left; margin-left:40px;"><img src="w3images/logo.jpg" height="60px" alt="logo image" ></div>  
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <div style="margin:auto; width:60%;"><a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="width:25%">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="width:25%">YOGA TEACHING TRAINING</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="width:25%">CURRICULUM</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="width:25%">YOGA TEACHERS</a>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right" style="text-decoration:none">CONTACT US</a>
    	
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">YOGA TEACHING TRAINING</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CURRICULUM</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">YOGA TEACHERS</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center w3-animate-fading">
    <img src="w3images/img1.jpg" style="width:100%">
    <div class="w3-display-left w3-container w3-text-white w3-padding-64 w3-hide-small w3-xlarge" style="width:50%; padding:50px">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      </p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center w3-animate-fading">
    <img src="w3images/img2.jpg" style="width:100%">
    <div class="w3-display-left w3-container w3-text-white w3-padding-64 w3-hide-small w3-xlarge" style="width:50%; padding:50px">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      </p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center w3-animate-fading">
    <img src="w3images/img3.jpg" style="width:100%">
    <div class="w3-display-left w3-container w3-text-white w3-padding-64 w3-hide-small w3-xlarge" style="width:50%; padding:50px">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      </p>  
    </div>
  </div>
  
    <!-- The About Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">ABOUT</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <img src="w3images/img4.jpg" class="w3-margin-bottom" alt="Random Name" style="width:100%">
      </div>
      <div class="w3-rest w3-container">
<p class="w3-justify">Yoga Pathshala is your home nestled amongst the foothills of the Himalayas in the Kathmandu Valley, Nepal. It is a place of learning, growth and connection as you gain a deeper understanding of yourself through ancient practice of Hatha Yoga and meditation. At Yoga Pathshala, we will equip you with the knowledge, experience and inspiration to take with you off the mat and into your life as you continue your yoga journey.</p> 
<p class="w3-justify"><a href="about/index.html" style="text-decoration:none"class="w3-hover"><b>Read more…</b><a></p>
      </div>
    </div>
  </div>

  <!-- The Courses Section -->
  <div style="background-color: #eeeeee" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <div class="w3-center"><img src="w3images/logo_notext.jpg" alt="New York" style="width:10%;"></div>
      <div class="w3-row">
	<div class="w3-third w3-opacity w3-hide-small" style="border-bottom-style:solid; border-width:1px; height:30px"> </div>
        <div class="w3-third"><p class="w3-center w3-opacity w3-wide">OUR YOGA COURSES</p></div>
	<div class="w3-third w3-opacity w3-hide-small" style="border-bottom-style:solid; border-width:1px; height:30px"> </div>
      </div>
      <h2 class="w3-center">30 DAYS 200 HOURS TEACHER TRAINING</h2>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-quarter w3-margin-bottom" style="padding-right:0px">
          <img src="w3images/img2.jpg" alt="New York" style="width:100%; height:300px;" class="w3-hover-opacity">
        </div>
        <div class="w3-quarter w3-margin-bottom" style="padding-left:0px">
          <div class="w3-white w3-container" style="height:300px;">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
        </div>
	
	<div class="w3-quarter w3-margin-bottom" style="padding-right:0px">
          <img src="w3images/img3.jpg" alt="New York" style="width:100%; height:300px;" class="w3-hover-opacity">
        </div>
        <div class="w3-quarter w3-margin-bottom" style="padding-left:0px">
          <div class="w3-white w3-container" style="height:300px;">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- The Events Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide w3-center">EVENTS</h2>
	<br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="w3images/img1.jpg" alt="New York" style="width:100%">
          <div class="w3-container w3-gray">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Book place</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="w3images/img2.jpg" alt="Paris" style="width:100%">
          <div class="w3-container w3-gray">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Book place</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="w3images/img3.jpg" alt="San Francisco" style="width:100%">
          <div class="w3-container w3-gray">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Book place</button>
          </div>
        </div>
      </div>


    </div>
  </div>

  <!-- The Teachers Section -->
  <div style="background-color: #eeeeee" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">TEACHERS</h2>
      <br>

    <div class="w3-row w3-padding-32">
      <div class="w3-third w3-display-container w3-container w3-tooltip w3-hover-greyscale">
        <img src="w3images/teacher1.jpg" class="w3-margin-bottom" alt="Random Name" style="width:100%">
	<div class="w3-display-middle w3-text w3-padding-64" style="color:white; width:80%;">Rajan Bastola has more than 20 years experience in the practice of Yoga. He was inspired by the Panini tradition of Yoga and Taoism. In the pursuit of this knowledge, he travelled the Himalayas and the Indian continent...<br> <a href="teachers/index.html" style="text-decoration: none"><b>Read more</b></a></div>
      </div>
      <div class="w3-third w3-display-container w3-container w3-tooltip w3-hover-greyscale">
        <img src="w3images/teacher1.jpg" class="w3-margin-bottom" alt="Random Name" style="width:100%">
	<div class="w3-display-middle w3-text w3-padding-64" style="color:white; width:80%;">Rajan Bastola has more than 20 years experience in the practice of Yoga. He was inspired by the Panini tradition of Yoga and Taoism. In the pursuit of this knowledge, he travelled the Himalayas and the Indian continent...<br> <a href="teachers/index.html" style="text-decoration: none"><b>Read more</b></a></div>
      </div>
      <div class="w3-third w3-display-container w3-container w3-tooltip w3-hover-greyscale">
        <img src="w3images/teacher1.jpg" class="w3-margin-bottom" alt="Random Name" style="width:100%">
	<div class="w3-display-middle w3-text w3-padding-64" style="color:white; width:80%;">Rajan Bastola has more than 20 years experience in the practice of Yoga. He was inspired by the Panini tradition of Yoga and Taoism. In the pursuit of this knowledge, he travelled the Himalayas and the Indian continent...<br> <a href="teachers/index.html" style="text-decoration: none"><b>Read more</b></a></div>
      </div>
	</div>
    </div>
  </div>

  <!-- The Food & Accomodation Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="band">
	<div class="w3-row w3-container">
		<div class="w3-half w3-container">
			<h2 class="w3-wide w3-center">FOOD & ACCOMODATION</h2>
			<p class="w3-left">Throughout your stay at Yoga Pathshala the wonderful Niru and team will look after your wellbeing with three nourishing, delicious local meals each day.</p>
			<p class="w3-left">
During your stay at Yoga Pathshala you can expect a clean and comfortable environment to help you settle in and make the most of your time with us. 
</p>
			 <p class="w3-left"><a href="food/index.html" style="text-decoration:none;"><b>Read more... </b></a></p>
		</div>
		<div class="w3-half w3-container">
		        <img src="w3images/img7.jpg" alt="Random Name" style="width:100%">
		</div>
	</div>
  </div>

  <!-- The Gallery Section -->
  <div style="background-color: #eeeeee" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">GALLERY</h2>
    <div class="w3-row w3-padding-32" style="padding-bottom:0px !important">
      <div class="w3-quarter">
        <img src="w3images/img4.jpg" alt="Random Name" style="width:100%">
      </div>
      <div class="w3-quarter">
        <img src="w3images/img5.jpg" alt="Random Name" style="width:100%">
      </div>
      <div class="w3-quarter">
        <img src="w3images/img4.jpg" alt="Random Name" style="width:100%">
      </div>
      <div class="w3-quarter">
        <img src="w3images/img5.jpg" alt="Random Name" style="width:100%">
      </div>
	</div>
    <div class="w3-row w3-padding-32" style="padding-top:0px !important">
      <div class="w3-quarter">
        <img src="w3images/img5.jpg" alt="Random Name" style="width:100%">
      </div>
      <div class="w3-quarter">
        <img src="w3images/img4.jpg" alt="Random Name" style="width:100%">
      </div>
      <div class="w3-quarter">
        <img src="w3images/img4.jpg" alt="Random Name" style="width:100%">
      </div>
      <div class="w3-quarter">
        <img src="w3images/img5.jpg" alt="Random Name" style="width:100%">
      </div>
	</div>
    </div>
  </div>


  <!-- The Reviews Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">REVIEWS</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
	<?php if (empty($msg)) { ?>

        <form action="post" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit" value="submit">SEND</button>
        </form>
	<?php } else {
	    echo $msg;
	} ?>

      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 10000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
