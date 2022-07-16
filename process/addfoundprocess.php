
<?php
require_once ('dbh.php');
    $id = $_POST['id'];
    $firstname = $_POST['fName'];
    $usn = $_POST['usn'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $descri = $_POST['descri'];
    $date =$_POST['idate']; 
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "image/".$filename;
    $sql = "INSERT INTO `fitems_info`(`id`, `fName`,`usn`,  `email`, `idate`, `contact`, `descri`, `pic`) VALUES ('$id','$firstname','$usn','$email','$date','$contact','$descri','$filename')";
    $result = mysqli_query($conn, $sql);
    if (move_uploaded_file($filename, $folder))  {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
  }
        

        if(($result) == 1){
    
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Succesfully Registered')
            window.location.href='..//deletefitem.php';
            </SCRIPT>");
            //header("Location: ..//aloginwel.php");
        }
        
        else{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Failed to Registere')
            window.location.href='javascript:history.go(-1)';
            </SCRIPT>");
        }
        
         ?>