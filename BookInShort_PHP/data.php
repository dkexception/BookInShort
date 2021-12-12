<?php
	session_start();	
	include 'connect.php';
	if(isset($_POST['meet'])){
		$lang = $_POST['lang'];
		$genre = $_POST['genre'];
		$name = $_POST['bookName'];
		$author = $_POST['authorName'];
		$dec = $_POST['decription'];
		$content = $_POST['inpu'];
		$uid = $_SESSION["userid"];
		$le_file = $_FILES['bookIcon']['name'];
		$uploaddir = "icons/";
		$uploadFile = $uploaddir.basename($le_file);
		$imageFileType = strtolower(pathinfo($uploadFile,PATHINFO_EXTENSION));
		$extensions_arr = array("jpg","jpeg","png","gif");
		if(in_array($imageFileType,$extensions_arr)){
			$bookEntry = "INSERT INTO `requests`(`uid`,`lang`, `genre`, `name`, `author`, `description`, `content`, `icon`) VALUES ('$uid','$lang','$genre','$name','$author','$dec','$content','$le_file')";
			if(mysqli_query($connect, $bookEntry)){
				$mg = "Book'll be added after admin approves it! You'll be notified about that.";
				echo '<script type="text/javascript">alert("' . $mg . '");window.location.replace("addBook.php");</script>';
				move_uploaded_file($_FILES['bookIcon']['tmp_name'],$uploaddir.$le_file);
			}
			else {
				$mg = "something is not right! Did you put an image properly ? Is your internet stable! smh.";
				echo '<script type="text/javascript">alert("' . mysqli_error($connect) . '");window.location.replace("addBook.php");</script>';
				echo mysqli_error($connect);
				//echo "Error!";
				print_r($_FILES);
			}
		
		}
	}

?>