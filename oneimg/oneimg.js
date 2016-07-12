function showoneimg(){
        document.getElementById('oneimgmenu').style.display='block';
        document.getElementById('oneimgmenuimg').style.display='none';
    }
    function hideoneimg(){
        document.getElementById('oneimgmenu').style.display='none';
        document.getElementById('oneimgmenuimg').style.display='block';
    }
    function getCookie(Name) {
    var cookieName = encodeURIComponent(Name) + "=",  
        returnvalue = "",
        cookieStart=document.cookie.indexOf(cookieName),
        cookieEnd=null;
    if (cookieStart>-1) {
        cookieEnd = document.cookie.indexOf(";",cookieStart);
        if (cookieEnd == -1){
            cookieEnd = document.cookie.length;
        }
        returnvalue=decodeURIComponent(document.cookie.substring(cookieStart+cookieName.length, cookieEnd));  
    } 
    return returnvalue;
 }
  
window.onload=function(){
    Bcookie=getCookie("oneimg");
    if(Bcookie==""){
       ChangerImg()
    }
    else{
         OneImg = "https://app.haotown.cn/img/bj@" + Bcookie + ".jpg";
         document.getElementById("oneimg").style.backgroundImage = "url(" + OneImg + ")";
    }
}
function ChangerImg(){
        OneImgnumber=Math.round(Math.random() * 2376);
        document.cookie="oneimg="+OneImgnumber+";path=/"; 
        OneImg = "https://app.haotown.cn/img/bj@" + OneImgnumber + ".jpg";
        document.getElementById("oneimg").style.backgroundImage = "url(" + OneImg + ")";
}
function DownImg(){
    window.open("https://app.haotown.cn/img.html?img=" +getCookie("oneimg"));
}
