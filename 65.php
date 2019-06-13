<html>
<head>
<meta charset="utf-8">		
<title></title>
</head>
<body>
<?php
$username="Clown";
if(isset($username))
{
	session_name($username);
}
echo "我的名字为：".session_name();
?>
</body>
</html>
