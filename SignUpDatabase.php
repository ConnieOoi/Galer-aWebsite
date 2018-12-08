<?php

include 'DatabaseLink.php';

$username= $_POST['username'];
$password = $_POST['password'];	
$email = $_POST['email'];
$conpassword = $_POST['conpassword'];

    if(empty($_POST['username'])){

		header("Location: Register.php");
		exit();
	}
	
	//Validate the password 
	if (empty($_POST['password'])){
		header("Location: Register.php");
		exit();
	}
	
	
	//Check the two passwords for equality:
	if ($_POST['password'] != $_POST['conpassword']) {
		header("Location: Register.php");
		exit();
	}
	
    if(empty($_POST['email'])){
		header("Location: Register.php");
		exit();
	}
	
	else {
		$sql= "SELECT username FROM users WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);
		if($uidcheck > 0) {
			print '<p class="error">Username Existed!.</p>';
			exit();
		} 
		//If there were no errors, print a success message: 
		else {
			$sql = "INSERT INTO users (username,password,email)
			VALUES ('$username','$password','$email')";
			$result = mysqli_query($conn, $sql);
			
			print '<p>You have been successfully registered.</p>';
			header("Location: Login.php");
		}
	}	
	
?>