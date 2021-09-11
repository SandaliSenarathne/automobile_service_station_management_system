<?php 
	include("../db.php");
	
	$fname = htmlspecialchars($_GET['email']);
	$lname = htmlspecialchars($_GET['email']);
	$phone = htmlspecialchars($_GET['email']);
	$address = htmlspecialchars($_GET['email']);
	$email = htmlspecialchars($_GET['email']);
	$password = htmlspecialchars($_GET['password']);
	$rePassword = htmlspecialchars($_GET['rePassword']);
	$hashedPassword= md5($password);

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

	$sql = "SELECT COUNT(*)
			FROM user
			WHERE email = '$email'";

	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	// print_r($row);

	if ($row['COUNT(*)']>0){
		echo "This e-mail is already taken. Looks like you are already registered. Try to login.";
	}else{
		$sql2 = "INSERT INTO user (email, first_name, last_name, phone, address, pwd) VALUES ('$email', '$fname', '$lname', '$phone', '$address', '$hashedPassword');";
		$result2 = $conn->query($sql2);
		if ($result2==1){
			$sql3 = "SELECT id
			FROM user
			WHERE email = '$email'";
			$result3 = $conn->query($sql3);
			$row2 = mysqli_fetch_assoc($result3);

			$_SESSION['user']['user_id'] = $row2['id'];
			$_SESSION['user']['email'] = $email;
			$_SESSION['user']['status'] = 1;
			$_SESSION['user']["login_time_stamp"] = time();
			
			echo "Sign Up Success";
		}
	}
	
	mysqli_close($conn);
?>
