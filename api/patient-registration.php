<?php
include("../api/utils/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  // Sanitize input data
  $lastname = filter_var($_GET['last_name'], FILTER_SANITIZE_STRING);
  $firstname = filter_var($_GET['first_name'], FILTER_SANITIZE_STRING);
  $mini = filter_var($_GET['MI'], FILTER_SANITIZE_STRING);
  $age = filter_var($_GET['age'], FILTER_SANITIZE_NUMBER_INT);
  $dob = date('Y-m-d', strtotime($_GET['birthday']));
  $gender = filter_var($_GET['gender'], FILTER_SANITIZE_STRING);
  $address = filter_var($_GET['address'], FILTER_SANITIZE_STRING);
  $occupation = filter_var($_GET['occupation'], FILTER_SANITIZE_STRING);
  $contact = filter_var($_GET['contact'], FILTER_SANITIZE_STRING);
  $weight = filter_var($_GET['weight'], FILTER_SANITIZE_NUMBER_FLOAT);
  $height = filter_var($_GET['height'], FILTER_SANITIZE_NUMBER_FLOAT);
  $guardian = filter_var($_GET['guardian'], FILTER_SANITIZE_STRING);

  // Prepare SQL statement
  $stmt = $con->prepare("INSERT INTO tbl_patientreg (pat_lname, pat_fname, pat_mi, age, birth_date, gender, address, occupation, contact, weight, height, guardian) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssissssddds", $lastname, $firstname, $mini, $age, $dob, $gender, $address, $occupation, $contact, $weight, $height, $guardian);

  // Execute SQL statement
  if ($stmt->execute()) {
    $patient_id = $stmt->insert_id;
    header("Location: ../pages/patient_reg.php?status=success&message=Succesfully Registered!🎉&patient_id=" . $patient_id);
  } else {
    echo "Error: " . $con->error;
  }

  // Close statement and database connection
  $stmt->close();
  $con->close();
}


        header("location: ../pages/patient_reg.php?status=success&message=Succesfully Registered, scan your barcode now!&patient_id=" . $patient_id);
    
    ?>