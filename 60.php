<html>
<head>
<mate charset="utf-8">
<title></title>
</head>
<body>
<?php
print(date("h:i A l"));
print("<br>");
print(date("F ds, Y"));	
?>
<?php
$current_date=getdate(time());
print("<hr>");
printf("%d:%d:%d",
$current_date["hours"],
$current_date["mintes"],
$current_date["seconds"]);	
?>
</body>
</html>