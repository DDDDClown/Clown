<html>
<head>
<meta charset="utf-8">	
<titke></title>
</head>
<body>
<?php
function byname($left,$right)
{
	return(strcmp($left[0],$right[0]));
}
$employee[]=array("tom,john","programmer",20);
$employee[]=array("jas,john","programmer",20);
$employee[]=array("june,john","programmer",20);
$employee[]=array("aili,john","programmer",20);
$employee[]=array("doe,jane","programmer",20);
$employee[]=array("mann,joe","manager",35);
$employee[]=array("smith,john","ceo",50);
$employee[]=array("leeds,ai","president",100);
usort($employee,"byname");
$name="mann,joe";
$lower_limit=0;
$upper_limit=count($employee)-1;
while($lower_limit<$upper_limit)
	{
		$index=intval(($lower_limit+$upper_limit)/2);
	
if(strcmp($employee[$index][1],$name)>0)
{
	$lower_limit=$index+1;
}
elseif(strcmp($employee[$index][1],$name)<0)
	{
		$upper_limit=$index-1;
	}
	else
	{
		$lower_limit=$index;
		$upper_limit=$index;
	}
}
print("mann,joe 在数组的位置："."$index<br>\n")
?>
</body>
</html>