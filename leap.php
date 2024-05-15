<?php

$year=readline(" Enter a year:  ");
if($year%400==0 and $year%100 !==0 or $year%4==0){
	echo $year. " Is a leap year";
}
else{
	echo $year. " is not a leap year";
}

?>