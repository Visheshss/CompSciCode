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
				<form action="" method="post">
					<?php include('errors.php'); ?>
					<h1 class="stitle" style="color: #400082; position: absolute; right: 275px;">Teacher Register</h1> <br><br><br><br>
					<input type="text" name="tusername" placeholder="Username"> <br><br>
					<input type="text" name="tname" placeholder="Full Name"> <br><br>
					<input type="text" name="temail" placeholder="Email"> <br><br>
					<input type="password" name="tpassword" placeholder="Password"> <br><br>
					<input type="password" name="tpasswordconfirm" placeholder="Confirm Password"> <br><br>
					<button class="sub" type='submit' name='tGO' value='Signup'>Sign Up</button><br><br>	
					<h1 class="extra">Already Have an account?</h1>
					<a href="TeacherLogin.php"><button class="sub"type='submit' value='l'>Log In</button></a>
				</form>
			</center>
		</div>
	</body>
</html>