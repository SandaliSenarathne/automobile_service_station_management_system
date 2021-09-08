//ajax common getter
function ajaxCommon(phpFileName, outPutStage){
    //if(navigator.onLine){
             //alert("Loading");
           var xmlhttp = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function() {
           if (this.readyState === 4 && this.status == 200) {
               document.getElementById(outPutStage).innerHTML  =  this.responseText;
               //alert("loading complete");
                  }
           };
           xmlhttp.open("GET", phpFileName, true);//generating  get method link
           xmlhttp.send();
        //}
   //else {
         //alert('offline');
        //}
   
}

function loadSignUp(){
    ajaxCommon("pages/signup.php","app");
}

function loadLogin(){
    ajaxCommon("pages/login.php","app");
}