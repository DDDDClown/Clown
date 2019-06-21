<html>
<head>
<meta charset="utf-8">	
<title></title>
</head>
<body><table><center>
<?php
if($uploadaction)
{
	$uploadaction=0;
	$timelimit=60;
	set_time_limit($timelimit);
if(($upfile !="none")&&($upfile !=""))
{
	$filepath="C:\Users\\";
	$filename=$filepath.$UPFILE_NAME;
	if($upfile_size<1024)
		{
			$filesize=(string)$upfile_size."字节";
		}
	elseif($upfile_size<(1024*1024))
		{
			$filesize=number_format((double)
			($upfile_size/1024),1)."kb";
		}
	else{
		$filesize=number_format((double)
		($upfile_size/(1024*1024)),1)."mb";
	}
	if(!file_exists($filename))
	{
		if(copy($upfile,$filename))
		{
			unlink($upfile);
			echo "<br><br>\n";          
			echo "文件 $UPFILE_NAME上传成功!";
			echo "<br><br>\n";
			echo "文件位置：$filename";
			echo "<br><br>\n";
			echo "文件大小：$filesize";
			echo "<br><br>\n";			
		} 
		else{
			echo "文件 $UPFILE_NAME上传失败 ！";
		}
	}
	else
	{
		echo "文件 $UPFILE_NAME已经存在!";
	}		
}
else 
{
	echo "你没有选择任何文件上传";
}
set_time_limit(30);	
}
?>
<form enctype="mulitipart/form-data" name="submitform"
	action="71.php" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
<input type="hidden" name="uploadaction" value="1">
<tr><td><input name="uplie" type="file" sizze="30">	
</td></tr>
<tr><td><input name="submit" type="submit" value="提交">	
<input name="reset" value="重置" type="reset">
</td></tr>
</form></center></table>
</body>
</html>			