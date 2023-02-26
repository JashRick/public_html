<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php'); ?>
<body>

<?php include('../layout/header.php'); ?>

<div class="bg1">
  <div class="h1title"><h1>Patient Information</h1></div>  
<div class="container">
   
    <div class="wrapper">
      <div class="title"><span>Loss or Forgot QR Code?</span></div>
      <form action="../api/patient-barcode-loss.php" method="GET">
      
        <div class="row">
         
          <input id="qr_code_input" name="id" placeholder="Enter Scanned QR Code Patient's ID" required>
          
        </div>
        
        <div class="row button">
          <input class="login" type="submit" value="Submit Request">
        </div>
        
      </form>
    </div>
  </div>
 </div>

 <style>
  .wrapper form .row input {
    padding-left: 20px;
}
</style>
</body>
</html>

<?php
if (isset($_GET["status"]) && isset($_GET["message"])) {

	$status = $_GET["status"];
	$message = $_GET["message"];
  $patient_id = $_GET["patient_id"];

	echo '<script type="text/javascript">';
	echo 'Swal.fire("Patient", "'.$message.'", "'.$status.'").then((result) => {
    if (result.isConfirmed) {
      location.replace("home.php");
    }
  }); '; 
	echo '</script>';

 
}
?>