<?php

require_once ('dbh.php');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * from `alogin` WHERE email = '$email' AND password = '$password'";
$sqlid = "SELECT id from `alogin` WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn , $sqlid);


$adminid = "";

if(mysqli_num_rows($result) == 1){
	$admin= mysqli_fetch_array($id);
	$adminid = ($admin['id']);

    session_start();
	$_SESSION["loggedin"]=true;
	$_SESSION["id"]=$id;
	$_SESSION["username"]=$fname;



	//echo ("logged in");
	header("Location: ..//aloginwel.php");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>