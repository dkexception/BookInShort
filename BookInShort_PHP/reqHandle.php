<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	require 'connect.php';
	if(isset($_POST['status']) && isset($_POST['email'])){
		if($_POST['status'] == 'Approve'){
			if($_POST['reply'] == '')
				$_POST['reply'] = "Congratulations! Book '".$_POST['bname']."' has been added to database!";
			sendMail("About Book in short book",$_POST['reply'],$_POST['email']);
			$to = "8698108192@vtext.com";
			$from = "dkexception@gmail.com";
			$me = "new text message\nBhari book";
			$headers = "From: $from\n";
			//mail($to, '', $me, $headers);
			$query = 'SELECT * FROM requests WHERE name = "'.$_POST['bname'].'";';
			$books = mysqli_query($connect,$query);
			if(mysqli_num_rows($books) == 1){
				$ro = mysqli_fetch_array($books);
				$userId = $ro['uid'];
				$lang = $ro['lang'];
				$genre = $ro['genre'];
				$name = $ro['name'];
				$author = $ro['author'];
				$de = $ro['description'];
				$con = $ro['content'];
				$icon = $ro['icon'];

				$in = "INSERT INTO `book`(`uid`,`lang`, `genre`, `name`, `author`, `description`, `content`,`icon`) VALUES ('$userId','$lang','$genre','$name','$author','$de','$con','$icon')";

				if(mysqli_query($connect,$in)){
					$del = 'DELETE FROM requests WHERE name = "'.$_POST['bname'].'";';
					mysqli_query($connect,$del);
					echo '<script type="text/javascript">alert("Message has been sent");window.location.replace("reqBook.php");</script>';
				}
				else echo '<script type="text/javascript">alert(Message could not be sent. "' . $mail->ErrorInfo . '");window.location.replace("reqBook.php");</script>';
			}
		}
		elseif ($_POST['status'] == 'Reject') {
			if($_POST['reply'] == '')
				$_POST['reply'] = "something is not right! Your book '".$_POST['bname']."' may have some problem! Contact admin for further details.";
			sendMail("About Book in short book",$_POST['reply'],$_POST['email']);
			$del = 'DELETE FROM requests WHERE name = "'.$_POST['bname'].'";';
			mysqli_query($connect,$del);
			echo '<script type="text/javascript">alert("Message has been sent");window.location.replace("reqBook.php");</script>';
		}
		
	}
	echo '<script type="text/javascript">alert(Message could not be sent. "' . $mail->ErrorInfo . '"); window.location.replace("reqBook.php");</script>';

	function sendMail($subject,$body,$email){
		$mail = new PHPMailer;
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'dkexception@gmail.com';        // SMTP username
		$mail->Password = 'dhanesh.katre1997';                      // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to
		$mail->setFrom('Admin', 'Book in short Team');
		$mail->addAddress($email);
		$mail->Subject = $subject;
		$mail->Body    = $body;
		$mail->AddAddress( "8698108192@vtext.com" );
		if(!$mail->send()) {
		    echo "error";
		} else {
		    echo "success";
		}
	}	
?>