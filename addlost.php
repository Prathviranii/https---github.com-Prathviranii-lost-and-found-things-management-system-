<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: alogin.html");
    exit;
}
require_once ('process/dbh.php');
$sql = "SELECT * from `fitems_info` ";
//echo "$sql";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Add lost item | lost and found things Management System</title>

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
            <h1>lost and found things management system</h1>
            <ul id="navli">
                <li><a class="homered" href="addlost.php">Add lost items</a></li>
                <li><a class="homeblack" href="addfound.php">Add found items</a></li>
                <li><a class="homeblack" href="deletelitem.php">delete lost items</a></li>
                <li><a class="homeblack" href="deletefitem.php">delete found items</a> <li>
                <li><a class="homeblack" href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">lost item Info</h2>
                    <form action="process/addlostprocess.php" method="POST" enctype="multipart/form-data">


                        

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" placeholder=" Name" name="fName" required="required">
                                </div>
                            </div>
                            
                        </div>



                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="id" name="id" required="required" >
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="usn" name="usn" required="required">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email" required="required">
                        </div>

                        <p>Date</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="DATE" name="idate" required="required">
                                   
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" name="contact" required="required" >
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Description" name="descri" required="required">
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
