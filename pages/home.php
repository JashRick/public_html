<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MABISA | Home</title>
	<link rel="icon" href="../images/logo2.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
</head>
<body>

<?php include('../layout/header.php'); ?>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollTopBtn").style.display = "block";
  } else {
    document.getElementById("scrollTopBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>

<div class="bg1" role="main">

 <div class="tbox">
    <h3>Welcome to</h3>
    <h1>MABISA: Patients Electronic Management Record<br>System With Quick Response Code<br>For Mercado Dental Clinic</h1>
   
   
  
   <button class="btn_dentist scroll" aria-label="Scroll to Dentist section" tabindex="0"><a href="#dentist-section">Dentist</a></button>
<button class="btn_patient scroll" aria-label="Scroll to Patient section" tabindex="0"><a href="#patient-section">Patient</a></button>

  </div>
</div>
<div class="bg2">
<section id="dentist-section">
  <div class="h1title" role="heading" title="Dentist Administration"><h2>Dentist Administration</h2></div>  
  <div class="container">
    <div class="wrapper">
      <div class="title" role="heading"><span>Admin Log In</span></div>
      <form method="post" action="../api/utils/login.php">
        <div class="row">
          <i class="fas fa-user" role="none"></i>
          <input type="text" placeholder="Username" name="admin_username" required aria-label="Username" aria-required="true" minlength="3" maxlength="20" pattern="[a-zA-Z0-9]+">
          
        </div>
       
        
   <div class="row">
  <i class="fas fa-lock" role="none"></i>
  <input type="password" placeholder="Password" name="admin_password" required aria-label="Password" aria-required="true" id="password-input">
  <i class="fas fa-eye-slash" id="toggle-password" aria-hidden="true"></i>
</div>

<script>
  const passwordInput = document.getElementById("password-input");
  const togglePassword = document.getElementById("toggle-password");

  togglePassword.addEventListener("click", function() {
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      togglePassword.classList.remove("fa-eye-slash");
      togglePassword.classList.add("fa-eye");
    } else {
      passwordInput.type = "password";
      togglePassword.classList.remove("fa-eye");
      togglePassword.classList.add("fa-eye-slash");
    }
  });
</script>


        
        <div class="pass"><a href="admin_forgot_pass.php">Forgot password?</a></div>
        <div class="row button">
          <input class="login" type="submit" value="Log In" aria-label="Log In">
        </div>
      </form>
    </div>
  </div>
</section>
</div>

<div class="bg3"> 
<section id="patient-section"> 
<div class="h1title" role="heading" title="Patient Information"><h2 >Patient Information</h2></div>  
<div class="containerp">
<div class="wrapperp" id="wrapperp">
		  <div class="title" role="heading"><span>Patient Registration</span></div>
          <form action="../api/patient-registration.php" method="GET">
            <div class="main-user-info">
              <!-- <div class="user-input-box">
                <label for="patient_id">Patient Id</label>
                <input type="text"id="patient_id" name="patient_id" placeholder="Patient Id: Auto Generated"/>
              </div> -->
              <div class="user-input-box">
                <label for="patient_id">Patient Id</label>
                <input class="user-input-disabled" type="text"id="patient_id" name="patient_id" placeholder="Patient Id: Auto Generated" disabled aria-required="true"/>
              </div>
              <div class="user-input-box">
                <label for="fullName">Name</label>
                <input type="text" class="fullName" name="last_name" placeholder="Last Name" aria-label="Last Name" required aria-required="true" style="width: 30%;"/>
                <input type="text"class="fullName" name="first_name" placeholder="First Name" aria-label="First Name" required aria-required="true" style="width: 30%;"/>
                <input type="text" class="fullName" name="MI" placeholder="M.I." aria-label="Middle Initial" required aria-required="true" style="width: 30%;"/>
              </div>
              <div class="user-input-box">
                <label for="age">Age</label>
                <input type="number"id="age" name="age" placeholder="Enter Age" value="" min="1" max="100" required aria-required="true"/>
              </div>
              <div class="user-input-box">
                <label for="birthday">Birthday</label>
                <input type="date"id="birthday" name="birthday" placeholder="Select Birthday" required aria-required="true"/>
              </div>
              <div class="user-input-box">
                <label for="gender">Gender</label>
                <select class="gender" aria-label="Select Gender">
                    <option value="" style="color: grey;">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
               

<?php
if (isset($_GET["status"]) && isset($_GET["message"]) && isset($_GET["patient_id"])) {

	$status = $_GET["status"];
	$message = $_GET["message"];
  $patient_id = $_GET["patient_id"];

	echo '<script type="text/javascript">';
	echo 'Swal.fire("Patient", "'.$message.'", "'.$status.'").then((result) => {
    if (result.isConfirmed) {
      location.replace("patient_qr_code.php?patient_id='.$patient_id.'");
    }
  }); '; 
	echo '</script>';

  // echo '<script type="text/javascript">';
	// echo 'Swal.fire({
  //   title: "Patient",
  //   text: "'.$message.'",
  //   type: "'.$status.'",
  // }, function() {
  //   alert("test");
  // }); '; 
	// echo '</script>';
}
?>

<style>
  .user-input-disabled {
    background-color: #dad7d7;
  }
