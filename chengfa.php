<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
class A{
	public function jisuan(){	
for($i=1;$i<10;$i++){
	for($o=1;$o<=$i;$o++){
		echo $o."*"."$i"."=".$o*$i."&nbsp;&nbsp;";
		if($o==$i){
			echo "<br>";
		}
	}
}
}
}
$A=new A;
$A->jisuan();

?>
</body>
</html>