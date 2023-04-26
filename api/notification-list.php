<?php
require_once("../api/utils/connection.php");

$sql = "SELECT * FROM `tbl_notification` INNER JOIN `tbl_patientreg` ON `tbl_patientreg`.patient_id = `tbl_notification`.patient_id";

$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
       /* echo '<td style="display: flex; justify-content: center; ">
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
        echo '<td>' . $row["patient_id"] . '</td>';
        echo '<td>' . $row["pat_lname"] . '</td>';
        echo '<td>' . $row["pat_fname"] . '</td>';
        echo '<td>' . $row["created_at"] . '</td>';
        echo '<td>
      
        <div class="delete" style=" padding: 8px;">
          <a href="../../api/notification-delete.php?id='.$row["id"].'"><i class="fas fa-minus-circle"></i> <span class="link-name"> Remove</span> </a>
        </div>
      </td>';
        echo '</tr>';
    }
} else {
    echo "0 results";
}

$con->close();
?>
