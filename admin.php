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
			<form action="home.php" method="post">
				<div align="right">
					<input type="submit" value="Logout"/>
				</div>
			</form>
			
		</div>
  
		<div id="margineStanga">
			<div id="stanga">
				<div id="navigare">
					<h3><font face="Times New Roman" size = "4"><div align="center">Feedback</div></font></h3>
					<form action="Feedback.php" method="post">
						<div align="right">
							<input type="submit" value="Feedback"/>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="dreapta">
			<h3><font face="Times New Roman" size = "4"><div align="center">Comenzi</div></font></h3>
			<?php
			require('db.php');
			$interogare = "SELECT * FROM `comanda`";
			$row = mysqli_query($con,$interogare);
    		echo "<table border=1>";
			echo "<tr><td>Name</td><td>Produs</td><td>Adress</td><td>Phone_Number</td></tr>";
			while ($rows=mysqli_fetch_row($row)) {
				echo "<tr><td>$rows[1]</td><td>$rows[2]</td><td>$rows[3]</td><td>$rows[4]</td></tr>";
			}
			echo "</table>";
			
		?>
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