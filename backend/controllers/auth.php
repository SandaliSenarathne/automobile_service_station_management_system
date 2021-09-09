<?php

function login($email, $hashedPassword){
    //Connecting Database
	include("../db.php");
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
	$sql = "SELECT COUNT(*)
			FROM user
			WHERE email = '$email' AND pwd='$hashedPassword'";

	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	
	if ($row['COUNT(*)']<1){
		return "Invalid Credentials";
	}else if ($row['COUNT(*)']==1){
		$_SESSION['user']['email']= $email;
		$_SESSION['user']['status']= 1;
		$_SESSION['user']["login_time_stamp"] = time();
		return "Login Success";
	}
    mysqli_close($conn);
}

function hasLoggedIn() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION["user"]))
    {
        if(time()-$_SESSION['user']["login_time_stamp"] >86400) 
        {
            session_unset();
            session_destroy();
            return false;
        }else{
            return true;
        }
    }
    else
    {
        return false;
    }
}

?>