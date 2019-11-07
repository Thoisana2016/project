<?php
	  
	  
	  include('new.php');
	  
	  $username=$_POST['username'];
	  $useremail=$_POST['email'];
	  $userpassword=$_POST['password'];
	  $usertype=$_POST['type'];
	  
	  if(!$_POST['register']){
	
			echo "All the fields are required";
	  }
	  else
		{
			$sql="INSERT into register(username,email,password,type)
			values ('$username', '$useremail', '$userpassword', 'usertype')" ;
			
			if(mysqli_query($conn, $sql))
			{
				//echo "Registered succesfully";
				$Message = "Success";
				header("Location: afterSignup.php?Message=" . urlencode($Message));
			}
			else{
			echo "Something went wrong try again with new username/email";
			}
		}
	?>