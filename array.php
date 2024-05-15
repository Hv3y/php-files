<?php
#index arrays
$array1=array(1,2, "hi",true,1.2);
$arr=[];
print_r($array1);
print("<br>");
print $array1[0]; print("<br>");
print $array1[2];
#assiciative arrays
#key => Value

$array2=array("fname"=>"john", "second"=>"doe","x"=>2);
print_r($array2);
print $array2["fname"]; print("<br>");
#multi-dimentional arrays
$multi=array(array(1,2),array(1,5),array(7,8));
print_r($multi);


?>