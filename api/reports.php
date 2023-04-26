<?php
include("../api/utils/connection.php");
$patid = $_GET['patient_id'];
$lname = $_GET['last_name'];
$fname = $_GET['first_name'];
$mi = $_GET['MI'];
$diagnosis = $_GET['diagnosis'];
$treatment = $_GET['treatment'];


 $con = new mysqli('localhost', 'id20189319_mabisa', '{6!-Pu{+V9Uk4Hh(', 'id20189319_db_mabisa');
  if ($con->connect_error) {
      die('Connection Failed :' .$con->connect_error);
    } else {
    $stmt = $con->prepare ("insert into tbl_reports (patient_id, pat_lname, pat_fname, pat_mi, diagnosis, treatment) values (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss",$patid, $lname, $fname, $mi, $diagnosis, $treatment);
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("Successfully Added!"); '; 
    echo 'window.location = "https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=reports-list";';
    echo '</script>';
    $stmt->close();
    $con->close();
    }
    ?>