<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MABISA | Home</title>
	<link rel="icon" href="../images/logo2.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<?php include('../layout/header.php'); ?>

<div class="bg1">

 <div class="tbox">
    <h3>Welcome to</h3>
    <h1>MABISA: Patients Electronic Management Record<br>System With Quick Response Code<br>For Mercado Dental Clinic</h1>
   
   
   <button class="btn_dentist"><a href="#section2"a>Dentist</button>  <button class="btn_patient"><a href="#section3"a>Patient</button>
	</div>
</div>
<div>
<section id="section2" > 
	<div class="h1title"><h1>Dentist Administration</h1></div>  
<div class="container">

    <div class="wrapper">
      <div class="title"><span>Admin Log In</span></div>
      <form method="post" action="../api/utils/login.php">
         
        <div class="row">
			
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Username" name="admin_username" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="admin_password" required>
        </div>
        <div class="pass"><a href="admin_forgot_pass.php">Forgot password?</a></div>
        <div class="row button">
          <input class="login" type="submit" value="Log In">
        </div>
        
      </form>
    </div>
  </div>
</section>
</div>

<div>
<section id="section3" > 
<div class="h1title"><h1>Patient Information</h1></div>  
<div class="wrapper1" id="wrapper1">
		  <div class="title"><span>Patient Registration</span></div>
          <form action="../api/patient-registration.php" method="GET">
            <div class="main-user-info">
              <!-- <div class="user-input-box">
                <label for="patient_id">Patient Id</label>
                <input type="text"id="patient_id" name="patient_id" placeholder="Patient Id: Auto Generated"/>
              </div> -->
              <div class="user-input-box">
                <label for="patient_id">Patient Id</label>
                <input class="user-input-disabled" type="text"id="patient_id" name="patient_id" placeholder="Patient Id: Auto Generated" disabled/>
              </div>
              <div class="user-input-box">
                <label for="fullName">Name</label>
                <input type="text"id="fullName" name="last_name" placeholder="Last Name" required/>
                <input type="text"id="fullName" name="first_name" placeholder="First Name" required/>
                <input type="text"id="fullName" name="MI" placeholder="M.I." required/>
              </div>
              <div class="user-input-box">
                <label for="age">Age</label>
                <input type="number"id="age" name="age" placeholder="Enter Age" value="" min="1" max="100" required/>
              </div>
              <div class="user-input-box">
                <label for="birthday">Birthday</label>
                <input type="date"id="birthday" name="birthday" placeholder="Select Birthday" required/>
              </div>
              <div class="user-input-box">
                <label for="gender">Gender</label>
                <select class="gender">
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
                <input type="text"id="address" name="address" placeholder="Enter Address" required/>
              </div>
              <div class="user-input-box">
                <label for="occupation">Occupation</label>
                <input type="text"id="occupation" name="occupation" placeholder="Enter Occupation" required/>
              </div>
              <div class="user-input-box">
                <label for="contact">Contact No.</label>
                <input type="tel" id="contact" name="contact" placeholder="Enter Contact Number"   required/>
              </div>
              <div class="user-input-box">
                <label for="weight">Weight (kilogram)</label>
                <input type="number"id="weight" name="weight" placeholder="Enter Weight" required/>
              </div>
              <div class="user-input-box">
                <label for="height">Height (centimeter)</label>
                <input type="number"id="height" name="height" placeholder="Enter Height" required/>
              </div>
              <div class="user-input-box">
                <label for="guardian">Guardian/Assistant <span style="color: red;">*Optional</span></label>
                <input  type="text" id="guardian" name="guardian" placeholder="Guardian/Assitant" />
              </div>


            </div>
           
            <div class="form-submit-btn">
              <input type="submit" value="Register">
            </div>
          </form>
		</div>
	  </div>
   
  </div>
</section>
</div>
</body>
</html>