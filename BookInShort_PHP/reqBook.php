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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src = "main.js"></script>
</head>
<body onload="fetch()">
	<header>
		<div class = "logo">
			<h1>Book In Short</h1>
		</div>
		<nav>
			<div class="topnav" id="mnav">
				<a href= "admin.php">Home</a>
				<a href = "reqBook.php">View Requests</a>
				<a href = "viewBook.php">View Books</a>
				<a href = "logout.php" class = "flr">LOGOUT</a>
				<a href = "javascript:void(0);" class = "icon" onclick = "fun()">&#9776;</a>
			</div>
		</nav>
	</header></br>
	<section><center>
		<div id = "mi">
		</div></center>
	</section></br></br>
	<div class="modalProgress" id = "pmo">
		<div class="modalContent"><center>
			<p>Response Text</p>
			<div>
				<input type="text" id = "reply" name="reply" placeholder="If yes why, If no why ?" required="" />
				<Button onclick = "manumit()">send</Button>
			</div></center>
		</div>		
	</div>
	<div class="modalProgress" id = "pm">
		<div class="modalContent"><center>
			<p>Please wait while email is being sent!</p>
			<div class="loader"></div></center>
		</div>		
	</div>
	<footer>
		<div class = "foot">
			<p class = "content">Copyright &copy; 2017</p>
		</div>
	</footer>
	<script type="text/javascript">
		var finalEmail, des, fiName;

		function post(path, params, method) {
		    method = method || "post";
		    var form = document.createElement("form");
		    form.setAttribute("method", method);
		    form.setAttribute("action", path);
		    for(var key in params) {
		        if(params.hasOwnProperty(key)) {
		            var hiddenField = document.createElement("input");
		            hiddenField.setAttribute("type", "hidden");
		            hiddenField.setAttribute("name", key);
		            hiddenField.setAttribute("value", params[key]);
		            form.appendChild(hiddenField);
		        }
		    }
		    document.body.appendChild(form);
		    form.submit();
		    document.getElementById("pm").style.display = "block";
		}

		function manumit(){
			var rep = document.getElementById("reply");
			post("reqHandle.php",{status:des,email:finalEmail,reply:rep.value,bname:fiName},"post");
			document.getElementById("pmo").style.display = "none";
		}
		function handle(e){
			document.getElementById("pmo").style.display = "block";
			var Row = document.getElementById(e.parentNode.parentNode.id);
			var Cells = Row.getElementsByTagName("td");
			finalEmail = Cells[0].innerText;
			fiName = Cells[1].innerText;
			des = e.text;
		}
	</script>
</body>
</html>