<html>
<head>
<meta charset="utf-8">	
<title></title>
</head>
<body>	
<?php
$text="my dog's name is zhenggeliang.";
print(substr($text,2,6)."<hr>");
?>
<?php
$line="E\1社会主义核心价值\1哲学\1♂";
for($token=strtok($line,"\1");
$token !="";
$token=strtok("\1"))
{
	print("token:$token<br>\n");
}
?>
<?php
$text="陈星烨是傻逼。";
print("<hr>".strstr($text,"傻"));

?>
</body>
</html>