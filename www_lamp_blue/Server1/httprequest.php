<html>
<head>
<TITLE>Simple Web Page for Viewing HTTP Requests</TITLE>

<meta http-equiv="pragma" content="no-cache" />

</head>


<BODY bgColor="FFFFFF">

<h2><font face=Calibri>Simple HTTP Request Page</font></h2>
<p><font face=Calibri>Virtual server address:</font>&nbsp;<font face=Calibri size=4><? echo $_SERVER['HTTP_HOST']; ?></font><br>
<font face=Calibri>Pool member address/port:</font>&nbsp;<font face=Calibri size=4><? echo $_SERVER['SERVER_ADDR']; ?>:<b><? echo $_SERVER['SERVER_PORT']; ?></b></font><br>
<?php
echo "<font face=Calibri>Client IP address/port: ".$_SERVER['REMOTE_ADDR'].":".$_SERVER['REMOTE_PORT']."<br>"; 
echo "Requested URI: ".$_SERVER['REQUEST_URI']." </font><br>&nbsp;</p>"; 
?>







</body>
</html>
