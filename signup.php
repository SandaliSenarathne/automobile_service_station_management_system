<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <?php include("importStyles.php"); ?>
</head>
<body>
    <div class="container-fluid" id="signup">
        <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-body" align="center">
                <h1>Create Account</h1>
                <!--Start SignUp Form-->
                <form class="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="address" placeholder="Home Address" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="reEnterPassword" placeholder="Re-enter Password">
                    </div>
                </form>
                <button type="button" class="btn btn-primary btn-lg">Sign Up</button>
                <br>
                <p>Already have an account? <button type="button" onClick="location.href='login.php'" class="btn btn-outline-dark btn-sm"><b>Login</b></button></p>
                <!--End SignUp Form-->
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
                            loadWelcome();
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