<?php
include("php/student_login.php");
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
	<form action="" method="POST">
		<br><br><br><br>
		<h4 style="color: white; text-align: center;">Enter your Log in Credentials</h4>
		<br>
		<input type="text" name="UserID" placeholder="User ID">
		<br><br>
		<input type="password" name="Password" placeholder="Password">
		<br><br>
		<button type="submit" name="submit" class="blue-button" style="width: 250px; border-radius: 100px;">Log in</button>
		<br><br>
		<a><h6 style="color: white; font-weight: normal;">Don’t have an account? Quickly create a new account now!</h6><a>
	</form>
	<br><h4 style="color: red"><span><?php echo $error; ?></span><h4><br>
</body>
</html>