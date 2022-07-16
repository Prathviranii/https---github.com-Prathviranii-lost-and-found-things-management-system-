<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `litems_info` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['fName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$date = mysqli_real_escape_string($conn, $_POST['idate']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$description = mysqli_real_escape_string($conn, $_POST['descri']);
	





$result = mysqli_query($conn, "UPDATE `litems_info` SET `fName`='$firstname',`email`='$email',`idate`='$date',`contact`='$contact',`descri`='$description' WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='deletelitem.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `litems_info` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['fName'];
	$email = $res['email'];
	$contact = $res['contact'];
	$date = $res['idate'];
	$description = $res['descri'];
	
}
}

?>

<html>
<head>
	<title>delete lost items |</title>
	<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
	<header>
		<nav>
			<h1>delete lost item</h1>
			<ul id="navli">
				<li><a class="homeblack" href="addlost.php">Add lost items</a></li>
                <li><a class="homebalck" href="addfound.php">Add found items </a></li>
                <li><a class="homered" href="deletelitem.php">delete lost items </a></li>
                <li><a class="homeblack" href="deletefitem.php">delete found items </a> <li>
                <li><a class="homeblack" href="logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	

		<!-- <form id = "registration" action="edit.php" method="POST"> -->
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update lost item Info</h2>
                    <form id = "registration" action="editl.php" method="POST">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="fName" value="<?php echo $firstname;?>" >
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="idate" value="<?php echo $date;?>">
                                   
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="descri" value="<?php echo $description;?>">
                        </div>
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
