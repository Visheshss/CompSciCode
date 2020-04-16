<?php

session_start();

$dUsername = '';
$dPassword = '';
$dPasswordConfirm = '';
$dEmail = '';
$dName = '';
$errors = array();
//Variables are created.

$dbase = mysqli_connect('localhost', 'root', '', 'users');
//MySQLi database is connected

if (isset($_POST['tlGO'])) {
//This code is used if a teacher is registering by checking which button is used
	$dUsername = mysqli_real_escape_string($dbase, $_POST['tusername']);
	$dEmail = mysqli_real_escape_string($dbase, $_POST['temail']);
	$dName = mysqli_real_escape_string($dbase, $_POST['tname']);
	$dPassword = mysqli_real_escape_string($dbase, $_POST['tpassword']);
	$dPasswordConfirm = mysqli_real_escape_string($dbase, $_POST['tpasswordconfirm']);
	//Variables are connected to HTML POST method forms based on 'name' values.

	if (empty($dUsername) || empty($dEmail) || empty($dName) || empty($dPassword) || empty($dPasswordConfirm)) {
		array_push($errors, "Please fill out all fields.");
	}

	if ($dPassword !== $dPasswordConfirm) {
		array_push($errors, "Passwords do not match.");
	}
	//Basic error checks are done, including checking if the two passwords match and that all fields are filled.

	$uname_check = "SELECT * FROM teacherusers1 WHERE tUsername = '$dUsername' OR tEmail = '$dEmail' LIMIT 1";
	$res = mysqli_query($dbase, $uname_check);
	$uname = mysqli_fetch_assoc($res);

	if ($uname) {
		if ($uname['tUsername'] == $dUsername || $uname['tEmail'] == $dEmail) {
			array_push($errors, "Username or email is already taken.");
		}
	}
	//A search is done in the table containing teacher users to check if the used email and username exist already.

	if (count($errors) == 0) {

		$dPassword1 = md5($dPassword);

		$query = "INSERT INTO teacherusers1 (tUsername, tEmail, tPassword, tNAME)
		VALUES('$dUsername', '$dEmail', '$dPassword1', '$dName')";
		mysqli_query($dbase, $query);
		$_SESSION['tUsername'] = $dUsername;
		$_SESSION['success'] = "You are now logged in";
		header('location: home.html');
	
	}
	//It is checked whether or not any errors are found. If none are found the information is stored into a the teacher users table in the database, each under the approate collumn
} 

if (isset($_POST['plGO'])) {
	//This code is used if a parent is registering by checking which button is used

	$dUsername = mysqli_real_escape_string($dbase, $_POST['pusername']);
	$dEmail = mysqli_real_escape_string($dbase, $_POST['pemail']);
	$dName = mysqli_real_escape_string($dbase, $_POST['pname']);
	$dPassword = mysqli_real_escape_string($dbase, $_POST['ppassword']);
	$dPasswordConfirm = mysqli_real_escape_string($dbase, $_POST['ppasswordconfirm']);


	if (empty($dUsername) || empty($dEmail) || empty($dName) || empty($dPassword) || empty($dPasswordConfirm)) {
		array_push($errors, "Please fill out all fields.");
	}

	if ($dPassword !== $dPasswordConfirm) {
		array_push($errors, "Passwords do not match.");
	}

	$uname_check = "SELECT * FROM parentusers1 WHERE pUsername = '$dUsername' OR pEmail = '$dEmail' LIMIT 1";
	$res = mysqli_query($dbase, $uname_check);
	$uname = mysqli_fetch_assoc($res);

	if ($uname) {
		if ($uname['tUsername'] == $dUsername || $uname['tEmail'] == $dEmail) {
			array_push($errors, "Username or email is already taken.");
		}
	}

	if (count($errors) == 0) {

		$dPassword1 = md5($dPassword);

		$query = "INSERT INTO parentusers1 (pUsername, pEmail, pPassword, pNAME)
		VALUES('$dUsername', '$dEmail', '$dPassword1', '$dName')";
		mysqli_query($dbase, $query);
		$_SESSION['tUsername'] = $dUsername;
		$_SESSION['success'] = "You are now logged in";
		header('location: home.html');
	
	}
	
} 