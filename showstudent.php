<html>
<head>
<meta charset="utf-8">
</head>
<body>
<center>	
<?php
$con=mysqli_connect('localhost','root','519199543');
mysqli_select_db($con,'clown1');
$sql="SELECT*FROM student";
$res=mysqli_query($con, $sql);
echo "<table border='1px' width='400px'>";
echo "<tr><th>编号</th> <th>名字</th> <th>语文</th> <th>数学</th> <th>英语</th></tr>"	;
while($row=mysqli_fetch_assoc($res)){
echo 
"<tr> <td>{$row['id']}</td> <td>{$row['name']}</td> <td>{$row['chinese']}</td> <td>{$row['math']}</td>
	<td>{$row['english']}</td>
</tr>";		
}
echo "</table>";
echo '<br>';
?>
<form action="delstudent.php" method="post">
学生编号<input type='text' name='did'><br><br>
	   <input type='submit' value='删除学生'><br>
		</form>	
</center>
</body>
</html>	