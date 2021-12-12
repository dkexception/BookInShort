<?php
include 'connect.php';
session_start();

$email = $_POST['email'];
$password = md5($_POST['pass']);

$sql_users = "SELECT * FROM `users` WHERE `email`='".$email."' AND `pass`='".$password."'";
$res_users = mysqli_query($connect, $sql_users);
if(mysqli_num_rows($res_users) < 1)
{
	$mg = "No user found with entered email & password combination!";
	session_unset();
	session_destroy();
	echo '<script type="text/javascript">alert("' . $mg . '");window.location.replace("login.php");</script>';
}
else
{
    $row_users = mysqli_fetch_array($res_users);
    $_SESSION["userid"] = $row_users['id'];
    $_SESSION["name"] = $row_users['first'];
    $_SESSION["email"] = $row_users['email'];
    $_SESSION["userType"] = $row_users['isAdmin'];
    if($_SESSION["userType"] == '1')
    	header("Location: admin.php");
    else
    	header("Location: user.php");
}
?>