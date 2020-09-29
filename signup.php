<?php
include("php/student_SignUp.php");
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
	</header>
	<form method="POST" action="">
		<br><br>
		<h4 style="color: white; text-align: center;">Enter The Following Details</h4>
		<br>
		<input type="text" name="UserID" placeholder="Enter Your College ID">
		<br><br>
		<input type="text" name="fname" placeholder="First name" style="width: 198px;">
		<input type="text" name="lname" placeholder="Last name" style="width: 148px;">
		<br><br>
		<select name="Department">
			<option value="COMPS">COMPS</option>
			<option value="EXTC">EXTC</option>
			<option value="MECH">MECH</option>
			<option value="IT">IT</option>
		</select>
		<br><br>
		<input type="password" name="Password" placeholder="Enter a new password">
		<br><br>
		<input type="password" name="Re-Password" placeholder="Re-enter new password">
		<br><br>
		<input type="submit"  />
		<br><br>
		<a href="login.php"><h6 style="color: white; font-weight: normal;">I have an account already ? Log in right now!  </h6><a>
		<br><h4 style="color: red"><span><?php echo $error; ?></span><h4><br>
	</form>
	
</body>
</html>
