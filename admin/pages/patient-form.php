<div class="overview">
    <div class="title">
        <i class="uil uil-tachometer-fast-alt"></i>
        <span class="text">Patient Form</span>
    </div>                
</div>   
<div class="container">
		<div class="wrapper1" id="wrapper1">
		 
          <form action="../api/patient-registration.php" method="GET">
            <div class="main-user-info">
              <!-- <div class="user-input-box">
                <label for="patient_id">Patient Id</label>
                <input type="text"id="patient_id" name="patient_id" placeholder="Patient Id: Auto Generated"/>
              </div> -->
              <div class="user-input-box">
                <label for="patient_id">Patient Id</label>
                <input class="user-input-disabled" type="text"id="patient_id" name="patient_id"  disabled/>
              </div>
              <div class="user-input-box">
                <label for="fullName">Name</label>
                <input type="text"id="fullName" name="last_name"  required/>
                <input type="text"id="fullName" name="first_name"  required/>
                <input type="text"id="fullName" name="MI"  required/>
              </div>
              <div class="user-input-box">
                <label for="age">Age</label>
                <input type="number"id="age" name="age"  value="" min="1" max="100" required/>
              </div>
              <div class="user-input-box">
                <label for="birthday">Birthday</label>
                <input type="date"id="birthday" name="birthday"  required/>
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
                <input type="text"id="address" name="address"  required/>
              </div>
              <div class="user-input-box">
                <label for="occupation">Occupation</label>
                <input type="text"id="occupation" name="occupation"  required/>
              </div>
              <div class="user-input-box">
                <label for="contact">Contact No.</label>
                <input type="tel" id="contact" name="contact"    required/>
              </div>
              <div class="user-input-box">
                <label for="weight">Weight (kilogram)</label>
                <input type="number"id="weight" name="weight"  required/>
              </div>
              <div class="user-input-box">
                <label for="height">Height (centimeter)</label>
                <input type="number"id="height" name="height"  required/>
              </div>
              <div class="user-input-box">
                <label for="guardian">Guardian/Assistant</label>
                <input  type="text" id="guardian" name="guardian"  />
              </div>


            </div>
           
            <div class="form-submit-btn">
              <input type="submit" value="Save">
            </div>
          </form>
		</div>
	  </div>
   
  </div>
 </div>