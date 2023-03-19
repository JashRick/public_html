<?php
include("../api/utils/connection.php");

$id = $_GET['id'];
$sql = "DELETE FROM `tbl_adminreg` WHERE id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: ../admin/pages/admin.php?page=dentist-list");
}
else{
    echo "Failed: " . mysqli_error($con);
}
?>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>