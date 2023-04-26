




<?php
// Connect to database (replace values with your own)
$servername = "localhost";
$username = "id20189319_mabisa";
$password = "{6!-Pu{+V9Uk4Hh(";
$dbname = "id20189319_db_mabisa";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the admin username
$admin_username = '';
$sql = "SELECT admin_username FROM tbl_adminreg WHERE id = 25"; // Replace 1 with the appropriate ID value
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $admin_username = $row["admin_username"];
}

// Close the database connection
$conn->close();
?>

<nav class="sidebar">
    <ul style="padding-left: 0px;">
        <li>
            <a href="#" class="logo" style="text-decoration: none;">
                <img src="../images/user.png" alt="logo">
                <span class="nav-admin">Welcome to MABISA! <div class="a-username"></div><?php echo $admin_username; ?></div></span>
            </a>
        </li>
        <li><a href="?page=dashboard" class="a <?php echo $_GET['page'] === 'dashboard' ? 'active' : ''; ?>">
            <i class="fas fa-tachometer-alt"></i>
            <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="?page=dentist-list" class="a <?php echo $_GET['page'] === 'dentist-list' ? 'active' : ''; ?>">
            <i class="fas fa-user-cog"></i>
            <span class="nav-item">Dentist Administration</span>
        </a></li>
        <li><a href="?page=patient-list" class="a <?php echo $_GET['page'] === 'patient-list' ? 'active' : ''; ?>">
            <i class="fas fa-user"></i>
            <span class="nav-item">Patient Information</span>
        </a></li>
        <li><a href="?page=medical-history-list" class="a <?php echo $_GET['page'] === 'medical-history-list' ? 'active' : ''; ?>">
             <i class="fas fa-file-medical"></i>
            <span class="nav-item">Medical History</span>
        </a></li>
         <li><a href="?page=clinical-exam-list" class="a <?php echo $_GET['page'] === 'clinical-exam-list' ? 'active' : ''; ?>">
            <i class="fas fa-notes-medical"></i>
            <span class="nav-item">Clinical Examination</span>
        </a></li>
        <li><a href="?page=reports-list" class="a <?php echo $_GET['page'] === 'reports-list' ? 'active' : ''; ?>">
            <i class="fas fa-file-signature"></i>
            <span class="nav-item">Reports</span>
        </a></li>
        <li><a href="../api/utils/logout.php" class="logout" style="text-decoration: none;">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
        </a></li>
    </ul>
</nav>
``




