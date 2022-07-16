<?php 
require_once ('process/dbh.php');
$sql = "SELECT * FROM `user` ";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel | Lost and Found thing Management System</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>Lost and Found thing Management System</h1>
			<ul id="navli">
				<li><a class="homeblack" href="addlost.php">Add lost items</a></li>
				<li><a class="homeblack" href="addfound.php">Add found items</a></li>
				<li><a class="homeblack" href="deletelitem.php">delete lost items</a> <li>
				<li><a class="homeblack" href="deletefitem.php">delete found items</a> <li>
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
			<h1 style="font-family: 'times new roman', cursive;text-color:white; font-weight: 200; font-size: 70px; margin-top: 50px; text-align:center;">HELLO ADMIN!!!</h1>
		</font>
	</div>
	
</body>
</html>