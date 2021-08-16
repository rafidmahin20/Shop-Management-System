<?php

$sname= "localhost";
$bname= "root";
$password= "";

$db_name= "bdata_db";

$conn= mysqli_connect($sname, $bname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed";
}