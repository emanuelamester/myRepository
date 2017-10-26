<?php
session_start();
if(isset($_SESSION["username"])){
	echo "<h1>Name:". $_SESSION["username"]. "</h1>";
	header("Location: home.php");
	exit();
}
?>