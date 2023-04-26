<?php
$sql = "SELECT * FROM `tbl_patientreg`";
$result = $con->query($sql);

if($result !== false && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '<tr>';
    /*  echo '<td style="display: flex; justify-content: center;">
      <div id="qrcode-' . $row["patient_id"] . '"></div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
      <script type="text/javascript">
          var qrcode = new QRCode("qrcode-' . $row["patient_id"] . '", {
              text: "' . $row["patient_id"] . '",
              width: 65,
              height: 65,
              colorDark : "#000000",
              colorLight : "#ffffff",
              correctLevel : QRCode.CorrectLevel.H
          });
      </script>
  </td>'; */
     echo '<td style="width: 15%;">' . $row[" "] . '</td>';
      echo '<td>' . $row["patient_id"] . '</td>';
      echo '<td>' . $row["pat_lname"] . '</td>';
      echo '<td>' . $row["pat_fname"] . '</td>';
      echo '<td>' . $row["pat_mi"] . '</td>';
     
      echo '<td>
      <div class="edit">
        <a href="?page=patient-form&patient_id='.$row['patient_id'].'">
        <i class="fas fa-user-edit"></i><span class="link-name"> Edit</span>
        </a> </div>
        <div class="delete">  
        <a href="../../api/patient-delete.php?patient_id='.$row["patient_id"].'"><i class="fas fa-trash-alt" alt="Delete"> </i> <span class="link-name"> Delete</span></a> </div>
      </td>';
      echo '</tr>';
        
    }     
   } else {
    echo "0 results";
   }

mysqli_close($con);