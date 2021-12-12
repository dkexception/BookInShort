<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script type="text/javascript" src = "main.js"></script>
</head>
<body onload="fetchBook()">
	<header>
		<div class = "logo">
			<h1>Book In Short</h1>
		</div>
		<nav>
			<div class="topnav" id="mnav">
				<a href = "addBook.php">Add Book</a>
				<a href = "viewBook.php">View Books</a>
				<a href = "myBooks.php">My books</a>
				<a href = "logout.php" class = "flr">LOGOUT</a>
				<a href = "javascript:void(0);" class = "icon" onclick = "fun()">&#9776;</a>
			</div>
		</nav>
	</header></br>
	<section><center>
		<div id = "mi">
		</div></center>
	</section></br></br>
	<footer>
		<div class = "foot">
			<p class = "content">Copyright &copy; 2017</p>
		</div>
	</footer>
	
</body>
</html>