<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>

<?php
function getScreen(){
  if(!$_GET["screenX"]){  
    echo '<script>location=location.href+"?screenX="+document.documentElement.clientWidth+"&screenY="+document.documentElement.clientHeight;</script>';  
    exit;  
  }  
  $screenX=$_GET["screenX"];  
  $screenY=$_GET["screenY"];
  $screen=$screenX."*".$screenY;
  Return $screen;
 }
 getScreen();
 $x = $_GET["screenX"];
 $y = $_GET["screenY"];
 $url = "Location: biaobai.php?x=".$x."&y=".$y; 
 header("$url"); 
 //echo '<script>location=location.href+"?screenX="+screen.width+"&screenY="+screen.height;</script>'; 
?>


</body>
</html>