<?php

include("../api/utils/connection.php");

$id = $_GET['id'];
$fname = $_GET['fullname'];
$username = $_GET['username'];
$email = $_GET['email'];
$pass = $_GET['password'];
$repass = $_GET['repassword'];

if ($pass == $repass) {
   $sql = "UPDATE `tbl_adminreg` SET admin_fullname = '$fname', admin_username = '$username', admin_password = '$pass', admin_repassword = '$repass' WHERE id = '$id'";

   if(mysqli_query($con, $sql)) {
      header("Location: ../pages/admin_reg.php?status=success&message=Update Successfully!");
   } else {
      header("Location: ../pages/admin_reg.php?status=error&message=Something went wrong.");
   }
} else {
   header("Location: ../pages/admin_reg.php?status=error&message=Passwords do not match.");
}

mysqli_close($con);

?>
