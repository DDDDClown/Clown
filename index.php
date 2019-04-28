<HTML>
<HEAD>
<meta charset=utf-8>	
<TITLE></TITLE>
</HEAD>
<BODY>
<font size=5>
<?php
function printcolored($text,$color="blue")
{
	print("<font color=\"$color\">$text</font>") ;
}
    printcolored("蓝色");
    print("<br>\n");
    printcolored("黑色，蓝色");
    print("<br>\n");
    print("没有颜色");
    print("<br>\n");
    			
?>
</font>
</BODY>
</HTML> 
