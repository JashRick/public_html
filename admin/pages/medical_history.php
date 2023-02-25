
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MABISA | Administration</title>
	<link rel="icon" href="./images/medical.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<?php include('../layout/header.php'); ?>

<div class="bg1">
    
  <div class="h1title"><h1>Medical History</h1></div>  
<div class="container1">
		<div class="wrapper1" id="wrapper1">
		  <div class="title"><span>Patient's Medical History Form</span></div>
          <form action="../api/medical-information.php" method="GET">
            <div class="main-user-info">
              <div class="user-input-box">
                <label for="patient_id">Patient Id</label>
                <input type="text"id="patient_id" name="patient_id" placeholder="Enter Patient Id" required/>
              </div>
              <div class="user-input-box">
                <label for="fullName">Name</label>
                <input type="text"id="fullName" name="last_name" placeholder="Last Name" required/>
                <input type="text"id="fullName" name="first_name" placeholder="First Name" required/>
                <input type="text"id="fullName" name="MI" placeholder="M.I." required/>
              </div>
              <div class="user-input-box">
                <label for="GH">General Health</label>
                <input type="text"id="general_health" name="general_health" required/>
              </div>
              <div class="user-input-box">
                <label for="headaches">Headaches</label>
                <input type="text"id="headaches" name="headaches"  required/>
              </div>
              <div class="user-input-box">
                <label for="allergies">Allergies</label>
                <input type="text"id="allergies" name="allergies"  required/>
              </div>
              <div class="user-input-box">
                <label for="bleeding of gums">Bleeding of Gums</label>
                <input type="text"id="bleeding_of_gums" name="bleeding_of_gums"  required/>
              </div>
              <div class="user-input-box">
                <label for="Heart BP">Heart - B.P.</label>
                <input type="text"id="heart_bp" name="heart_bp"  required/>
              </div>
              <div class="user-input-box">
                <label for="sinus trouble">Sinus Trouble</label>
                <input type="text"id="sinus_trouble" name="sinus_trouble"  required/>
              </div>
              <div class="user-input-box">
                <label for="freq. colds">Freq. Colds</label>
                <input type="text"id="freq_colds" name="freq_colds"  required/>
              </div>
              <div class="user-input-box">
                <label for="diabetes">Diabetes</label>
                <input type="text"id="diabetes" name="diabetes"  required/>
              </div>
              <div class="user-input-box">
                <label for="self-medication">Self-Medication</label>
                <input type="text"id="self_medication" name="self_medication"  required/>
              </div>



            </div>
           
            <div class="form-submit-btn">
              <input type="submit" value="Submit">
            </div>
          </form>
		</div>
	  </div>
   
  </div>
 </div>

</body>
</html
