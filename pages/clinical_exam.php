<!DOCTYPE html>
<html lang="en">

<body class="bg1">
<?php include("../admin/pages/layout/header1.php"); ?>


  <div class="h1title"><h1>Reports</h1></div>  
<div class="container1">
		<div class="wrapper1" id="wrapper1">
		  <div class="title"><span>Clinical Examination</span></div>
          <form action="../api/clinical-examination.php" method="GET">
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
                <label for="age">Face and Lips</label>
                <input type="text"id="Face_and_lips" name="face_and_lips" required/>
              </div>
              <div class="user-input-box">
                <label for="address">Cheeks</label>
                <input type="text"id="Cheeks" name="cheeks"  required/>
              </div>
              <div class="user-input-box">
                <label for="occupation">Tongue</label>
                <input type="text"id="Tongue" name="tongue"  required/>
              </div>
              <div class="user-input-box">
                <label for="contact">Palate</label>
                <input type="text"id="Palate" name="palate"  required/>
              </div>
              <div class="user-input-box">
                <label for="weight">Oropharynx</label>
                <input type="text"id="Oropharynx" name="oropharynx"  required/>
              </div>
              <div class="user-input-box">
                <label for="height">Gingivae Spongy</label>
                <input type="text"id="Gingivae_Spongy" name="gingivae_spongy"  required/>
              </div>
              <div class="user-input-box">
                <label for="height">Missing Teeth</label>
                <input type="text"id="Missing_Teeth" name="missing_teeth"  required/>
              </div>
              <div class="user-input-box">
                <label for="height">Retracted</label>
                <input type="text"id="Retracted" name="retracted"  required/>
              </div>
              <div class="user-input-box">
                <label for="height">Bleeding</label>
                <input type="text"id="Bleeding" name="bleeding"  required/>
              </div>
              <div class="user-input-box">
                <label for="height">Malocclusion</label>
                <input type="text"id="Malocclusion" name="malocclusion"  required/>
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
</html>