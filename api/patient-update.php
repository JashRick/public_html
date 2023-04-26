<?php

include("../api/utils/connection.php");

$patientid = $_GET['patient_id'];
$lastname = $_GET['last_name'];
$firstname = $_GET['first_name'];
$mini = $_GET['MI'];
$age = $_GET['age'];
$dob = date('Y-m-d', strtotime($_GET['birthday']));
$gender = $_GET['gender'];
$address = $_GET['address'];
$occupation = $_GET['occupation'];
$contact = $_GET['contact'];
$weight = $_GET['weight'];
$height = $_GET['height'];
$guardian = $_GET['guardian'];
  
if ($patientid > 0) {
   $sql = "UPDATE `tbl_patientreg` SET pat_lname = '$lastname', pat_fname = '$firstname', pat_mi = '$mini', age = '$age', birth_date = '$dob', gender = '$gender', address = '$address', occupation = '$occupation', contact = '$contact', weight = '$weight', height = '$height', guardian = '$guardian' WHERE patient_id = '$patientid'";

   if(mysqli_query($con, $sql)) {
      header("Location: https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=patient-list");
   } else {
      header("Location: ../pages/patient_reg.php?status=error&message=Something went wrong.");
   }
}
mysqli_close($con);

?>
