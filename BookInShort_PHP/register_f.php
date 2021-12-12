<?php 
	include 'connect.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Book In Short Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="description" content="Book In Short is our android project">
		<meta name="author" content="mkdpro">
		<link rel="stylesheet" type="text/css" href="./css/main.css">
		<script type="text/javascript" src = "./main.js"></script>
	</head>
	<body>
		<header>
			<div class = "logo">
				<h1>Sign Up</h1>
			</div>
		</header></br>
		<section>
			<div class="mainInfo">
				<form method="post" id="form" onsubmit="miniValid()">
					<input name="first" type="name" placeholder="Enter first name" /><br>
					<input name="last" type="name" placeholder="Enter last name" /></br>
					<input name="email" type="email" placeholder="Enter email" onkeyress="miniValid()" onfocusout="miniValid()" /></br>
					<input name="pass" type="password" placeholder="Enter password" onfocusout="miniValid()" onkeypress="" /></br>
					<input type="submit" name="submit" value="Sign Up" class="button" style="display: block;" />
				</form>
				<a href="login.php">Already have an account! Login here.</a>
			</div>
		</section></br></br>
		<footer>
			<div class = "foot">
				<p class = "content">Copyright &copy; 2017</p>
			</div>
		</footer>
	</body>
</html>