</style>
              </div>
              <div class="user-input-box">
                <label for="address">Address</label>
                <input type="text"id="address" name="address" placeholder="Enter Address" required aria-required="true"/>
              </div>
              <div class="user-input-box">
                <label for="occupation">Occupation</label>
                <input type="text"id="occupation" name="occupation" placeholder="Enter Occupation" required aria-required="true"/>
              </div>
              <div class="user-input-box">
                <label for="contact">Contact No.</label>
                <input type="tel" id="contact" name="contact" placeholder="Enter Contact Number"   required aria-required="true"/>
              </div>
              <div class="user-input-box">
                <label for="weight">Weight (kilogram)</label>
                <input type="number"id="weight" name="weight" placeholder="Enter Weight" required aria-required="true"/>
              </div>
              <div class="user-input-box">
                <label for="height">Height (centimeter)</label>
                <input type="number"id="height" name="height" placeholder="Enter Height" required aria-required="true"/>
              </div>
              <div class="user-input-box">
                <label for="guardian">Guardian/Assistant (Optional)</label>
                <input  type="text" id="guardian" name="guardian" placeholder="Guardian/Assitant" aria-required="true"/>
              </div>


            </div>
           
            <div class="form-submit-btn">
              <input type="submit" value="Register">
            </div>
          </form>
		</div>
	  </div>
   </div>
  </div>
</section>
</div>
 <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#" aria-label="Link to Facebook" role="button"><i class="fab fa-facebook"></i></a>
                <a href="#" aria-label="Link to Email" role="button"><i class="fas fa-envelope"></i></a>
                <a href="#" aria-label="Link to Phone Number" role="button"><i class="fas fa-phone-alt"></i></i></a>
                <a href="#" aria-label="Link to Location" role="button"><i class="fas fa-map-marker-alt"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" aria-label="Link to Services" role="button">Services</a></li>
                <li class="list-inline-item"><a href="#" aria-label="Link to About" role="button">About </a></li>
                <li class="list-inline-item"><a href="#" aria-label="Link to Contact" role="button">Contact</a></li>
                <li class="list-inline-item"><a href="#" aria-label="Link to Our Team" role="button">Our Team</a></li>
                <li class="list-inline-item"><a href="#" aria-label="Link to Privacy" role="button">Privacy Policy</a></li>
            </ul>
            <p class="copyright">MABISA: Patients Electronic Management RecordSystem With Quick Response Code For Mercado Dental Clinic © 2023</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</body>

<script>
  // Get all elements with class "scroll"
  var scrollElements = document.getElementsByClassName("scroll");

  // Add click event listener to each scroll element
  for (var i = 0; i < scrollElements.length; i++) {
    scrollElements[i].addEventListener("click", function(e) {
      e.preventDefault(); // Prevent default behavior of clicking a link
      var targetId = this.getElementsByTagName("a")[0].getAttribute("href"); // Get target section ID
      var targetSection = document.querySelector(targetId); // Get target section element
      var targetOffset = targetSection.offsetTop; // Get target section offset from top of page
      var duration = 500; // Animation duration in milliseconds
      var targetPosition = targetOffset - 50; // Subtract header height from target offset
      var startPosition = window.pageYOffset; // Get current scroll position
      var distance = targetPosition - startPosition; // Calculate distance to scroll
      var startTime = null; // Initialize start time

      // Animate scroll function
      function animateScroll(currentTime) {
        if (startTime === null) startTime = currentTime;
        var timeElapsed = currentTime - startTime;
        var scrollAmount = easeInOutQuad(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, scrollAmount);
        if (timeElapsed < duration) requestAnimationFrame(animateScroll);
      }

      // Easing function
      function easeInOutQuad(t, b, c, d) {
        t /= d/2;
        if (t < 1) return c/2*t*t + b;
        t--;
        return -c/2 * (t*(t-2) - 1) + b;
      }

      // Call animateScroll function
      requestAnimationFrame(animateScroll);
    });
  }
</script>

<button onclick="topFunction()" id="scrollTopBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>

<script>
  // Get the button
  var scrollTopBtn = document.getElementById("scrollTopBtn");

  // Show/hide button based on scroll position
  window.onscroll = function() {scrollFunction()};

 // Smooth scroll to section when clicking on button
function scrollFunction(target) {
  var targetSection = document.querySelector(target);
  if (targetSection) {
    window.scrollTo({
      top: targetSection.offsetTop,
      behavior: 'smooth'
    });
  }
}

// Show or hide the "scroll to top" button based on the current scroll position
function topFunction() {
  var scrollTopButton = document.getElementById("scroll-top-button");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollTopButton.style.display = "block";
  } else {
    scrollTopButton.style.display = "none";
  }
}

// Add event listeners for scrolling and clicking the "scroll to top" button
window.addEventListener("scroll", function() {
  topFunction();
});

var scrollTopButton = document.getElementById("scroll-top-button");
if (scrollTopButton) {
  scrollTopButton.addEventListener("click", function() {
    scrollFunction("body");
  });
}

var scrollButtons = document.querySelectorAll(".scroll");
for (var i = 0; i < scrollButtons.length; i++) {
  scrollButtons[i].addEventListener("click", function(event) {
    event.preventDefault();
    var target = this.getAttribute("href");
    scrollFunction(target);
  });
}

    </html>