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
	<script type="text/javascript" src = "main.js"></script>
<body>
	<header>
		<div class = "logo">
			<h1>Book In Short</h1>
		</div>
		<nav>
			<div class="topnav" id="mnav">
				<a href = "addBook.php">Add Book</a>
				<a href = "viewBook.php">View Books</a>
				<a href = "javascript:void(0);" onclick = "retForm()">RESET</a>
				<a href = "logout.php" class = "flr">LOGOUT</a>
				<a href = "javascript:void(0);" class = "icon" onclick = "fun()">&#9776;</a>
			</div>
		</nav>
	</header></br>
	<section>
		<div class="mainInfo" style="width: 70%; overflow: scroll;">
			<form id = "morf" action="data.php" method="post" enctype="multipart/form-data">
				<label for="lang">Choose Language</label>
				<select name = "lang" id = "lang" required="">
					<option value="English" selected>English</option>
					<option value="Marathi">Marathi</option>
					<option value="Hindi">Hindi</option>
				</select>
				<label for="genre">Choose Genre</label>
				<select name = "genre" id = "genre" required="">
					<option value="Sci-fi" selected>Sci-fi</option>
					<option value="Novel">Novel</option>
					<option value="Poem">Poem</option>
				</select>
				<lable for = "bookIcon">Choose Icon </lable><input type="file" name = "bookIcon" id = "bookIcon" required="" />
				<input type="text" id = "bookName" name="bookName" placeholder="Enter book name" required="" />
				<input type="text" id = "authorName" name="authorName" placeholder="Enter author name" required="" />
				<input type="text" id = "decription" name="decription" placeholder="Enter description" required="" />
				<!--<input type="number" id = "tc" name="tabCount" placeholder="Enter tab count" onfocus="displayAlert()"/>
				<a href="javascript:void(0);" onclick="addTabs()">Add tabs</a>
				<div id = "mp"></div>-->
				<textarea name="inpu" placeholder="Enter content" required=""></textarea>
				<input type="submit" name = "meet" class="button" value="Submit" />
			</form>
		</div>
		<div class="modalProgress" id = "pm">
			<div class="modalContent"><center>
				<p>Please wait while data is being uploaded!</p>
				<div class="loader"></div></center>
			</div>		
		</div>
	</section></br></br>
	<footer>
		<div class = "foot">
			<p class = "content">Copyright &copy; 2017</p>
		</div>
	</footer>
	
</body>
</html>