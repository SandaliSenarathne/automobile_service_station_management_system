<?php 
	include("../db.php");
	
	$email = htmlspecialchars($_GET['email']);
	$password = htmlspecialchars($_GET['password']);
	$hashedPassword= md5($password);

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
	$sql = "SELECT COUNT(*), id, role 
			FROM user
			WHERE email = '$email' AND pwd='$hashedPassword'";

	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	
	if ($row['COUNT(*)']<1){
		echo "Invalid Credentials";
	}else if ($row['COUNT(*)']==1){
		$_SESSION['user']['user_id']= $row['id'];
		$_SESSION['user']['email']= $email;
		$_SESSION['user']['status']= 1;
		$_SESSION['user']["login_time_stamp"] = time();
		$_SESSION['user']['role']= $row['role'];
		if($row['role'] == '1'){
			echo "Admin";
		}else{
			echo "Login Success";
		}
		
	}
    mysqli_close($conn);
?>
