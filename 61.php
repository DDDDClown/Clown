<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
if(checkdate(2,18,1970))
{
	print("2,18,1970 :"."正确的日期格式");
}
else
{
	print("不正确的日期格式");
}
if(checkdate(52,18,1970))
{
	print("正确的日期格式");
}
else
{
	print("52,18,1970:"."不正确的日期格式");
}
?>
</body>
</html>