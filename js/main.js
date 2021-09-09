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


function loadLogin(){
    ajaxCommon("pages/login.php","app");
}

function loadSignUp(){
    ajaxCommon("pages/signup.php","app");
}

function loadWelcome(){
    ajaxCommon("pages/welcome.php","app");
}











