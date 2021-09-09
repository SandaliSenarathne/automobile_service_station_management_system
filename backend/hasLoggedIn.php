<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION["user"]))
{
    if(time()-$_SESSION['user']["login_time_stamp"] >86400) 
    {
        session_unset();
        session_destroy();
        echo false;
    }else{
        echo true;
    }
}
else
{
    echo false;
}
?>