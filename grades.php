<?php
$test1=readline("Enter 1st test score out of 25 :")*0.25;
$test2=readline("Enter 2nd test score out of 25: ")*0.25;
$exam=readline ("Enter exam points out of 50: ")*0.5;

$total= $test1 + $test2 + $exam;
if ($total<50){
	echo"$total FAIL";
}
elseif($total>=50 and $total<=59){
	echo"$total PASS";
}
elseif($total>=60 and $total<=79){
	echo "$total CREDIT";
}
elseif($total>=80 and $total<=100){
	echo"$total DISTINCTION" ;
}





?>