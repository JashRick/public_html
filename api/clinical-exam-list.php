<?php
$sql = "SELECT * FROM `tbl_clinicalexam`";
$result = $con->query($sql);

if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["patient_id"] . '</td>';
        echo '<td>' . $row["pat_lname"] . '</td>';
        echo '<td>' . $row["pat_fname"] . '</td>';
        echo '<td>' . $row["pat_mi"] . '</td>';
        echo '<td>
        <a href="?page=clinical-form&patient_id='.$row['patient_id'].'">
          <div class="edit">
            <i class="fas fa-user-edit"></i><span class="link-name"> Edit</span>
          </div>
        </a>
        
           <a href="../../api/clinical-exam-delete.php?patient_id='.$row["patient_id"].'">
         <div class="delete"> 
            <i class="fas fa-trash-alt" alt="Delete"> </i><span class="link-name"> Delete</span>
         
        
        </a></div>
      </td>';
      echo '</tr>';
    }     
} else {
    echo "0 results";
}

$con->close();
?>
