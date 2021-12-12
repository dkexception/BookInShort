<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script type="text/javascript" src = "./main.js"></script>
</head>
<body>
	<header>
		<div class = "logo">
			<h1>Book In Short</h1>
		</div>
		<nav>
			<div class="topnav" id="mnav">
				<a href= "admin.php">Home</a>
				<a href = "reqBook.php">Active Requests</a>
				<a href = "viewBook.php">View Books</a>
				<a href = "logout.php" class = "flr">LOGOUT</a>
				<a href = "javascript:void(0);" class = "icon" onclick = "fun()">&#9776;</a>
			</div>
		</nav>
	</header></br>
	<section>
		<div class="mainInfo">
			<div class = "textArea">
				<h3><b><center>Welcome to Book in short! Here you can contribute to help growing this project further.</center></b></h3>
			</div>
		</div>
	</section>
	<footer>
		<div class = "foot">
			<p class = "content">Copyright &copy; 2017</p>
		</div>
	</footer>

</body>
</html>