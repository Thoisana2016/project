<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forfot Password</title>
	
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
	<!--<script src="js/vendor/jquery-1.11.0.min.js">
	</script>-->
	<!--<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="js/vendor/bootstrap.min.js">
	</script>-->

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="signup-outer">
	<h1>An investment in knowledge pays the best interest.</h1>
	<div class="signup">
		<?php
		if (isset($_GET['message'])) {

			$msg  = $_GET['message'];
			 if ($msg == "pwd_error") {
			 	# code...
			 	?>
			 		<div class="container-fluid">
			 			<div class="col-sm-12">
			 				<div class="alert alert-warning alert-dismissible fade show" role="alert">
							  <strong>Password</strong> miss match!
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
							  <strong>Something went wrong!</strong>
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
		<form action="data_controller.php" method="post">
			<table align="center">
				<tr>
					<td>Username : </td>
					<td><input type="text" name="username" placeholder="Enter Username" required /></td>
				</tr>
				<tr>
					<td>E-mail : </td>
					<td><input type="email" name="email" placeholder="Enter Email" required /></td>
				</tr>
				<tr>
					<td>New Password: </td>
					<td><input type="password" name="npwd" placeholder="Enter New Password" required /></td>
				</tr>
				<tr>
					<td>Confirm Password: </td>
					<td><input type="password" name="cpwd" placeholder="Enter Confirm Password" required/></td>
				</tr>
			</table>
			<button class="btn btn-default" type="submit" align="center">Submit</button>
	</div>
</div>
</body>
</html>
