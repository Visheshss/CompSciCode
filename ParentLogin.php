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
				<form action="ParentLogin.php" method="post">
					 <!-- <?php include('errors.php'); ?> -->
					<h1 class="stitle" style="color: #00a8cc; position: absolute; right: 275px;">Parent Login</h1> <br><br><br><br><br>
					<input type="text" name="pusername" placeholder="Username"> <br><br><br>
					<input type="password" name="ppassword" placeholder="Password"> <br><br><br>
					<button class="sub" type='submit' name='plGO' value='Signup'>Sign Up</button><br><br><br>	
					<h1 class="extra">Don't have an account?</h1>
					<a href="ParentRegistration.php"><button class="sub" type='submit' value='l'>Register</button></a>
				</form>
			</center>
		</div>
	</body>
</html>