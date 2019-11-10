<?php
	  
	  
	  include('new.php');
	  
	  $useremail=$_POST['email'];
	  $userpassword=$_POST['pwd'];
	  
	  if(isset($useremail) && isset($useremail)){
	
			$sql = "SELECT id, username, email, pass, type, isActive FROM register WHERE email ='$useremail'
				AND pass = '$userpassword'
				AND isActive=1";

			if (mysqli_query($conn, $sql)) {
				header("Location: courses.php");
			}
			else{
				$Message = "db_error";
				header('Location: login.php?m='.$Message);
			}

	  }
	  else
		{
			
			$Message ="pu_error".$useremail." ".$userpassword;
			header('Location: login.php?m='.$Message);
			
		}
	?>