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












