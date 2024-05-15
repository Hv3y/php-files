<?php
$posint=[];
$score=0;

print " enter positive integer to continue and a negative one to terminate program <br>";

while ($score>=0){
	$score=readline("enter a score:  ");
	if ($score>=0){
		$posint[]=$score;
}
}
$max=max($posint);
$min=min($posint);
print "Max score is: $max <br>";
print "Min score is: $min <br>";
sort($posint);
print $posint;




?>