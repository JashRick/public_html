<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php'); ?>
<body>

<?php include("../admin/pages/layout/header1.php"); ?>

<div class="bg1">
  <div class="h1title"><h1>Patient Information</h1></div>  
<div class="container">
   
    <div class="wrapper">
      <div class="title"><span>Loss or Forgot Barcode?</span></div>
      <form action="#">
      
        <div class="row">
         
          <input id="barcode_input" type="password" placeholder="Enter patient's name" required>
          
        </div>
        
        <div class="row button">
          <input class="login" type="submit" value="Request to Admin">
        </div>
        
      </form>
    </div>
  </div>
 </div>
</body>
</html>