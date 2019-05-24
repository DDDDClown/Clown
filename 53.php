<html>
<head>	
	<meta charset="utf-8">                                        
<title></title>
</head>
<body>
<?php
$colors=array("red","green","blue","yellow");
print("数组个数:".count($colors)."<br>");
print("数组的值:".current($colors)."<br>");
end($colors);
print("数组最后一个:".current($colors)."<br>");
print("<hr>");
$slice = each($colors);
print("each函数"."<br>");
print($slice[0]."====".$slice[1]."<br>\n");
print($slice['key']."====".$slice['value']."<br>\n");
							
?>
</body>
</html>	