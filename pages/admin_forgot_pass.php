<!DOCTYPE html>
<html>
<?php include('../layout/head.php'); ?>
<body class="bg1">

<?php include("../admin/pages/layout/header1.php"); ?>

<div >
  <div class="h1title"><h1>Dentist Administration</h1></div>  
<div class="container">
   
    <div class="wrapper">
      <div class="title"><span>Forgot Password</span></div>
      <form action="#">
        <div class="row">
          <i class="fas fa-envelope"></i>
          <input type="text" placeholder="Enter email address" required>
        </div>
        
        <div class="row button">
          <input class="login" type="submit" value="Send">
        </div>
        <div class="register">Back to <a href="admin_login.php">Log In</a></div>
      </form>
    </div>
  </div>
 </div>
</body>
</html>