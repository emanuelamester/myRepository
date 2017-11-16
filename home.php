<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!DOCTYPE html>
<html>
<!-- <html xmlns="http://www.w3.org/1999/xhtml"> Optional in HTML5 -->

<head>
	<title>The Tea House</title>
	<meta charset="UTF-8"/> <!-- Este nou in HTML5 si inlocuieste <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
	
	<link href="css/style.css" rel="stylesheet"/>
	<link href="imagini/favicon/favicon.ico" rel="shortcut icon"/>
</head>

<body>
	<div id="intreagaPaginaWeb">
		<div id="sus">
			<form action="login.php" method="post">
				<div align="right">
					<input type="submit" value="Login"/>
				</div>
			</form>
			
			<form action="thankyou.php" method="post">
				<div align="right">
					<input type="submit" value="Feedback"/>
				</div>
			</form>
			<form action="comand.php" method="post">
				<div align="right">
					<input type="submit" value="Command now!"/>
				</div>
			</form>
		</div>
  
		<div id="margineStanga">
			<div id="stanga">
				<div id="navigare">
					<h3><font face="Times New Roman" size = "4"><div align="center">Shop</div></font></h3>
					<a href="imagini.html"><div align="center"><img src="imagini/diviziuni/stanga1.jpg"/></div></a>
					<a href="imagini.html"><div align="center" valign="bottom"><img src="imagini/diviziuni/stanga2.jpg"/></div></a>
				</div>
			</div>
		</div>
	
		<div id="dreapta">
			<a href="http://www.femtalks.com/wp-content/uploads/2009/04/tea-house-covent-garden.jpg?w=240"><img src="imagini/diviziuni/centru.jpg" align="left"/></a>
			<h3><div align="center"><br><br><br>
			Our main goal is to introduce people to the diverse world of tea and to show them that there is much more to tea than just a bag.
			We are dedicated to providing quality teas from around the world. 
			Most teas are sourced directly from the tea gardens or the manufacturers.</br></br></br></div></h3>
		</div>
  
		<div id="jos">
			<h4>Our Location: The Tea House</h4></br>
			<hr/>
			<h4>Piata Unirii 8, Timisoara</h4>
			<h4>Romania</h4></br>
			<hr/>
			
			<h5><div align="center">Email: office@tea-house.ro</div></h5>
			<h5><div align="center">Phone: 0721 674 578</div></h5>
		</div>

	</div>
</body>
</html>