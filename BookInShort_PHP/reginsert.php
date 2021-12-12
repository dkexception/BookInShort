<?php
	include 'connect.php';
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$password=md5($_POST['pass']);

	$sql_users = "SELECT * FROM `users` WHERE `email`='".$email."' AND `pass`='".$password."'";
	$res_users = mysqli_query($connect, $sql_users);
	if(mysqli_num_rows($res_users) > 0){
		$mg = "Account already exists! Please try again.";
	    header("Location: register.php");
	    echo "<script type='text/javascript'>alert('$mg');</script>";
	}
	else{
		$sql_users="INSERT INTO users(first,last,email,pass) VALUES ('$first','$last','$email','$password')";
		if(mysqli_query($connect, $sql_users)){
		    header("Location: login.php");
		} 
		else{
			echo("Error description: " . mysqli_error($con));
			$mg = "Registration Unsuccessful, Please try again";
			echo '<script type="text/javascript">alert("' . mysqli_error($con) . '");window.location.replace("register.php");</script>';
		}
	}
?>