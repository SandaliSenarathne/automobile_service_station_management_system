//ajax common getter
function ajaxCommon(phpFileName, outPutStage){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status == 200) {
            document.getElementById(outPutStage).innerHTML  =  this.responseText;
        }
    };
    xmlhttp.open("GET", phpFileName, true);
    xmlhttp.send();
   
}

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












