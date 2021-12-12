<?php  
	include 'connect.php';
	session_start();
	$books = "SELECT name,author,description FROM `book`";
	$res_books = mysqli_query($connect,$books);
	if(mysqli_num_rows($res_books) >= 1){
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
	else {
		echo "No books are available currently! Add some.";
	}
?>