<html>
<head>
<meta charset="utf-8">		
<title></title>
</head>
<body>
<?php
$first="abc";
$second="ABC";
if(strcmp($first,$second)==0)
{
	print("字符串相等"."<hr>");
		
}
else
{
	print("字符串不相等"."<hr>");
}
?>
<?php
print("妮口妮口妮".strlen("妮口妮口妮")."<hr>");
?>
<?php
$text="power is power";
print(strpos($text,"e")."<hr>");
?>
</body>
</html>