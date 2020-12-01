

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
		<button id="top-button" class="blue-button">Log out</button>
	</header>
	<form action="php/upload.php" method="post" enctype="multipart/form-data">
		<br><br><br><br>
		<h4 style="color: white; text-align: center;">Enter Request Details</h4>
		<br>
		
		<br>
		<input type="text" name="PDF_title" placeholder="Enter a title for your pdf">
		<br><br><br>
		<h5 style="color: white; text-align: center;">Choose your pdf file for printing</h5>
		<br>

		<input type="file" name="PDF_File" placeholder="Add your file" style="height: 100px; text-align: center;" name="fileToUpload" id="fileToUpload">
        <br>
        <h5 style="color: white; text-align: center;">Number of copies</h5>
        <select name="Copies">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br><br><br><br><br>

		<input type="submit" value="Upload PDF" name="submit">
    </form>
    <a href="student.php">
    <button type="Button">Back</button>
    </a>
    <?php
//session_start();
    //include("php/upload.php");
    ?>
</body>
</html>