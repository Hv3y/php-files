<?php
#without parameter
function greeting(){
	
	print "Hello world";
	
	
}greeting(); #calling a function
print("<br>");

#function with parameters

function add($num1,$num2){
	$sum= $num1 + $num2 ;
	print "the sum is " .$num1. "and " . $num2. " is " . $sum ."<br>";
	
}add(2, 6);//8
add(20, 60);//90

print("<br>");

function divi($x, $y, $z){
	$div=$x/$y/$z;
	print ($div)
	
	
}div(100, 2, 2);
div(200,4,4);



?>