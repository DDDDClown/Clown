<!DOCTYPE html>
<html>
	<head>
		<meta charset="{CHARSET}">
		<title></title>
	</head>
	<body>
	<form action="to.php" method="get">
	名字<input type="text" name="a">
	特点<input type="text" name="b">
	<input type="submit" value="提交">
	</form>	
	</body>
</html>



///提交至一下php脚本
<?php
echo $_GET["a"];
?>是
<?php
echo $_GET["b"];
?>
