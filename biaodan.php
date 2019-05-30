<html>	
<head>
<meta charset="utf-8">
<title></title>
<style>
.error{color:#ff0000;}	
</style>	
</head>
<body>
<?php
$n= $e = $g = $c = $w= "";
$nerr = $eerr= $gerr="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))//empty()函数检验是否提交
	{$nerr="必须填写";}
	else{$n = test_input($_POST["name"]);}
	if(empty($_POST["email"])){$eerr="必须填写";}
	else{$e = test_input($_POST["email"]);}
	$w = test_input($_POST["website"]);
	$c = test_input($_POST["comment"]);
	if(empty($_POST["gender"])){$gerr="必须选择";}
	else{$g = test_input($_POST["gender"]);}
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
名字：<input type="text" name="name">
	<span class="error">*<?php echo $nerr;?></span>//<span>提示标签
	<br><br>
E-mail:<input type="text" name="email">
	<span class="error">*<?php echo $eerr;?></span>
	<br><br>
网址：<input type="text" name="website"><br><br>
备注：<textarea name="comment" rows="5" cols="40"></textarea><br><br>
性别：
<input type="radio" name="gender" value="女">女
<input type="radio" name="gender" value="男">男
	<span class="error">*<?php echo $gerr;?></span>
	<br><br>
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
		
