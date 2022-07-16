<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	 $sql1 = "SELECT * FROM `user` where id = '$id'";
	 $result1 = mysqli_query($conn, $sql1);
	 $usern = mysqli_fetch_array($result1);
	 $userName = ($usern['fName']);

	 $sql = "SELECT * FROM `litems_info` WHERE id = $id";
	 $sql1 = "SELECT * FROM `fitems_info` WHERE id = $id";

	
//echo "$sql";
     $result = mysqli_query($conn, $sql);
     $result1 = mysqli_query($conn, $sql1);

?>



<html>
<head>
	<title>user  Panel | Lost and found thing  Management System</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
</head>
<body>
	
	<header>
		<nav>
			<h1>Lost and found thing  Management System</h1>
			<ul id="navli">
				<li><a class="homered" href="uloginwel.php ">HOME</a></li>
				<li><a class="homeblack" href="litem.php ">lost items</a></li>
				<li><a class="homeblack" href="fitem.php ">found items</a></li>
				<li><a class="homeblack" href="logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<style>
		body{background-image:url('https://tse4.mm.bing.net/th/id/OIP.0HiWi8kFkh5Tmm-VTh4soQHaEK?w=301&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7');
			background-repeat:no-repeat;
		    background-size:100% 100%;}
	</style>
	<div style="margin-top: 175px">
		<font color='white'>
			<h1 style="font-family: 'times new roman', cursive;text-color:white; font-weight: 200; font-size: 70px; margin-top: 50px; text-align:center;">Hello <?php echo ($usern['fName']) ;?></h1>
		</font>
	</div>
	
</body>
</html>