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
	
			$Email = stripslashes($_REQUEST['Email']);
			$Email = mysqli_real_escape_string($con,$Email);
	
			$Message = stripslashes($_REQUEST['Message']);
			$Message = mysqli_real_escape_string($con,$Message);
        
			$query = "INSERT into `feed` (Name, Email, Message) VALUES ('$Name', '$Email', '$Message')";
			$result = mysqli_query($con,$query);
        
			if($result)
			{
				echo "<div class='form'><h3>Your feedback was created successfully.</h3><br/>Click here to go home <a href='home.php'>Home</a></div>";
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
			<div class="align"><label for="Email">Email</label></div>
			<input type="text" name="Email" placeholder="Email" required /><br/><br/>
			<div class="align"><label for="Message">Message</label></div>
			<input type="text" name="Message" placeholder="Your Message!" required /><br/><br/>
			<input type="submit" name="submit" value="Feedback"/>
		</form>
	</div>	
	
	<?php 
		} 
	?>
	
</body>
</html>