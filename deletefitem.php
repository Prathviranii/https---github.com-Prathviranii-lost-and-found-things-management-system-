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
//display



?>



<html>
<head>
	<title>delete found item </title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>lost and found system management system</h1>
			<ul id="navli">
				<li><a class="homeblack" href="addlost.php">Add lost items</a></li>
                <li><a class="homebalck" href="addfound.php">Add found items </a></li>
                <li><a class="homeblack" href="deletelitem.php">delete lost items </a></li>
                <li><a class="homered" href="deletefitem.php">delete found items </a> <li>
                <li><a class="homeblack" href="logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>
                <th  style="align : center">ID </th>
				<th  style="align : center">Name</th>
				<th  style="align : center">usn </th>
                <th  style="align : center">EMAIL </th>
				<th  style="align : center">Date</th>
                <th  style="align : center">Contact </th>
				<th  style="align : center">Description </th>
			</tr>

			<?php

                  $sql = "SELECT * from `fitems_info` ";

//echo "$sql";
                $result = mysqli_query($conn, $sql);
                  while($result1=mysqli_fetch_assoc($result))
                  {
                  ?>
                  <tr>
					  <td> <?php echo $result1['id'];?></td>
					  <td> <?php echo $result1['fName'];?></td>
					  <td> <?php echo $result1['usn'];?></td>
					  <td> <?php echo $result1['email'];?></td>
					  <td> <?php echo $result1['idate'];?></td>
					  <td> <?php echo $result1['contact'];?></td>
					  <td> <?php echo $result1['descri'];?></td>
				  </tr>
                  <?php

					echo "<td><a href=\"editf.php?id=$result1[id]\">Edit</a> | <a href=\"deletef.php?id=$result1[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
				

				
}

			?>

		</table>
		
	
</body>
</html>