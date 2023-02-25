<header>
	<label class="logo" id="logo"><img src="../images/logo.png" alt="logo"></label>
	<input type="checkbox" id="menu-bar">
	<label class="menu" for="menu-bar"> <i class="fas fa-bars"></i></label>
	<nav class="navbar">
		<ul>
			<li><a href="../index.php">Home</a></li>
			<li><a href="#">Dentist</a>
					<ul>
						<li><a href="../pages/admin_login.php">Log In</a></li>
					
					</ul>
			</li>
			<li><a href="#">Patient</a>
					<ul>
						<li><a href="../pages/patient_reg.php">Registration</a></li>
            <li><a href="../pages/patient_barcode_loss.php">Barcode Loss</a></li>
					</ul>
			</li>
			<li><a href="#">Medical History</a>
				<ul>
                    <li><a href="../pages/medical_history.php">History Form</a></li>
                </ul>
			</li>
			<li><a href="#">Reports</a>
				<ul>
                    <li><a href="../pages/clinical_exam.php">Clinical Examination</a></li>
                  
                </ul>
			</li>
		</ul>
	</nav>
</header>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
