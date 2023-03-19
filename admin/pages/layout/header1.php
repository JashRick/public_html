<link rel="stylesheet" type="text/css" href="../style.css">
<header style="margin-bottom:0px:>
	<label class="logo" id="logo"><img src="../images/logo.png" alt="logo"></label>
	<input type="checkbox" id="menu-bar">
	<label class="menu" for="menu-bar"> <i class="fas fa-bars"></i></label>
	<nav class="navbar1">
		<ul>
			<li><a href="../index.php">Home</a></li>
			<li><a href="#">Dentist Administration</a>
					<ul>
						<li><a href="../pages/admin_login.php">Log In</a></li>
						<li><a href="../pages/admin_reg.php">Registration</a></li>
						<li><a href="../pages/admin_forgot_pass.php">Forgot&nbsp;Password</a></li>
						<li><a href="?page=dashboard">Admin&nbsp;Dashboard</a></li>
					
					</ul>
			</li>
			<li><a href="?page=patient-list">Patient Information</a>
					<ul>
						<li><a href="../pages/patient_reg.php">Registration</a></li>
            <li><a href="../pages/patient_qr_code_loss.php">QR Code Loss</a></li>
					</ul>
			</li>
			<li><a href="?page=medical-history-list">Medical History</a>
					<ul>
						<li><a href="../pages/medical_history.php">Medical History Form</a></li>
						<li><a href="../pages/clinical_exam.php">Clinical Examination</a></li>
					</ul>
			</li>
			<li><a href="?page=reports-list">Reports</a>
					<ul>
						<li><a href="#">Evaluation</a></li>
						
					</ul>
			</li>
		</ul>
	</nav>
</header>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="../qrcode.js"></script>