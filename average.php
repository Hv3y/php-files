<?php
$num1=readline("enter 1st number: ");
$num2=readline("enter 2nd number: ");
$num3=readline ("enter 3rd number: ");
$average=$num1+$num2+$num3/3;
if ($average>50){
	echo "Aberage is above 50";
}
elseif($average<50){
	echo "Average is less han 50";
}
else{
	echo "Average= 50";
}



?>