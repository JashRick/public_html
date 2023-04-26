<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php'); ?>
<body class="bg1">

<?php include("../admin/pages/layout/header1.php"); ?>

<div>
  <div class="h1title"><h1></h1></div>  
<div class="container">
   
    <div class="wrapper" style="margin-top: 240px;">
      <div class="title"><span>Scan QR Code</span></div>
      <form action="../api/patient-barcode-loss.php" method="GET">
      
        <div class="row">
         
          <input id="qr_code_input" name="id" placeholder="Please Scan" required>
          
        </div>
        
        <div class="row button">
          <input class="login" type="submit" value="submit">
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
	echo 'Swal.fire("Patient", "Done", "'.$status.'").then((result) => {
    if (result.isConfirmed) {
      location.replace("https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=dashboard");
    }
  }); '; 
	echo '</script>';

 
}
?>