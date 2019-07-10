<html>
<meta charset="utf-8">
</head>
<body>	
<?php
$dsid=$_POST['did'];
$con=mysqli_connect('localhost','root','519199543');
mysqli_select_db($con,'clown1');
$sql="delete from student where id=$dsid";
$res=mysqli_query($con, $sql);
if(!$res){
	echo '<b>删除失败！';
	exit;
}
else{
	echo '<b>删除成功！';
}
?>
<form action="showstudent.php" method="post">
<input type="submit" value="查看学生表">
</form>
</body>
</html>