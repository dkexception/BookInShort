<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script type="text/javascript" src = "main.js"></script>
</head>
<body>
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
		<input type="button" class="button" name="fC" value="Current Books" onclick = "fetchCurrent()" style="width: 30%" />
		<input type="button" class="button" name="fP" value="Pending Books" onclick = "fetchPending()" style="width: 30%"/>
		<div id = "mi">
		</div></center>
	</section></br></br>
	<footer>
		<div class = "foot">
			<p class = "content">Copyright &copy; 2017</p>
		</div>
	</footer>
	
	<script type="text/javascript">
		function fetchCurrent(){
			if (window.XMLHttpRequest) {
		        xmlhttp = new XMLHttpRequest();
		    } else {
		        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		    }
		    xmlhttp.onreadystatechange = function() {
		        if (this.readyState == 4 && this.status == 200) {
		        	var newElement = document.createElement('div');
					newElement.innerHTML = this.responseText;
					document.getElementById("mi").innerHTML = '';
					document.getElementById("mi").classList.remove('mainInfo');
					document.getElementById("mi").appendChild(newElement);
		        }
		    };
		    xmlhttp.open("GET","getMyBook.php?1",true);
		    xmlhttp.send();	
		}

		function fetchPending(){
			if (window.XMLHttpRequest) {
		        xmlhttp = new XMLHttpRequest();
		    } else {
		        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		    }
		    xmlhttp.onreadystatechange = function() {
		        if (this.readyState == 4 && this.status == 200) {
		        	var newElement = document.createElement('div');
					newElement.innerHTML = this.responseText;
					document.getElementById("mi").innerHTML = '';
					document.getElementById("mi").classList.add('mainInfo');
					document.getElementById("mi").appendChild(newElement);
		        }
		    };
		    xmlhttp.open("GET","getMyBook.php?3",true);
		    xmlhttp.send();	
		}
	</script>
</body>
</html>