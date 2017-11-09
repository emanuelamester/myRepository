
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Feedback</title>
<link rel="stylesheet" type="text/css" href="style2.css"/>
</head>
<body>
<?php
require('connection.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['u_name'])){
        // removes backslashes
	$u_name = stripslashes($_REQUEST['u_name']);
        //escapes special characters in a string
	$u_name = mysqli_real_escape_string($con,$u_name); 
	$u_email = stripslashes($_REQUEST['u_email']);
	$u_email = mysqli_real_escape_string($con,$u_email);
	$subj = stripslashes($_REQUEST['subj']);
	$subj = mysqli_real_escape_string($con,$subj);
	$message = stripslashes($_REQUEST['message']);
	$message = mysqli_real_escape_string($con,$message);
        $query = "INSERT into `tb_cform` (u_name, u_email, subj, message)
VALUES ('$u_name', '$u_email', '$subj', '$message')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Your feedback was created successfully.</h3>
<br/>Click here to go home <a href='home.php'>Home</a></div>";
        }
    }else{
?>

<div class="form">
	<h1>Feedback</h1>
	<form name="registration" action="" method="post">
		<div class="align"><label for="u_name">Username</label></div>
		<input type="text" name="u_name" placeholder="Username" required /><br/><br/>
		<div class="align"><label for="u_email">Email</label></div>
		<input type="text" name="u_email" placeholder="Email" required /><br/><br/>
		<div class="align"><label for="subj">Subject</label></div>
		<input type="text" name="subj" placeholder="Subject" required /><br/><br/>
		<div class="align"><label for="message">Message</label></div>
		<input type="text" name="message" placeholder="Your Message!" required /><br/><br/>
		
		<input type="submit" name="submit" value="Feedback" />
	</form>
</div>	
<?php } ?>
</body>
</html>