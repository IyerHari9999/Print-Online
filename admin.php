
<?php
include("php/connection.php");
//session_start();
include("php/removeEntry.php");
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
		<button id="top-button" class="white-button">Log out</button>
	</header>

	<div id="main-card">
		<h2>WELCOME DEAR ADMIN !</h2>
		<h4>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</h4>
	</div>

	<div id="left" class="section">
        
    <?php
     $result=mysqli_query($connection,"SELECT * FROM  table_request ");
        
     //echo "<h3>Your Recent Requests</h3>";

     echo "<table border='1'>";
         echo "<tr>";
         echo "<td>"."Request ID"."</td>"."<td>"."Student ID"."</td>"."<td>"."Title"."</td>"."<td>"."Pages"."</td>"."<td>"."Total Cost"."</td>"."<td>"."Status"."</td>";
         echo "</tr>";

     echo "<div class=card\">";
     echo "<div style=\"width: 80%; float: left;\">";
     while($row = mysqli_fetch_array($result))
     {
		
		$tempVar1=$row['Rid'];
		$tempVar2=$row['UID'];
		$tempVar3=$row['friendlyName'];
		$tempVar4=$row['pages'];
		$tempVar5=$row['price'];
		$tempVar6=$row['status'];
		if($tempVar6=="rejected")
			continue;
         echo "<tr>";
		 echo "<form method=\"POST\" action=\" \" width=300px>";
		 echo "<td>";
		/* //echo" <input type\"text\" name=\"result\" value = \"<?php echo (isset($tempVar))?$tempVar:'';?>\"> "*/
		echo" <input type=\"text\" value=\"$tempVar1\" readonly name=\"ridField\"/> "
			."</td>"."<td>"."<input type=\"text\" value=\"$tempVar2\" readonly name=\"UIDField\"/> "
			."</td>"."<td>"."<input type=\"text\" value=\"$tempVar3\" readonly name=\"fnameField\"/> "
			."</td>"."<td>"."<input type=\"text\" value=\"$tempVar4\" readonly name=\"pageField\"/> "
			."</td>"."<td>"."<input type=\"text\" value=\"$tempVar5\" readonly name=\"priceField\"/> "
			."</td>"."<td>"."<input type=\"text\" value=\"$tempVar6\" readonly name=\"statusField\"/> ";
			/*."<td>".$row['UID']."</td>"
			."<td>".$row['friendlyName']."</td>".
			"<td>".$row['pages']."</td>".
			"<td>".$row['price']."</td>".
			"<td>".$row['status']."</td>";*/
		 //echo "<td> <input type='submit' name='submit-btn' value='Complete' />";
		/* echo "<td>";
		 echo "<button  type=\"submit\" name=\"submit\" class=\"blue-button\" style=\"width: 100px; border-radius: 100px;\">Mark Complete</button>";
		 echo "</td>";
		 echo "<td>";
		 echo "<button  type=\"submit\" name=\"submit\" class=\"blue-button\" style=\"width: 100px; border-radius: 100px;\">Remove</button>";
		 echo "</td>";
		*/

		echo "</td>"."<td>"."<select name=\"Status\">
			<option value=\"Queued\">Queued</option>
			<option value=\"Completed\">Completed</option>
			<option value=\"Reject\">Reject</option>
			</select>"."</td>";	
		echo "<td>";
		echo "<button  type=\"submit\" name=\"submit\" class=\"blue-button\" style=\"width: 100px; border-radius: 100px;\">Done</button>";
		echo "</td>";
		 echo "</form>";
		 echo "</tr>";

         
     }
     echo "</table>";   
    ?>

	<!--</div>

	<div id="vl"></div>
	<div id="right" class="section">
		<h3 style="display: inline-block; float: left; margin-top: 8px;">Validate Requests</h3>&emsp;
		<button type="submit" name="archives" class="blue-button" style=" border:solid .5px #2C2C96; float: right;">Validate</button>
		<h5 style="display: inline-block; float: unset; margin: 10px 0px 30px 0px;">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</h5>
		<br>

		<h3 style="display: inline-block; float: left; margin-top: 8px;">Make Supplier Request</h3>&emsp;
		<button type="submit" name="archives" class="blue-button" style=" border:solid .5px #2C2C96; float: right;">Request</button>
		<h5 style="display: inline-block; float: unset; margin: 10px 0px 30px 0px;">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</h5>
		
	</div>
	-->

</body>
</html>