<meta charset="utf-8">
<?php
function datecheck($ymd,$sep='_')
{
	$p=explode($sep,$ymd);
	$year=$p[0];
	$month=$p[1];
	$day=$p[2]; 
	if(isint($year) && isint($month) && isint($day))
	{
		if(checkdate($month,$day,$year))
		return true;
		else return false;
	}
	else return false;
}
function isint($str)
{
	$str=(string)$str;
	$pos=0;
	$len=strlen($str);
	for($i=0;$i<$len;$i++)
		{
			if($str[$i]=='0')$pos++;
			else break;
		}
		$str=substr($str,$pos);
		$int=(int)$str;
		if($str==(string)$int)return true;
		else return false;
}
$dates=array(
'2000-4-11'=>'-',
'1900-2-1'=>'-',
'2001-03-01'=>'-',
'adaf'=>'-',
'20.04.09'=>'.'
);
while(list($date,$sep)=each($dates))
{
	if(datecheck($date,$sep))
	echo $date.'合法日期<br>';
	else echo $date.'不合法日期<br>';
}
?>