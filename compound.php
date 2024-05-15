<?php
$p=readline( "enter principal amount  " );
$n=readline ("enter times it is compounded a year  ");
$r=readline ("Enter the interest rate in decimal"  );
$t=readline ("enter time in years ");
$A=$p*(1+$r/$n)**($n*$t);
echo $A;
?>