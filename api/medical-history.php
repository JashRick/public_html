<?php

$sql = "SELECT * FROM `tbl_patientreg`";

$result = $con->query($sql);
  if($result !== false && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {


      echo '<tr>';
      echo '<td>' . $row["pat_lname"] . '</td>';
      echo '<td>
        <a href="?page=patient-form&id='.$row['patient_id'].'">
        <i class="fas fa-user-edit"></i><span class="link-name"> Edit</span>
        </a>
        <a href="button"><i class="fas fa-trash-alt" alt="Delete"></i> Delete</a>
      </td>';
      echo '</tr>';
        
    }     
   } else {
    echo "0 results";
   }

mysqli_close($con);