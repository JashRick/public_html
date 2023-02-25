<?php

$sql = "SELECT * FROM `tbl_patientmedhis`";

$result = $con->query($sql);
  if($result !== false && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {


      echo '<tr>';
      echo '<td>' . $row["patient_id"] . '</td>';
      echo '<td>' . $row["pat_firstname"] . '</td>';
      echo '<td>' . $row["pat_lastname"] . '</td>';
      echo '<td>' . $row["pat_mi"] . '</td>';
      echo '<td>
      <div class="view">
      <a href="button"><i class="fas fa-eye" alt="View"></i> View</i> </a>
    </div>
        <a href="?page=medical-history-list&id='.$row['patient_id'].'"><div class="edit">
        <i class="fas fa-user-edit"></i><span class="link-name"> Edit</span>
        </a></div>
        <div class="delete">
        <a href="button"><i class="fas fa-trash-alt" alt="Delete"></i> Delete</a> </div>
      </td>';
      echo '</tr>';
        
    }     
   } else {
    echo "0 results";
   }

mysqli_close($con);