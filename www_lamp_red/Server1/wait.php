<html>
<head>
<TITLE>Slow Page in server <? echo $_SERVER['HTTP_HOST']; ?> and Server Node <? echo $_SERVER['SERVER_ADDR']; ?> (Node #1)</TITLE>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>

<body onload='loadInfo()'>
<BODY bgColor="F9F5F8" onload="javascript:if (document.cookie) showCookieLink()">

<p><img src="images/TopBar.png" alt="Header Bar"></p>
<table width=1080>
<tr>
<td width=70%><p><font face=Calibri><a href="/welcome.php"><br>Welcome</a> to the slow page. You're not really supposed to be here. <br>&nbsp;</p>
</td>
<td width=30% align=right><img width=200 src="images/wwfr.png"></td>
</tr>
</table>

<h2><font face=Calibri>This page is supposed to sleep really slowly</font></h2>
<p>
<?php

// hora actual
echo "Hora actual: ";
echo date('h:i:s') . "<br>";

// dormir durante 5 segundos
sleep(5);

echo "Despierta: ";
echo date('h:i:s') . "<br>";

?>
</font><br>&nbsp;</p>
<p><img src="images/BottomBar.png" alt="Header Bar"></p>
<table width=1050 border=0>
<tr>
<td width=550><font face=Calibri size=2><br> &copy Radware Ltd. 2016 All Rights Reserved.</font></td>
<td width=100 align=right><img src="images/radwarelogo.gif" alt="Radware"></td>
</tr>
</table>

</body>
</html>

