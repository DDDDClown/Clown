<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
print(abs(-20));
?>
<?php
print("<table border=\"1\">\n");
print("<tr><th>x</th><th>acos(x)</th><tr>\n");
	for($index=-1;$index<=1;$index+=0.25)
		{
			print("<tr>\n");
			print("<td>$index</td>\n");
			print("<td>".acos($index)."</td>\n");	
			print("</tr>\n");	
		}
print("</table>\n");		
?>
<?php
print("<table border=\"1\">\n");
print("<tr><th>x</th><th>asin(x)</th><tr>\n");
	for($index=-1;$index<=1;$index+=0.25)
		{
			print("<tr>\n");
			print("<td>$index</td>\n");
			print("<td>".asin($index)."</td>\n");	
			print("</tr>\n");	
		}
print("</table>\n");
?>
</body>
</html>