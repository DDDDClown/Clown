<HTML>
<HEAD>
<meta charset=utf-8>	
<TITLE>打印表格</TITLE>
</HEAD>
<BODY>
<?php
print("<table bgcolor='ffccoo'border=\"1\">\n");
	for($row=1; $row<=12;$row ++)
		{
	print("<tr>\n");
	for($column=1;$column<=12;$column ++)
		{
	print("<td>");
	print($row*$column);
	print("</td>");
	}
	print("</tr>\n");
	}
	print("</table>\n");	
					
?>
</BODY>
</HTML> 
