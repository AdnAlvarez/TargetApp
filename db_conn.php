<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "targetdb";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Conexion fallida";
	exit();
}