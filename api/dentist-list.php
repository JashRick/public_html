<?php

$sql = "SELECT * FROM `tbl_adminreg`";

$result = $con->query($sql);
  if($result !== false && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {


      echo '<tr>';
       echo '<td style="width:85px;">
            <div id="qrcode-' . $row["id"] . '" class="qrcode"></div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
            <script type="text/javascript">
                var qrcode = new QRCode("qrcode-' . $row["id"] . '", {
                    text: "' . $row["id"] . '",
                    width: 80,
                    height: 80,
                    colorDark : "#000000",
                    colorLight : "#ffffff",
                    correctLevel : QRCode.CorrectLevel.H
                });
            </script>
        </td>';
      echo '<td>' . $row["id"] . '</td>';
      echo '<td>' . $row["admin_username"] . '</td>';
      echo '<td>' . $row["admin_fullname"] . '</td>';
      
      echo '<td>
        <div class="edit">
          <a  href="?page=dentist-form&id='.$row["id"].'"><i class="fas fa-user-edit" alt="Edit"> Edit</i> </a>
        </div>
        
        <div class="delete">
          <a class= href="../../api/dentist-delete.php?id='.$row["id"].'"><i class="fas fa-trash-alt" alt="Delete"> Delete</i> </a>
        </div>
      </td>';
      echo '</tr>';
        
    }     
   } else {
    echo "0 results";
   }

mysqli_close($con);