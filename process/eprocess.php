<?php

require_once ('dbh.php');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * from `user` WHERE email = '$email' AND password = '$password'";
$sqlid = "SELECT id from `user` WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn , $sqlid);

$userid = "";
if(mysqli_num_rows($result) == 1){
	
	$user = mysqli_fetch_array($id);
	$userid = ($user['id']);
	
    session_start();
	$_SESSION["loggedin"]=true;
	$_SESSION["id"]=$id;
	$_SESSION["username"]=$fname;


	
	
	header("Location: ..//uloginwel.php?id=$userid");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>