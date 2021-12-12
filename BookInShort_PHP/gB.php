<?php  
	include 'connect.php';
	session_start();
	if($_SESSION["userType"] == '0'){
		$books = "SELECT name,author,description FROM `books`";
		$res_books = mysqli_query($connect,$books);
		echo "
		<center>
		<table style='border: solid 1px black;background:#ffffff;width: 80%'>
			<tr>
				<th>Name</th>
				<th>Author</th>
				<th>Description</th>
			</tr>
		";
		while($ro = mysqli_fetch_array($res_books)){
			echo '<tr>';
			echo '<td><a href = "getContent.php?name='.$ro["name"].'">'.$ro['name'].'</a></td>';
			echo "<td>".$ro['author']."</td>";
			echo "<td>".$ro['description']."</td>";
			echo '</tr>';
		}
		echo "</table></center>";
	}
	elseif ($_SESSION["userType"] == '1') {
		$books = "SELECT users.email, requests.* FROM users INNER JOIN requests on users.id = requests.uid";
		$res_books = mysqli_query($connect,$books);
		if(mysqli_num_rows($res_books) < 1)
			echo "<div class = 'mainInfo'>No new requests are present!</div>";
		else {
			echo "
			<center>
			<table style='border: solid 1px black;background:#ffffff;'>
				<tr>
					<th>User Email</th>
					<th>Name</th>
					<th>Author</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
			";
			while($ro = mysqli_fetch_array($res_books)){
				echo '<tr id = "ro'.$ro["id"].'">';
				echo '<td>'.$ro["email"].'</td>';
				echo '<td><a href = "getContent.php?name='.$ro["name"].'">'.$ro['name'].'</a></td>';
				echo "<td>".$ro['author']."</td>";
				echo "<td>".$ro['description']."</td>";
				echo "<td><a href = 'javascript:void(0);' onclick = 'handle(this);'>Approve</a>&nbsp;<a href = 'javascript:void(0);' onclick = 'handle(this);'>Reject</a></td>";
				echo '</tr>';
			}
			echo "</table></center>";
		}
	}

?>