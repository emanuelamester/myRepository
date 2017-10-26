<?php
session_start();
if(isset($_SESSION["username"]) == 0){
	header("Location: login.php");
	exit();
}
?>