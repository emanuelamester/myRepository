<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8"/>
	<title>Feedback</title>
	<link href="css/style2.css" rel="stylesheet"/>
</head>

<body>
	<?php
		require('db.php');
		//if form submitted, insert values into the database.
		if (isset($_REQUEST['Name']))
		{
			//removes backslashes
			$Name = stripslashes($_REQUEST['Name']);
			//escapes special characters in a string
			$Name = mysqli_real_escape_string($con,$Name); 
	
			$Produs = stripslashes($_REQUEST['Produs']);
			$Produs = mysqli_real_escape_string($con,$Produs);
	
			$Adress = stripslashes($_REQUEST['Adress']);
			$Adress = mysqli_real_escape_string($con,$Adress);
	
			$Phone_Number = stripslashes($_REQUEST['Phone_Number']);
			$Phone_Number = mysqli_real_escape_string($con,$Phone_Number);
        
			$query = "INSERT into `comanda` (Name, Produs, Adress, Phone_Number) VALUES ('$Name', '$Produs', '$Adress', '$Phone_Number')";
			$result = mysqli_query($con,$query);
        
			if($result)
			{
				echo "<div class='form'><h3>Your command was created successfully.</h3><br/>Click here to go home <a href='home.php'>Home</a></div>";
			}
		}
		else
		{
	?>

	<div class="form">
		<h1>Feedback</h1>
		<form name="registration" action="" method="post">
			<div class="align"><label for="Name">Name</label></div>
			<input type="text" name="Name" placeholder="Name" required /><br/><br/>
			<div class="align"><label for="Produs">Produs</label></div>
			<input type="text" name="Produs" placeholder="Produs" required /><br/><br/>
			<div class="align"><label for="Adress">Adress</label></div>
			<input type="text" name="Adress" placeholder="Adress" required /><br/><br/>
			<div class="align"><label for="Phone_Number">Phone_Number</label></div>
			<input type="text" name="Phone_Number" placeholder="Phone_Number" required /><br/><br/>
			<input type="submit" name="submit" value="Command"/>
		</form>
	</div>	
	
	<?php 
		} 
	?>
	
</body>
</html>