<?php

require_once ('dbh.php');
$id = $_POST['id'];
$firstname = $_POST['fName'];
$usn= $_POST['usn'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$descri = $_POST['descri'];
$date = $_POST['idate'];


$sql = "INSERT INTO `litems_info`(`id`, `fName`,`usn`,  `email`, `idate`, `contact`,  `descri`) VALUES (' ','$firstname','$usn','$email','$date ','$contact','$descri')";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//deletelitem.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}
else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to register ')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

?>