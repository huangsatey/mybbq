<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/alert.js"></script>
</head>

<body>

<?php
include 'db.php';
$y=$_GET['y']-40;
$x=$_GET['x']-15;
echo "<img src='$background' height='$y' width='$x' />" ;
?>
<br />
<form  name="form" method="post" action="">
  <label for="text">说出来（表白）</label>
  <input type="text" name="text" id="textfield" />
  <input type="submit" class="btn btn-success" name="submit" id="submit" value="表白" onclick="submit_alert()"/>
  <input type="reset" class="btn btn-warning" name="reset" id="reset" value="算了" onclick="reset_alert()"/>
  
</form>

</body>
</html>
