<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
function calculate($period)
{
	return(cos(time()%$period));
}
$start=time();
for($index=0;$index<2000;$index++)
	{
		$value = calculate(360);
	}
	$finish=time();
	print("循环的时间为："."<br>".
	($finish-$start)."seconds<BR>\n");
print("<hr>");
print("value的值为：".$value);			
?>
</body>
</html>