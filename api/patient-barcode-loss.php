<?php
include("../api/utils/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  // Sanitize input data
  $patient_id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);

  // Validate input data
  if (empty($patient_id)) {
    header("HTTP/1.1 400 Bad Request");
    echo json_encode(array("error" => "Invalid input data"));
    exit();
  }

  // Select patient id from database
  $selectStmt = $con->prepare("SELECT * FROM tbl_notification WHERE patient_id = ?");
  $selectStmt->bind_param("s", $patient_id);
  $selectStmt->execute();
  $result = $selectStmt->get_result();

  // Check if patient id already exists
  if ($result->num_rows > 0) {
    header("HTTP/1.1 400 Bad Request");
    echo json_encode(array("error" => "Patient id already exists"));
    exit();
  }
// Create if patient id is not exist from tbl_patientreg

  // Prepare SQL statement
  $stmt = $con->prepare("INSERT INTO tbl_notification (patient_id) VALUES (?)");
  $stmt->bind_param("s", $patient_id);

  // Execute SQL statement
  if ($stmt->execute()) {
    $patient_id = $stmt->insert_id;
    header("Location: ../pages/patient_qr_code_loss.php?status=success&message=wait for admin");
    exit();
  } else {
    header("HTTP/1.1 500 Internal Server Error");
    echo json_encode(array("error" => "Database error: " . $con->error));
    exit();
  }

  // Close statement and database connection
  $stmt->close();
  $con->close();
}
