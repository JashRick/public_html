<html lang="en">
<?php include('../layout/head.php'); ?>
<body class="bg1">
<?php include("../admin/pages/layout/header1.php"); ?>

<div>
  
  <div class="containerp" style="margin-top: 90px; max-width: 950px;">
    <div class="wrapperp" id="wrapper">
      <div class="rtitle"><span>Diagnosis and Treatment</span></div>
      <form action="../api/reports.php" method="GET">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="patient_id">Patient Id</label>
            <input class="user-input-disabled" type="text" id="patient_id" name="patient_id" placeholder="Patient Id">
          </div>
          <div class="user-input-box">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" name="last_name" placeholder="Last Name" required/>
            <input type="text" id="fullName" name="first_name" placeholder="First Name" required/>
            <input type="text" id="fullName" name="MI" placeholder="M.I." required/>
          </div>
          <div class="diagnosis-box" style="display: inline-block; width: 48%; float: left;">
            <label for="diagnosis" style="font-size: 18px; margin-top: 10px; ">Diagnosis</label>
            <textarea id="diagnosis" name="diagnosis" required style="height: 300px; width: 100%;"/></textarea>
          </div>
          <div class="treatment-box" style="display: inline-block; width: 48%; float: right;">
            <label for="treatment" style="font-size: 18px; ">Treatment</label>
            <textarea id="treatment" name="treatment" required style="height: 300px; width: 100%;"/></textarea>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
   
</div>

</body>
</html>
