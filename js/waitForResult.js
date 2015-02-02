/**
 * Created by 怡炜 on 2015/1/21 0021.
 */
function checkResult(urlId){
    var checkRequest;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        checkRequest=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        checkRequest=new ActiveXObject("Microsoft.XMLHTTP");
    }
    checkRequest.onreadystatechange = function () {
        if (checkRequest.readyState == 4 && checkRequest.status == 200) {
            //resultArea.innerHTML=resultArea.innerHTML+"<br>"+checkRequest.responseText;
        }
    }
    checkRequest.open("POST", "getResult.php", true);
    checkRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    checkRequest.send("urlId=" + urlId);
}

function dig(urlId){
    var n=0;
    var play;
    var resultArea = document.getElementById("resultArea");
    function display(){
        resultArea.innerHTML=resultArea.innerHTML+"<br>"+n;
        checkResult(urlId);//document.write(n+"<br>");
        n++;
        if(n==10){
            clearInterval(play);
        }

    }
    setTimeout(display,500);
    play = setInterval(display,1000);
}

function checkForm(){
    var xmlhttp;
    var insertOK=0;
    var urlId;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    function send() {
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                insertOK = xmlhttp.responseText;
                insertOK = insertOK.charAt(insertOK.length - 1);
                if(insertOK==0){send()};
            }
        }
        urlId = parseInt(Math.random()*100000);
        xmlhttp.open("POST", "post.php", false);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("url=" + document.getElementById("url").value + "&submit=" + document.getElementById("submit").value + "&urlId=" + urlId);
    }
    send();
    dig(urlId);
}

