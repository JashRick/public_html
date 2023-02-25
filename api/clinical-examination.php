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

 $conn = new mysqli('localhost', 'root', '', 'id20189319_db_mabisa');
  if ($conn->connect_error) {
      die('Connection Failed :' .$conn->connect_error);
    } else {
        $stmtt = $conn->prepare ("insert into tbl_clinicalexam (patient_id, pat_lname, pat_fname, pat_mi, face_lips, cheeks, tongue, palate, oropharynx, gingivae_spongy, missing_teeth, retracted, bleeding, `malocclusion`) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
         $stmtt->bind_param("isssssssssssss",$pid, $lastname, $firstname, $mini, $fal, $cheeks, $tongue, $palate, $oropharynx, $gingivae_spongy, $missing_teeth, $retracted, $bleeding, $malocclusion);
         $stmtt->execute();
         echo "Data added Successfully!";
         $stmtt->close();
         $conn->close();
    }
    ?>