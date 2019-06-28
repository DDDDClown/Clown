<html>
<head>
<meta charset="utf-8">	
</head>	
<body>	
<?php
function randomnumber($new_seed="")
{
	static $seed;
	$constant=bcadd(bcpow("2","13"),"1");
	$prime=37;
	$max_value=bcpow("2","50",$scale);
	if($new_seed !="")
	{
		$seed=$new_seed;
	}
	if($seed=="")
	{
		$seed=strval(time());
	}
	$seed=bcmul($constant,$seed);
    $seed=bcadd($seed,$prime);
    $seed=bcmod($seed,$max_value);
    return($seed);
}
for($index=0;$index<100;$index++)
	{
		print(randomnumber()."<br>\n");
	}
?>
</body>
</html>