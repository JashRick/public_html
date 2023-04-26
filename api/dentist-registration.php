<?php

include("../api/utils/connection.php");

$fname = $_GET['fullname'];
$username = $_GET['username'];
$email = $_GET['email'];
$pass = $_GET['password'];
$repass = $_GET['repassword'];

if ($pass == $repass) {
   $sql = "INSERT INTO `tbl_adminreg`(`admin_fullname`, `admin_username`, `admin_email`, `admin_password`, `admin_repassword`) VALUES ('$fname', '$username', '$email', '$pass', '$repass')";

   if(mysqli_query($con,$sql)) {
      header("location: ../pages/admin_reg.php?status=success&message=Registration Succesfully!");
   } else {
      header("location: ../pages/admin_reg.php?status=error&message=Something went wrong.");
   }
} else {
   header("location: ../pages/admin_reg.php?status=error&message=Password not matched.");
}

mysqli_close($con);