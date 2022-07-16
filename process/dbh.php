<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "lost_found";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>