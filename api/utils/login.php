<?php 

include("connection.php");

$auname = $_POST['admin_username'];
$apass = $_POST['admin_password'];
//$con = new mysqli_connect("localhost", "root", "", "id20189319_db_mabisa" ,"3306");

if(!($stmt = $con->prepare("SELECT * from tbl_adminreg WHERE admin_username = ?"))){
    echo "failed";
    echo $stmt;
    die("error 1".mysqli_stmt_error($stmt));
}else{
$stmt->bind_param("s", $auname);
$stmt->execute();
$stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if($data['admin_password'] === $apass) {
        header("Location: https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=dashboard");
        } else {
        echo '<script type="text/javascript">'; 
        echo 'alert("Username or Password is Incorrect"); '; 
        echo 'window.location = "../../pages/admin_login.php";';
        echo '</script>';
        }
    } else {
        echo '<script type="text/javascript">'; 
        echo 'alert("Invalid Username and Password"); '; 
        echo 'window.location = "../../pages/admin_login.php";';
        echo '</script>';
    }
}

mysqli_close($con);

?>
