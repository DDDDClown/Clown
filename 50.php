<html>
<head>
<meta  content="charset=utf-8">	
<title></title>
</head>
<body>	
<?php
$colors=array("red","blue","green");
if(is_array($colors))
{
	print("数组"."<br>");
}
$tem=3.14;
if(is_double($tem))
{
	print("双精度"."<br>");
}
$in=23333;
if(is_integer($in))
{
	print("整型"."<br>");
}
class AAA
{
	var $name;
	var $ture;
}
$L= new AAA;
if(is_object($L))
{
	print("对象"."<br>");
	}
$G="nmsl";
if(is_string($G))
{
	print("字符串"."<br>");
	}
?>
</body>
</html>
