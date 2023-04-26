<?php

$sql = "SELECT * FROM `tbl_reports`";

$result = $con->query($sql);
  if($result !== false && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {


      echo '<tr>';
      echo '<td>' . $row["patient_id"] . '</td>';
      echo '<td>' . $row["pat_lname"] . '</td>';
      echo '<td>' . $row["pat_fname"] . '</td>';
      echo '<td>' . $row["pat_mi"] . '</td>';
      echo '<td>

  <div class="edit">
    <a href="?page=reports-list&patient_id='.$row['patient_id'].'">
    <i class="fas fa-user-edit"></i><span class="link-name"> Edit</span>
    </a> </div>
    <div class="delete">  
    <a href="../../api/clinical-exam-delete.php?patient_id='.$row["patient_id"].'"><i class="fas fa-trash-alt" alt="Delete"> </i> <span class="link-name"> Delete</span></a></div>
     <div class="print">  
    <a href="../../api/clinical-exam-delete.php?patient_id='.$row["patient_id"].'"><i class="fas fa-print"></i> <span class="link-name"> Print</span></a></div>
  </td>';
      echo '</tr>';
        
    }     
   } else {
    echo "0 results";
   }

mysqli_close($con);