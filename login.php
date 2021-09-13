<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <div class="container-fluid" id="login">
        <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-body" align="center">
                <h1>Login</h1>
                <br>
                <!--Start Login Form-->
                <form class="login-form">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </form>
                <h5 id="errorMessage" style="color: red">
                    <?php 
                        if(isset($_SESSION['err'])){
                            echo $_SESSION['err'];
                            unset($_SESSION['err']);
                        }
                    
                    ?>
                </h5><br>
                <button type="button" class="btn btn-primary btn-lg" onClick="login()">Login</button>
                <br><br>
                <p>Don't have an account? <button type="button" onClick="location.href='signup.php'" class="btn btn-outline-dark btn-sm"><b>Create Account</b></button></p>
                <!--End Login Form-->
            </div>
            </div>
        </div>
        </div>
    </div>

    <?php include("importScripts.php"); ?>

</body>
</html>