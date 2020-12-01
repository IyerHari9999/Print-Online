<?php
include("php/connection.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>PrintOnline Web Services</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<h3 id="brand-logo">PrintOnline</h3>
		<button id="top-button" class="white-button">Sign Out</button>
	</header>

	<div id="main-card">
		<h2>WELCOME DEAR USER !</h2>
		<h4>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </h4>
        <a href="request.php">
        <button id="card-button" class="white-button">Request</button>	
        </a>
	</div>

	<div id="left" class="section">

    <?php
        $user_UID=$_SESSION["CURRENT_USER"];
        $result=mysqli_query($connection,"SELECT * FROM  table_request WHERE UID='$user_UID'");
        
        echo "<h3>Your Recent Requests</h3>";

        echo "<table border='1'>";
            echo "<tr>";
            echo "<td>"."Request ID"."</td>"."<td>"."Title"."</td>"."<td>"."Pages"."</td>"."<td>"."Total Cost"."</td>"."<td>"."Status"."</td>";
            echo "</tr>";

        echo "<div class=card\">";
        echo "<div style=\"width: 80%; float: left;\">";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['Rid']."</td>"."<td>".$row['friendlyName']."</td>"."<td>".$row['pages']."</td>"."<td>".$row['price']."</td>"."<td>".$row['status']."</td>";
            echo "</tr>";
            
        }
        echo "</table>";
    ?>
	</div>

	<div id="vl"></div>
	<div id="right" class="section">
		<h3>Newest Archives</h3>
		<h5>
			<a class="link">TE Comps WD Module 1&emsp;12.8.2020, Wed</a><br>
			<a class="link">SE Comps Laplace Transformation&emsp;10.8.2020, Mon</a><br>
			<a class="link">MP Assembly Language&emsp;6.8.2020, Thur</a><br>
			<button type="submit" name="archives" class="blue-button" style="size: 90%; margin-top: 5px; border:solid .5px #2C2C96;">Archives</button>
		</h5>
		<br>
		<h3>Xeroz Center Time Slots</h3>
		<h5>
			Slot 1 - 9 am to 9:30 am &emsp;(Monday to Friday)<br>
			Slot 2 - 11 am to 11:30 am &emsp;(Monday to Sunday)<br>
			Slot 3 - 1 :30 pm to 2 pm &emsp;(Monday to Friday)<br>
			Slot 4 - 4:30 pm to 5 pm &emsp;(Monday to Friday)<br>
		</h5>
		
	</div>

</body>
</html>
