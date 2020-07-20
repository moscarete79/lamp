<html>
<head>
<TITLE>Welcome to Radware!</TITLE>

<meta http-equiv="pragma" content="no-cache" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>


<BODY bgColor="F9F5F8">
<p><a href='/'><img src="images/TopBar.png" alt="Header Bar" border='0'></a></p>
<h2><font face=Calibri>Welcome to Radware!</font></h2>

<table width=1080>
<tr>
<tbody>
<td width=1080><font face=Calibri>Radware (NASDAQ: RDWR), is a global leader of application delivery and application security solutions for virtual, 
cloud and software defined data centers. Its award-winning solutions portfolio delivers service level assurance for business-critical applications, 
while maximizing IT efficiency. The Solutions of Radware empower more than 10,000 enterprise and carrier customers worldwide to adapt to market challenges quickly, 
maintain business continuity and achieve maximum productivity while keeping costs down. For more information, please visit <a href="http://www.radware.com">www.radware.com</a> </font>
</td></tr>
</tbody></table>
<font face=Calibri>Real Server address/port:</font>&nbsp;<font face=Calibri size=4><? echo $_SERVER['SERVER_ADDR']; ?>:<b><? echo $_SERVER['SERVER_PORT']; ?></b></font><br>

<?php
echo "<font face=Calibri>Requested URI: ".$_SERVER['REQUEST_URI']." </font></p>"; 
?>


<img src="images/RadwareBuilding.jpg" alt="Radware Corporate Office"><br><br>
<a href='/'><img src="images/BottomBar.png" alt="Header Bar" border='0'></a></p>
	

</body>
</html>
