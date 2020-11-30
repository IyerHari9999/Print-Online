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
		<h2>WELCOME RESPECTED TEACHER !</h2>
		<h4>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</h4>
		<button id="card-button" class="white-button">Request</button>	
	</div>

	<div id="left" class="section">
		<h3>Your Recent Requests</h3>
		<h6>
			<div class="card">
				<div style="width: 80%; float: left;">
				<div style="width: 65%; display: inline-block;">TE Comps WD Module 1</div>
				<div style="width: 25%; display: inline-block; color: #00FFF0;">Queued</div>
				<div style="width: 65%; display: inline-block;">13.8.2020, Thur</div>
				<div style="width: 25%; display: inline-block;">250 rupees</div>
				</div>

				<button type="submit" name="archives" class="blue-button" style="float: right; margin-top: 6px; font-size: 1.1vw; width: 90px; font-weight: lighter;">Status</button>
			</div>

			<div class="card">
				<div style="width: 80%; float: left;">
				<div style="width: 65%; display: inline-block;">TE Comps WD Module 1</div>
				<div style="width: 25%; display: inline-block; color: #ff0000;">Cancelled</div>
				<div style="width: 65%; display: inline-block;">13.8.2020, Thur</div>
				<div style="width: 25%; display: inline-block;">250 rupees</div>
				</div>

				<button type="submit" name="archives" class="blue-button" style="float: right; margin-top: 6px; font-size: 1.1vw; width: 90px; font-weight: lighter;">Status</button>
			</div>

			<div class="card">
				<div style="width: 80%; float: left;">
				<div style="width: 65%; display: inline-block;">TE Comps WD Module 1</div>
				<div style="width: 25%; display: inline-block; color: #00FF38;">Completed</div>
				<div style="width: 65%; display: inline-block;">13.8.2020, Thur</div>
				<div style="width: 25%; display: inline-block;">250 rupees</div>
				</div>

				<button type="submit" name="archives" class="blue-button" style="float: right; margin-top: 6px; font-size: 1.1vw; width: 90px; font-weight: lighter;">Status</button>
			</div>
		</h6>
	</div>

	<div id="vl"></div>
	<div id="right" class="section">
		<h3>Your Archives</h3>
		<h5>
			<a class="link">TE Comps WD Module 1&emsp;12.8.2020, Wed</a><br>
			<a class="link">SE Comps Laplace Transformation&emsp;10.8.2020, Mon</a><br>
			<a class="link">MP Assembly Language&emsp;6.8.2020, Thur</a><br>
			<a class="link">TE Comps WD Module 1&emsp;12.8.2020, Wed</a><br>
			<a class="link">SE Comps Laplace Transformation&emsp;10.8.2020, Mon</a><br>
			<a class="link">MP Assembly Language&emsp;6.8.2020, Thur</a><br>
			
		</h5>
		<br>
		<h3>Make a New Archive</h3>
		<h5>
			<button type="submit" name="archives" class="blue-button" style="width: 200px; margin-top: 5px; border:solid .5px #2C2C96;">Create new archive</button>
		</h5>
		
	</div>

</body>
</html>