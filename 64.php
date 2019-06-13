<html>
<head>
<mate charset="utf-8">	
<title></title>	
</head>	
<body>	
<img src="">
	<br>
<?php
$image_file="";
$image_size=
  getimagesize($image_file);
    print("图片的宽度：".$image_size[0]."<br>");
    print("图片的高度：".$image_size[1]."<br>");
    print("文件的格式：".$image_size[2]."<br>");	
?>
</body>
</html>