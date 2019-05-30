<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
$n= $e = $g = $c = $w= "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$n = test_input($_POST["name"]);
	$e = test_input($_POST["email"]);
	$w = test_input($_POST["website"]);
	$c = test_input($_PSOT["comment"]);
	$g = test_input($_POST["gender"]);
}
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>表单验证</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
名字：<input type="text" name="name"><br><br>
E-mail:<input type="text" name="email"><br><br>
网址：<input type="text" name="website"><br><br>
备注：<textarea name="comment" rows="5" cols="40"></textarea><br><br>
性别：
<input type="radio" name="gender" value="女">女
<input type="radio" name="gender" value="男">男<br><br>
<input type="submit" name="submit" value="Submit">									
</form>

<?php
echo "<h2>输入的内容</h2>";
echo $n;
echo "<br>";
echo $e;
echo "<br>";
echo $w;	
echo "<br>";
echo $c;	
echo "<br>";
echo $g;			
?>
</body>
</html>			
		