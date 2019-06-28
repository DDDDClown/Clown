<html>
<head>
<meta charset="utf-8">	
<title></title>
</head>
<body>
	<font size=5>	
<?php
srand(time());
for($index=0;$index<10;$index++)
	{
		$number=(rand()%100)+1;
		print("$number \n");
	}
?>
</font>
</body>
</html>