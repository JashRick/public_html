<?php

include("../api/utils/connection.php");
echo "hw4ehe5hserhrht";
$sql = "SELECT * FROM `tbl_notification` INNER JOIN `tbl_patientreg` ON `tbl_patientreg`.patient_id = `tbl_notification`.patient_id";

$result = $con->query($sql);
  if($result !== false && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {


      echo '<tr>';
      echo '<td>' . $row["patient_id"] . '</td>';
      echo '<td>' . $row["pat_lname"] . '</td>';
      echo '<td>' . $row["pat_fname"] . '</td>';
      echo '<td>
      <div class="view">
          <a href="button"><i class="fas fa-eye" alt="View"></i> View</i> </a>
        </div>
      <div class="edit">
        <a href="?page=dentist-form&id='.$row['id'].'">
        <i class="fas fa-user-edit"></i><span class="link-name"> Edit</span>  
        </a>
       </div>  
        <div class="delete">
          <a href="button"><i class="fas fa-trash-alt" alt="Delete"> Delete</i> </a>
        </div>
      </td>';
      echo '</tr>';
        
    }     
   } else {
    echo "0 results";
   }

mysqli_close($con);