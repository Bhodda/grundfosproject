<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>


<script>
function showPump(str) {
    if (str == "0") {
        document.getElementById("pumpInfo").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pumpInfo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getpump.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>


</head>
<body>

<form>
Product number:<input type="text" onfocusout="showPump(this.value)">
</form>
<br>
<div id="pumpInfo"><b>Pump info will be below</b></div>


</body>
</html>

