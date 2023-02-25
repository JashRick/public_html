<?php

$sql = "SELECT * FROM `tbl_adminreg`";

$result = $con->query($sql);
  if($result !== false && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {


      echo '<tr>';
      echo '<td>' . $row["admin_username"] . '</td>';
      echo '<td>' . $row["admin_fullname"] . '</td>';
      echo '<td>' . $row["admin_type"] . '</td>';
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