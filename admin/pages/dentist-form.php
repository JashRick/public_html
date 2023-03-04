


<?php include("../pages/layout/head.php"); ?>
<?php include("../pages/layout/nav.php"); ?>
  <section class="home-section">
    
  <?php include("../pages/layout/header.php"); ?>
<link rel="stylesheet" type="text/css" href="../style.css">
<div class="overview">
    <div class="title">
        <i class="uil uil-tachometer-fast-alt"></i>
        <span class="text">Dentist Form</span>
    </div>                
</div>   
<div class="container">
		<div class="wrapper" id="wrapper1">
		  <div class="title"><span>Admin Registration</span></div>
		  <form action="../api/dentist-registration.php" method="GET">
				<div class="row">
					<i class="fas fa-user-tie"></i>
					<input type="text" placeholder="Full Name" name="fullname" required>
					</div>
				<div class="row">
					<i class="fas fa-user"></i>
					<input type="text" placeholder="Username" name="username" required>
				</div>
				<div class="row">
					<i class="fas fa-envelope"></i>
					<input type="email" placeholder="Email" name="email" required>
				</div>
				<div class="row">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder="Password" name="password" required>
				</div>
				<div class="row">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder="Re-type Password" name="repassword" required>
				</div>
					
		  </form>
		</div>
	  </div>
   
  </div>