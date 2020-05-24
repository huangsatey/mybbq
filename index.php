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
<style type="text/css">
body{
	background-image: url(img/background.jpg);
}
p{
	color:blue;
}
#div1{
	background-color:black;
	position:absolute;
	width:1500px;
	height:6\50px;
}
r1{
	color:red;
}
r2{
	color:blue;
}
r3{
	color:pink;
}
r4{
	color:black;
}
r{
	color:white;
}
</style>
<div name = "div" id="div1" >
<a href="https://github.com/huangsatey/mybbq" target="_blank" rel="noopener noreferrer"><img src="img/github.jpg" ></a>
<r>Powered by huangsatety@A student in China Shuide Ronggui Primary School <r>
</div>		
<br>
<br>
<br>
<form  name="form" method="post" action="">
  <label for="text"><p> 说出来（表白) <p></label>
  <input type="text" name="text" id="textfield"  />
  <input type="submit" class="btn btn-success" name="submit" id="submit" value="表白" onclick="submit_alert()"/>
  <input type="reset" class="btn btn-warning" name="reset" id="reset" value="算了" onclick="reset_alert()"/> 
</form>
<?php
if($_POST['submit']){
	if(empty($_POST['text'])){
		exit;
	}else{
	$data=$_POST['text'].'   ';
	$fopen = fopen('data.txt','a+');
	fwrite($fopen,$data);
	fclose($fopen);	
	}
	}
?>
<?php
if(is_file('data.txt')){
	$text=readfile('data.txt');
	$text_array=explode('   ',$text);
	if(empty($text_array)){
	foreach($text_array as $out)
	{
		$num = rand(4,1);
		echo " <p>$out<p> " ;
	}
	}
}else{
	copy('file/OTHER.htmlvc','data.txt');
}
?>


</body>
</html>
