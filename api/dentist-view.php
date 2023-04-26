<?php
  include("../api/utils/connection.php");

  if (isset($_GET['id'])) {
    $sql = "SELECT * FROM `tbl_adminreg` WHERE id=".$_GET['id']."";
    $result = $con->query($sql);
    if($result !== false && $result->num_rows == 1) {
      while($row = $result->fetch_assoc()) {
        $GLOBALS['dentist'] = $row;
      }
    } else {
      unset($GLOBALS["dentist"]);
    }
    mysqli_close($con);
  }
?>