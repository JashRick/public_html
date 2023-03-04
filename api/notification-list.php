<?php
include("../api/utils/connection.php");

$sql = "SELECT * FROM `tbl_notification` INNER JOIN `tbl_patientreg` ON `tbl_patientreg`.patient_id = `tbl_notification`.patient_id";

$result = $con->query($sql);
if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>
        <div id="qrcode-' . $row["patient_id"] . '"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
        <script type="text/javascript">
            var qrcode = new QRCode("qrcode-' . $row["patient_id"] . '", {
                text: "' . $row["patient_id"] . '",
                width: 80,
                height: 80,
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
            });
        </script>
    </td>';
        echo '<td>' . $row["patient_id"] . '</td>';
        echo '<td>' . $row["pat_lname"] . '</td>';
        echo '<td>' . $row["pat_fname"] . '</td>';
       
        echo '</tr>';
    }
} else {
    echo "0 results";
}

mysqli_close($con);
?>
