<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_name = "id20189319_db_mabisa";
$sname= "localhost";
$uname= "root";
$password = "";

$con = mysqli_connect($sname, $uname, $password, $db_name);

$id = $_GET['id'];
$sql = "DELETE FROM `tbl_adminreg` WHERE id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=dentist-list");
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