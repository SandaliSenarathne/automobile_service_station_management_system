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
                <h5 id="errorMessage" style="color: red"></h5><br>
                <button type="button" class="btn btn-primary btn-lg" onClick="checkUser()">Login</button>
                <br><br>
                <p>Don't have an account? <button type="button" onClick="location.href='signup.php'" class="btn btn-outline-dark"><b>Create Account</b></button></p>
                <!--End Login Form-->
            </div>
            </div>
        </div>
        </div>
    </div>

    <?php include("importScripts.php"); ?>

    <script type="text/javascript" >
        function checkUser() {
            document.getElementById("errorMessage").innerHTML = "<div class='spinner-border text-primary' role='status'><span class='sr-only'>Loading...</span></div>";
            var xhttp;
            var str1 = document.getElementById("email").value;
            var str2 = document.getElementById("password").value;
            
            if ((str1=="" || str2=="")){
                document.getElementById("errorMessage").innerHTML = "Please fill all the fields";
            }else if (!isValidEmail(str1)){
                document.getElementById("errorMessage").innerHTML = "Invalid e-mail address";
            }else {
            
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    
                        if(this.responseText == "Login Success"){
                            document.getElementById("errorMessage").innerHTML = this.responseText;
                        }else{
                            document.getElementById("errorMessage").innerHTML = this.responseText;
                        }
                        
                    }
                };
                xhttp.open('GET', "backend/login.php?email="+str1+"&password="+str2, true);
                xhttp.send();
            }
        }

        function isValidEmail(mail) {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
                return true;
            }else{
                return false;
            }
        }
    </script>

</body>
</html>