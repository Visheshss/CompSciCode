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
				<form action="TeacherLogin.php" method="post">
					<?php include('errors.php'); ?>
					<h1 class="stitle" style="color: #400082; position: absolute; right: 275px;">Teacher Login</h1> <br><br><br><br><br>
					<input type="text" name="tusername" placeholder="Username"> <br><br><br>
					<input type="password" name="tpassword" placeholder="Password"> <br><br><br>
					<button class="sub" type='submit' name='tlGO' value='Signup'>Sign Up</button><br><br>	
					<h1 class="extra">Don't have an account?</h1>
					<a href="TeacherRegistration.php"><button class="sub"type='submit' value='l'>Register</button></a>
				</form>
			</center>
		</div>
	</body>
</html>