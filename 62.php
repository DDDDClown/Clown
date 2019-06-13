<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
print("开始：".microtime()."<br>\n");
for($index=0; $index<10;$index++)
	{
		print("tick");
	}	
	print("<br>"."停止:".microtime()."<br>\n");
?>
<?php
$currenthour=date("h");
print("从现在开始50小时以后为：");
print(date("h:i A 1F ds,Y",mktime($currenthour+50)));
print("<br>\n");
?>
<?php
$currenttime=time();
print($currenttime);
?>
</body>
</html>