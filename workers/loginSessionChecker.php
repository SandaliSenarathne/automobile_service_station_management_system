<?php 
	function hasLoggedIn() {
		session_start();
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
