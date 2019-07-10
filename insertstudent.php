 <html>
<head>
 <meta charset="utf-8">
<title></title>	
</head> 
<body>
	<center>	
 <?php
$studentid=$_POST['stid'];
$studentname=$_POST['stname'];
$chinese=$_POST['chinese'];
$math=$_POST['math'];
$english=$_POST['english'];
//echo $studentid.'<br>'.$studentname.'<br>'.$chinese.'<br>'.$math.'<br>'.$english;
//echo '<pre>';
//print_r($_POST);	
$con=mysqli_connect('localhost','root','519199543');
if(!$con){
	echo '<b>添加失败';
	exit;
}
else{
	echo '<b>添加成功';
}
mysqli_select_db($con,'clown1');
$sql="insert into student(id,name,chinese,english,math)values($studentid,'$studentname','$chinese','$math','$english')";
mysqli_query($con, $sql);
echo '<br>';
?> 
<form action="showstudent.php" method="post">
<input type="submit" value="查看学生表">
</form>

</center>	
</body>
</html>  