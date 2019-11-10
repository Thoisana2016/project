<!DOCTYPE html>
<html lang="en">
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
	<!--<script src="js/jquery-1.11.0.min.js">
	</script>
	<script src="js/bootstrap.min.js">
	</script>-->

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="signup-outer">
	<h1>An investment in knowledge pays the best interest.</h1>
	<div class="signup">
		<?php
		if (isset($_GET['m'])) {

			$msg  = $_GET['m'];
			 if ($msg == "pu_error") {
			 	# code...
			 	?>
			 		<div class="container-fluid">
			 			<div class="col-sm-12">
			 				<div class="alert alert-warning alert-dismissible fade show" role="alert">
							  <strong>Username or Password </strong> is wrong!
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-top: 0px; margin-bottom: 0px;">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>
			 			</div>
			 		</div>
			 	<?php
			 }
			 if ($msg == "db_error") {
			 	# code...
			 	?>
			 		<div class="container-fluid">
			 			<div class="col-sm-12">
			 				<div class="alert alert-warning alert-dismissible fade show" role="alert">
							  <strong>Something went wrong! </strong>
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-top: 0px; margin-bottom: 0px;">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>
			 			</div>
			 		</div>
			 	<?php
			 }
			  if ($msg == "suc") {
			 	# code...
			 	?>
			 		<div class="container-fluid">
			 			<div class="col-sm-12">
			 				<div class="alert alert-success alert-dismissible fade show" role="alert">
							  <strong>Successfully Update the Password! </strong>
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-top: 0px; margin-bottom: 0px;">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>
			 			</div>
			 		</div>
			 	<?php
			 }
		}
		?>
		<form action="login_process.php" method="post">
			<table align="center">
				<tr>
					<td>E-mail : </td>
					<td><input type="email" name="email" placeholder="Enter email"/ required></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="pwd" placeholder="Enter password" required /></td>
				</tr>
			</table>
			<button class="btn btn-default" type="submit" align="center">LogIn</button>
		</form>
		<a href="forgot_password.php">Forgot Password ?</a>
		<br><br>
		<p>Not a member yet? Welcome on board -  <button class="btn btn-default btn-xs"><a href="signup.php">Sign up</a></button> now!</p>
	</div>
</div>
</body>
</html>