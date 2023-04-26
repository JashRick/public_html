<?php
include("../api/utils/connection.php");

$pat_id = $_GET['patient_id'];
$sql = "DELETE FROM `tbl_clinicalexam` WHERE patient_id = $pat_id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=clinical-exam-list");
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