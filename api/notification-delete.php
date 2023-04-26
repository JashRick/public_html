<?php
include("../api/utils/connection.php");

$id = $_GET['id'];
$sql = "DELETE FROM `tbl_notification` WHERE id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=dashboard");
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