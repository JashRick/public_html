<?php
include("../api/utils/connection.php");
$patid = $_GET['patient_id'];
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

 $con = new mysqli('localhost', 'id20189319_mabisa', '{6!-Pu{+V9Uk4Hh(', 'id20189319_db_mabisa');
  if ($con->connect_error) {
      die('Connection Failed :' .$con->connect_error);
    } else {
    $stmt = $con->prepare ("insert into tbl_patientmedhis (patient_id, pat_lname, pat_fname, pat_mi, gen_health, head_aches, allergies, gum_bleeding, blood_pressure, sinus_trouble, freq_colds, diabetes, self_med) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssssssssss",$patid, $lname, $fname, $mi, $ghealth, $headaches, $allergies, $bog, $hbp, $st, $fc, $diabetes, $sm);
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("Successfully Added!"); '; 
    echo 'window.location = "https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=medical-history-list";';
    echo '</script>';
    $stmt->close();
    $con->close();
    }
    ?>