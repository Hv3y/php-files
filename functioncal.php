<?php
function mul($num1, $num2, $num3)
{$mul= $num1*$num2*$num3;
echo $mul."<br>";}
function div($num1, $num2, $num3)
{$div=$num1/$num2/$num3;
echo $div."<br>";}
function sub($num1,$num2, $num3)
{$sub= $num1-$num2-$num3;
echo"substraction $num1 - $num2 - $num3  of is ". $sub."<br>";}
mul(200,3,7);
div(100,2,6);
sub(100,20,5);
?>