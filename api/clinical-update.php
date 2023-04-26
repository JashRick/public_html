<?php
include("../api/utils/connection.php");
$pid = $_GET['patient_id'];
$lastname = $_GET['last_name'];
$firstname = $_GET['first_name'];
$mini = $_GET['MI'];
$fal = $_GET['face_and_lips'];
$cheeks = $_GET['cheeks'];
$tongue = $_GET['tongue'];
$palate = $_GET['palate'];
$oropharynx = $_GET['oropharynx'];
$gingivae_spongy = $_GET['gingivae_spongy'];
$missing_teeth = $_GET['missing_teeth'];
$retracted = $_GET['retracted'];
$bleeding = $_GET['bleeding'];
$malocclusion = $_GET['malocclusion'];
  
if ($pid > 0) {
   $sql = "UPDATE `tbl_clinicalexam` SET pat_lname = '$lastname', pat_fname = '$firstname', pat_mi = '$mini', face_lips = '$fal', cheeks = '$cheeks', tongue = '$tongue', palate = '$palate', oropharynx = '$oropharynx', gingivae_spongy = '$gingivae_spongy', missing_teeth = '$missing_teeth', retracted = '$retracted', bleeding = '$bleeding', malocclusion = '$malocclusion' WHERE patient_id = '$pid'";

   if(mysqli_query($con, $sql)) {
      header("Location: https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=clinical-exam-list");
   } else {
      header("Location: https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=clinical-exam-list");
   }
}
mysqli_close($con);

?>
