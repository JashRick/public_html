
<!DOCTYPE html>
<html>
<?php include('../layout/head.php'); ?>
<body class="bg1">

<?php include("../admin/pages/layout/header1.php"); ?>


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

</body>
</html>
