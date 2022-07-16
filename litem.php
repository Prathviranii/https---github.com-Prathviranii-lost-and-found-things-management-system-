<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.html");
    exit;
}

require_once ('process/dbh.php');
$sql = "SELECT * from `litems_info` ";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>lost items </title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>lost and found system management system</h1>
			<ul id="navli">
				<li><a class="homeblack" href="uloginwel.php ">HOME</a></li>
				<li><a class="homered" href="litem.php ">lost items</a></li>
				<li><a class="homeblack" href="fitem.php ">found items</a></li>
				<li><a class="homeblack" href="logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>
                <th  style="align : center">ID </th>
				<th  style="align : center">Name</th>
                <th  style="align : center">usn</th>
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
					echo "<td>".$litems_info['usn']." </td>";
					echo "<td>".$litems_info['email']."</td>";
					echo "<td>".$litems_info['idate']."</td>";
					echo "<td>".$litems_info['contact']."</td>";
					echo "<td>".$litems_info['descri']."</td>";

				}


			?>

		</table>
		
	
</body>
</html>