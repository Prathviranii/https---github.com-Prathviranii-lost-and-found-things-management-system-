<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: alogin.html");
    exit;
}
require_once ('process/dbh.php');
$sql = "SELECT * from `litems_info` ";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>delete lost item </title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>lost and found system management system</h1>
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
				while ($litems_info = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$litems_info['id']."</td>";
					echo "<td>".$litems_info['fName']." </td>";
					echo "<td>".$litems_info['usn']."</td>";
					echo "<td>".$litems_info['email']."</td>";
					echo "<td>".$litems_info['idate']."</td>";
					echo "<td>".$litems_info['contact']."</td>";
					echo "<td>".$litems_info['descri']."</td>";

					echo "<td><a href=\"editl.php?id=$litems_info[id]\">Edit</a> | <a href=\"deletel.php?id=$litems_info[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>