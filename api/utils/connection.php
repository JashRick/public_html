<?php

$db_name = "id20189319_db_mabisa";
$sname= "localhost";
//$uname= "root";
//$password = "";
$uname= "id20189319_mabisa";
$password = "{6!-Pu{+V9Uk4Hh(";
$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con)
{
	die("Error : ".mysqli_connect_error());
}
