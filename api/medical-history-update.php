<?php

include("../api/utils/connection.php");

$patientid = $_GET['patient_id'];
$lname = $_GET['last_name'];
$fname = $_GET['first_name'];
$mi = $_GET['MI'];
$ghealth = $_GET['general_health'];
$headaches = $_GET['headaches'];
$allergies = $_GET['allergies'];
$bog = $_GET['bleeding_of_gums'];
$hbp = $_GET['heart_bp'];
$st = $_GET['sinus_trouble'];
$fc = $_GET['freq_colds'];
$diabetes = $_GET['diabetes'];
$sm = $_GET['self_medication'];
  
if ($patientid > 0) {
   $sql = "UPDATE `tbl_patientmedhis` SET pat_lname = '$lname', pat_fname = '$fname', pat_mi = '$mi', gen_health = '$ghealth', head_aches = '$headaches', allergies = '$allergies', gum_bleeding = '$bog', blood_pressure = '$hbp',  sinus_trouble = '$st', freq_colds = '$fc', diabetes = '$diabetes', self_med = '$sm' WHERE patient_id = '$patientid'";

   if(mysqli_query($con, $sql)) {
      header("Location: https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=medical-history-list");
   } else {
      header("Location: https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=medical-history-list");
   }
}
mysqli_close($con);

?>
