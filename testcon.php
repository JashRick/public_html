<?php

$sname= "localhost";
$uname= "root";
$password = "Ww&]&eWm4WfrAMlG";
$db_name = "id20189319_db_mabisa";


$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con)
{
    echo "dis";
	die("Error : ".mysqli_connect_error());
}
else
{
    echo "conn";
}

?>