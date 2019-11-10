<?php

 include('new.php');

 	$username = mysql_real_escape_string(trim($_POST['username']));
 	$email = mysql_real_escape_string(trim($_POST['email']));
 	$newPass = mysql_real_escape_string(trim($_POST['npwd']));
 	$cPass = mysql_real_escape_string(trim($_POST['cpwd']));

 	if ($newPass == $cPass) {
 		// new password update 
 		$sql = "UPDATE `register` SET `pass`='$newPass' WHERE 
 		`username`='$username'
 		AND`email`='$email'";
 		if (mysqli_query($conn, $sql)) {
 			$msg = "suc";
 			header('Location: login.php?m='.$msg);
 		}
 	else{
 		$msg = "db_error";
 		header('Location: forgot_password.php?message='.$msg);
 	}

 	}
 	else{
 		//redirect to forgot page
 		$msg = "pwd_error";
 		header('Location: forgot_password.php?message='.$msg);
 	}

?>