<?php 
	include("controllers/auth.php");
	
	$email = htmlspecialchars($_GET['email']);
	$password = htmlspecialchars($_GET['password']);
	$hashedPassword= md5($password);

	echo login($email, $hashedPassword);
?>
