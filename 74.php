<meta charset="utf-8">
<?php
print("<html>\n");
print("<head>\n");
print("<title>检查一个邮政编码</title>\n");
print("</head>\n");
print("<body>\n");
if (isset($zip))
{
	if(ereg("^([0-9]{6})(-[0-9]{5})?$",$zip))
	{
		print("$zip 是一个正确的邮政编码。<br>\n");
	}
	else
	{
		print("$zip<B>不是</B>一个正确的邮政编码<br>\n");
	}
}
print("<form action=\"74.php\">\n");
print("<input type=\"text\" name=\"zip\">\n");
print("<input type=\"submit\">\n");
print("</form>\n");
print("</body>\n");
print("</html>\n");					
?>