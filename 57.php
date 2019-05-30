<html>
<head>
	<meta charset="utf-8">
<title></title>	
</head>
<body>
<?php	
$data="b24gbW9yZSB0aW1l ";
print($data);
print(base64_decode($data));//解码base64_decode
?>
<?php
print("<hr>");
$text="on more time";
print($text);
print(base64_encode($text));//编码base64_encode	
?>
</body>
</html>