function hasLoggedIn() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            
            if(this.responseText == "true"){
                return true;
            }else if(this.responseText == "true"){
                return false;
            }
                
        }
    };
    xhttp.open('GET', "backend/hasLoggedIn.php", true);
    xhttp.send();
}

function isValidEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
        return true;
    }else{
        return false;
    }
}

function login() {
    // document.getElementById("errorMessage").innerHTML = "<div class='spinner-border text-primary' role='status'><span class='sr-only'>Loading...</span></div>";
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
                    window.location.href = "index.php";
                }else{
                    document.getElementById("errorMessage").innerHTML = this.responseText;
                }
                
            }
        };
        xhttp.open('GET', "backend/login.php?email="+str1+"&password="+str2, true);
        xhttp.send();
    }
}

function requestService(service_type){
    // vehicleNumber
    // vehicleBrand
    // vehicleModel
    // rdate
    // rtime
    // message
    // Get data first
    var vehicleNumber = document.getElementById("vehicleNumber").value;
    var vehicleBrand = document.getElementById("vehicleBrand").value;
    var vehicleModel = document.getElementById("vehicleModel").value;
    var rdate = document.getElementById("rdate").value;
    var rtime = document.getElementById("rtime").value;
    var message = document.getElementById("message").value;
    var err = document.getElementById("err");
    var success = document.getElementById("success");
    // validate those fileds 

    if(vehicleNumber == ""){
        err.innerHTML = "Please Enter Your Vehicle Number";
        return;
    }

    if(vehicleBrand == ""){
        err.innerHTML = "Please Enter Your Vehicle Brand";
        return;
    }

    if(vehicleModel == ""){
        err.innerHTML = "Please Enter Your Vehicle Model";
        return;
    }

    if(rdate == ""){
        err.innerHTML = "Please Enter a Date";
        return;
    }

    if(rtime == ""){
        err.innerHTML = "Please Enter a Time";
        return;
    }

   // handle request here
   err.innerHTML = "";
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            
                if(this.responseText == "New record created successfully"){
                    success.innerHTML = this.responseText;
                }else{
                    err.innerHTML = this.responseText;
                }
                
            }
        };
        xhttp.open('GET', "backend/addRequestHandler.php?vehicleNumber="+vehicleNumber+"&vehicleBrand="+vehicleBrand+"&vehicleModel="+vehicleModel+"&rdate="+rdate+"&rtime="+rtime+"&message="+message+"&service_type="+service_type, true);
        xhttp.send();

}

function signUp() {
    // document.getElementById("errorMessage").innerHTML = "<div class='spinner-border text-primary' role='status'><span class='sr-only'>Loading...</span></div>";
    var xhttp;
    var fname = document.getElementById("firstName").value;
    var lname = document.getElementById("lastName").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var rePassword = document.getElementById("reEnterPassword").value;
    
    if (fname=="" || lname=="" || phone=="" || address=="" || email=="" || password=="" || rePassword==""){
        document.getElementById("errorMessage").innerHTML = "Please fill all the fields.";
    }else if(phone.length != 10){
        document.getElementById("errorMessage").innerHTML = "Phone number should contain 10 digits.";
    }else if (!isValidEmail(email)){
        document.getElementById("errorMessage").innerHTML = "Invalid e-mail address";
    }else if(password != rePassword){
        document.getElementById("errorMessage").innerHTML = "Passwords does not match.";
    }else {
    
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            
                if(this.responseText == "Sign Up Success"){
                    document.getElementById("errorMessage").innerHTML = this.responseText;
                    window.location.href = "index.php";
                }else{
                    document.getElementById("errorMessage").innerHTML = this.responseText;
                }
                
            }
        };
        xhttp.open('GET', "backend/signup.php?fname="+fname+"&lname="+lname+"&phone="+phone+"&address="+address+"&email="+email+"&password="+password+"&rePassword="+rePassword, true);
        xhttp.send();
    }
}











