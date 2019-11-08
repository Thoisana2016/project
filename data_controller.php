<?php

 include('new.php');


 	$email = mysql_real_escape_string(trim($_POST['email']));
 	$newPass = mysql_real_escape_string(trim($_POST['npwd']));
 	$cPass = mysql_real_escape_string(trim($_POST['cpwd']));\

 	if ($newPass == $cPass) {
 		// new password update 
 		$sql = ;

 	}
 	else{
 		//redirect to forgot page
 		header('Location: forgot_password.php');
 	}

?>