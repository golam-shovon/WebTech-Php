<?php
	$x=5;
	$y=10;
	
	
	echo "Additon ".($x+$y)."<br>"."Subtraction ".($y-$x)."<br>"."Division ".($y/$x)."<br>"."Multipication ".($y*$x)."<br>";
	for($z=0;$z<=9;$z++)
	{
		echo"$z Shovon<br> ";
		
	}
	$arr=array("One","Two","Three","Four","Five","Six","Seven","Eight","Nine","Ten");
	$arrlength = count($arr);
	for ($x = 0; $x < $arrlength; $x++)
	{
		echo $arr[$x]." Shovon "."<br>";
	}
	

?>