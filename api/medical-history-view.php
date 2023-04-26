<?php
  include("../api/utils/connection.php");

  if (isset($_GET['patient_id'])) {
    $sql = "SELECT * FROM `tbl_patientmedhis` WHERE patient_id=".$_GET['patient_id']."";
    $result = $con->query($sql);
    if($result !== false && $result->num_rows == 1) {
      while($row = $result->fetch_assoc()) {
        $GLOBALS['medical'] = $row;
      }
    } else {
      unset($GLOBALS["medical"]);
    }
    mysqli_close($con);
  }
?>