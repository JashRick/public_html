
<!DOCTYPE html>
<head>
  <!-- Include SweetAlert2 CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css" integrity="sha512-z3lC1l8HItFuTfLgTc3mp3y/+cIQm9JzF0cd35EJvzZGSE+RyydJQQB2OHw5N5+Q25x8Nzy36e5GdJ4OZ02gzA==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js" integrity="sha512-tOs4t4X9vtbX74dOyH1l+sCAt3g/y2DGxEYcYbyGrsbZcPwjQU9g2sOz19vSwRiNNW8x35Ny0TkyTbMxbm/Gng==" crossorigin="anonymous"></script>

</head>
<html>
<?php include('../layout/head.php'); ?>
<body class="bg1">

<?php include("../admin/pages/layout/header1.php"); ?>


  <div class="h1title"></div>  
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
