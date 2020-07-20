<html>
<head>
<TITLE>Using virtual server <? echo $_SERVER['HTTP_HOST']; ?> and Server Node <? echo $_SERVER['SERVER_ADDR']; ?> (Node #1)</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
 <script language="javascript">
  function showCookieLink() {
    var ele = document.getElementById("CookieLink");
    ele.style.display = "block";
  } 
 </script>

<meta http-equiv="pragma" content="no-cache" />
<script language="JavaScript" type="text/javascript">
<!--
function loadInfo() {
	var http;
	if(window.ActiveXObject){
		http = new ActiveXObject("Microsoft.XMLHTTP");
	}else if(window.XMLHttpRequest){
		http = new XMLHttpRequest();
	}
	// display headers of current document:
	http.open('HEAD', location.href, false);
	http.send();

	var hstring = '<p><font face=Calibri size=2 color=black>';
	var headerarray = http.getAllResponseHeaders().split("\n");
	for(i = 0; i < headerarray.length; i++){
	   hstring = hstring+"-&nbsp;"+headerarray[i]+"<br>"; 
	}
	hstring = hstring+'</p>';
	var rhdiv = document.getElementById('responseheaders');
	rhdiv.innerHTML = hstring;
}

</script>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body onload='loadInfo()'>

<BODY bgColor="F5F8F9" onload="javascript:if (document.cookie) showCookieLink()">

<p><img src="images/TopBar.png" alt="Header Bar"></p>
<table width=1080>
<tr>
<td width=70%><p><font face=Calibri><a href="/welcome.php"><br>Welcome</a> to Radware Lab Test Web Site. This Web site is designed to be used with Radware Alteon Lab hands-on exercises and customer demonstrations.<br>&nbsp;</p>
</td>
<td width=30% align=right><img width=200 src="images/wwfr.png"></td>
</tr></table>

<h2><font face=Calibri>Request Details</font></h2>
<p><font face=Calibri>The <i>index.php</i> page is from <font color="003399"><b>Node #1</font></b><br>
<font face=Calibri>Virtual Server IP Address:</font>&nbsp;<font face=Calibri size=4><? echo $_SERVER['HTTP_HOST']; ?></font><br>
<font face=Calibri>Real Server Address/port:</font>&nbsp;<font face=Calibri size=4 color="003399"><b><? echo $_SERVER['SERVER_ADDR']; ?>:<? echo $_SERVER['SERVER_PORT']; ?></b></font><br>
<?php
echo "Client IP address/port: ".$_SERVER['REMOTE_ADDR'].":".$_SERVER['REMOTE_PORT']."<br>"; 
echo "Requested URI: ".$_SERVER['REQUEST_URI']." </font><br>&nbsp;</p>"; 
?>

<h2><font face=Calibri>Radware Platform List</font></h2>
<p><img src="images/Alteon10000.jpg" alt="Alteon 10000">&nbsp;&nbsp;<img src="images/Alteon8420.jpg" alt="Alteon NG 8420"><br><br>
<img src="images/Alteon6420.jpg" alt="Alteon NG 6420">&nbsp;&nbsp;<img src="images/Alteon5208.jpg" alt="Alteon NG 5208"><br><br>
<img src="images/Alteon5224.jpg" alt="Alteon NG 5224">&nbsp;&nbsp;<img src="images/Alteon6024.jpg" alt="Alteon NG 6024"></p>

<h2><font face=Calibri>Content Examples on This Host</font></h2>
<p><font face=Calibri><a href='/bigtext.html'>HTTP Compress Example</a><br>

<a href='/lorax.php'>Stream Profile Example</a><br>


<a href='/httprequest.php'>Simple HTTP Request</a><br>
<a href='/headers.php'>Request and Response Headers</a><br>
<a href='/sessioncookiecontrol.php'>Web Session Example</a><br>
<div id="CookieLink"><a href="index.php" onclick="alert('Cookie = ' + document.cookie); return false;">Display Cookie</a></div>


<h2><font face=Calibri>Authentication Examples</font></h2>
<p><a href='/basic/'>Basic Authentication</a><br>



<p><img src="images/BottomBar.png" alt="Header Bar"></p>
<table width=1050 border=0>
<tr>
<td width=550><font face=Calibri size=2><br> &copy Radware Ltd. 2016 All Rights Reserved.</font></td>
<td width=100 align=right><img src="images/radwarelogo.gif" alt="Radware"></td>
</tr>
</table>	

</body>
</html>
