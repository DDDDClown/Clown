<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>添加学生界面</title>
		<script type="text/javascript">
			</script>
	</head>
	<body >
		<h1>添加界面</h1>
		<form action="insertstudent.php" method="post">
		学生编号<input type="text" name="stid"><br><br>
		学生姓名<input type="text" name="stname"><br><br>
		语文成绩<input type="text" name="chinese"><br><br>
		数学成绩<input type="text" name="math"><br><br>
		英语成绩<input type="text" name="english"><br><br>
		<input type="submit" value="提交"><br><br>
		</form>
		<form action="showstudent.php" method="post">
        <input type="submit" value="查看学生表">
        </form>
	</body>
</html>
