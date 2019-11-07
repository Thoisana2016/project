<!DOCTYPE html>
<html lang="en">
      <?php
	  
	  
	  include('new.php');
	  
	  $username=$_POST['username'];
	  $useremail=$_POST['email'];
	  $userpassword=$_POST['password'];
	  $usertype=$_POST['type'];
	  
	  if(!$_POST['register'])
	  {
			echo "All the fields are required";
	  }
	  else
		{
			$sql="INSERT into register(username,email,password,type)
			values ('$username', '$useremail', '$userpassword', 'usertype')" ;
			
			if(mysqli_query($conn, $sql))
			{
				echo "Registered succesfully";
			}
			else{
			echo "Something went wrong try again with new username/email";
			}
		}
	?>
<head>
	<!-- meta tag -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- all the linked files and stylesheet -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/bootstrap.css">						
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">		
	<!-- scripts -->
	<script src="js/jquery-1.11.0.min.js">
	</script>
	<script src="js/bootstrap.min.js">
	</script>
</head>
<body>
<div class="signup-outer">
	<h1>An investment in knowledge pays the best interest.</h1>
	<div class="signup">
		<form action="signup.php" method="post">
			<table align="center">
				<tr>
					<td>User Name : </td>
					<td><input type="text" name="username" placeholder="Enter user name" required></td>
				</tr>
				<tr>
					<td>Email : </td>
					<td><input type="text" name="email" placeholder="Enter e-mail"required></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" required></td>
				</tr>
			</table>
			<input type="radio" name="type" required>Student
			<input type="radio" name="type" required>Faculty<br>
			<button class="btn btn-default" align="center" name="register" value="register">Register</button>
		</form>
		<p>Already a User? <a href="login.html">Log In</a></p>
	</div>
</div>
</body>
</html>