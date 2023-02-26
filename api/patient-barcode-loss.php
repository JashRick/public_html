

<?php
include("../api/utils/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  // Sanitize input data
  $patient_id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);

  // TODO - create validation
  // TIP - select the patient id first, if its not existing, then proceed in insertion, else send an error status & message
    

  
  

  // Prepare SQL statement
  $stmt = $con->prepare("INSERT INTO tbl_notification (patient_id) VALUES (?)");
  $stmt->bind_param("s", $patient_id);

  // Execute SQL statement
  if ($stmt->execute()) {
    $patient_id = $stmt->insert_id;
    header("Location: ../pages/patient_qr_code_loss.php?status=success&message=wait for admin");
  } else {
    echo "Error: " . $con->error;
  }

  // Close statement and database connection
  $stmt->close();
  $con->close();
}

?>