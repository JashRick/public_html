<?php

$db_name = "id20189319_db_mabisa";
$sname= "localhost";
//$uname= "id20189319_mabisa";
//$password = "CjvKBx>duE(%2D9g";
$uname= "root";
$password = "";
$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con)
{
	die("Error : ".mysqli_connect_error());
}
