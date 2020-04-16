<?php 
	require'header.html';
	include('registerLogic.php');
	?>

<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="background">
			<center>
				<form action="ParentRegistration.php" method="post">
					 <!-- <?php include('errors.php'); ?> -->
					<h1 class="stitle" style="color: #00a8cc; position: absolute; right: 275px;">Parent Register</h1> <br><br><br><br>
					<input type="text" name="pusername" placeholder="Username"> <br><br>
					<input type="text" name="pname" placeholder="Full Name"> <br><br>
					<input type="text" name="pemail" placeholder="Email"> <br><br>
					<input type="password" name="ppassword" placeholder="Password"> <br><br>
					<input type="password" name="ppasswordconfirm" placeholder="Confirm Password"> <br><br>
					<button class="sub" type='submit' name='pGO' value='Signup'>Sign Up</button><br><br>	
					<h1 class="extra">Already Have an account?</h1>
					<a href="ParentLogin.php"><button class="sub" type='submit' value='l'>Log In</button></a>
				</form>
			</center>
		</div>
	</body>
</html>