<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php'); ?>
<body>

<?php include('../layout/header.php'); ?>

<div class="bg1">
  <div class="h1title"><h1>Patient Information</h1></div>  
<div class="container1">
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
      location.replace("patient_barcode.php?patient_id='.$patient_id.'");
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
 </div>
</body>
</html>

<?php
if (isset($_GET["status"]) && isset($_GET["message"]) && isset($_GET["patient_id"])) {

	$status = $_GET["status"];
	$message = $_GET["message"];
  $patient_id = $_GET["patient_id"];

	echo '<script type="text/javascript">';
	echo 'Swal.fire("Patient", "'.$message.'", "'.$status.'").then((result) => {
    if (result.isConfirmed) {
      location.replace("patient_barcode.php?patient_id='.$patient_id.'");
    }
  }); '; 
	echo '</script>';

 
}
?>

<style>
  .user-input-disabled {
    background-color: #dad7d7;
  }
</style>